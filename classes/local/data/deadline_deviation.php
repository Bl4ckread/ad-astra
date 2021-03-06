<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

namespace mod_adastra\local\data;

defined('MOODLE_INTERNAL') || die();

class deadline_deviation extends \mod_adastra\local\data\deviation_rule {
    const TABLE = 'adastra_dl_deviations';

    /**
     * Return the normal deadline for this rule as a Unix timestamp.
     *
     * @return int Unix timestamp.
     */
    public function get_normal_deadline() {
        return $this->get_exercise()->get_exercise_round()->get_closing_time(); // Unix timestamp.
    }

    /**
     * Return the extra time for this rule in minutes.
     *
     * @return int In minutes.
     */
    public function get_extra_time() {
        return (int) $this->record->extraminutes; // In minutes.
    }

    /**
     * Return the new deadline for this rule as a Unix timestamp.
     *
     * @return int Unix timestamp.
     */
    public function get_new_deadline() {
        return self::add_minutes_to_timestamp($this->get_normal_deadline(), $this->get_extra_time());
    }

    /**
     * Adds time to a timestamp
     *
     * @param int $timestamp Unix timestamp.
     * @param int $minutes
     * @return int Unix timestamp.
     */
    protected static function add_minutes_to_timestamp($timestamp, $minutes) {
        $time = new \DateTime('@' . $timestamp); // DateTime from a Unix timestamp.
        $newtime = $time->add(new \DateInterval("PT{$minutes}M"));
        return $newtime->getTimestamp();
    }

    /**
     * Return true if late penalty should be applied in this deviation rule, false otherwise.
     * If true, late penalty is applied when the student submits after the original deadline
     * and before the extended deadline. Otherwise, the late penalty is not applied during the
     * extension at all. Submitting after the extended deadline yields zero points, unless
     * normal late submissions are still open and enabled, in which case the late penalty is
     * applied normally.
     *
     * @return boolean
     */
    public function use_late_penalty() {
        return !((bool) $this->record->withoutlatepenalty);
    }

    public static function create_new($exerciseid, $userid, $extraminutes, $withoutlatepenalty) {
        global $DB;

        if (self::find_deviation($exerciseid, $userid) === null) {
            // Does not exist yet.
            $record = new \stdclass();
            $record->submitter = $userid;
            $record->exerciseid = $exerciseid;
            $record->extraminutes = $extraminutes;
            $record->withoutlatepenalty = (int) $withoutlatepenalty;
            return $DB->insert_record(self::TABLE, $record);
        } else {
            // User already has a deviation in the exercise.
            return null;
        }
    }
}
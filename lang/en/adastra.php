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

/**
 * Plugin strings are defined here.
 *
 * @package     mod_adastra
 * @category    string
 * @copyright   2020 Your Name <you@example.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['modulename'] = 'Ad Astra';
$string['pluginname'] = 'Ad Astra';
$string['modulenameplural'] = 'Ad Astras';

$string['apikey'] = 'Set Plussa API key';
$string['apikey_desc'] = 'The API key is required to fetch course data.';

$string['url'] = 'Set Plussa API base url';
$string['url_desc'] = 'The base URL for Plussa API. The URL must end with a forward slash, e.g. https://plus.tuni.fi/api/v2/';


// Strings for mod_form.php.
$string['deadline'] = 'Deadline';
$string['roundname'] = 'Exercise round name';
$string['roundname_help'] = 'This is the name of the exercise round that is shown in Moodle. Note: the number at the start of the name is updated automatically based on the round order and course module numbering setting.';
$string['note'] = 'Note';
$string['donotusemodform'] = 'You should use the Ad Astra exercises setup block to configure exercise rounds and exercises. However, you may use this page to configure common module settings and access restrictions.';
$string['status'] = 'Status';
$string['statusready'] = 'Ready';
$string['statushidden'] = 'Hidden';
$string['statusmaintenance'] = 'Maintenance';
$string['remotekey'] = 'Exercise service remote key';
$string['remotekey_help'] = 'Unique key in the exercise service.';
$string['pointstopass'] = 'Points to pass';
$string['pointstopass_help'] = 'The points the student must earn in order to pass.';
$string['openingtime'] = 'Opening time';
$string['openingtime_help'] = 'Submissions are not allowed before the opening time.';
$string['closingtime'] = 'Closing time';
$string['closingtime_help'] = 'Submissions after the closing time are late and either are prohibited completely or receive penalties to points.';
$string['latesbmsallowed'] = 'Late submissions allowed';
$string['latesbmsallowed_help'] = 'Late submissions can be allowed until the late submission deadline and they receive point penalties.';
$string['latesbmsdl'] = 'Late submission deadline';
$string['latesbmsdl_help'] = 'Submissions after the closing time and before the late submission deadline receive penalties in points.';
$string['latesbmspenalty'] = 'Late submission penalty';
$string['latesbmspenalty_help'] = 'Multiplier of points to reduce, as decimal. 0.1 = 10%';
$string['ordernum'] = 'Order';
$string['ordernum_help'] = 'Set the order in which objects are listed in the course page. Smaller ordinal number comes first.';

// Templates.
$string['exercise'] = 'Exercise';
$string['passed'] = 'Passed';
$string['nosubmissions'] = 'No submissions';
$string['requiredpoints'] = '{$a} points required to pass';
$string['requirednotpassed'] = 'Required exercises are not passed';
$string['opens'] = 'Opens';
$string['latealloweduntil'] = 'Late submission are allowed until {$a}';
$string['latepointsworth'] = 'but points are only worth {$a}%.';
$string['pointsrequiredtopass'] = '{$a} points required to pass the module.';
$string['undermaintenance'] = 'Unfortunately this module is currently under maintenance.';
$string['points'] = 'Points';
$string['required'] = 'Required';
$string['coursestaff'] = 'Course staff';
$string['earlyaccess'] = 'Early access';
$string['viewsubmissions'] = 'View submissions';
$string['notopenedyet'] = 'This module has not been opened yet.';
$string['exercisedescription'] = 'Exercise description';
$string['mysubmissions'] = 'My submissions';
$string['submissions'] = 'Submissions';
$string['nosubmissionsyet'] = 'No submissions yet';
$string['inspectsubmission'] = 'Inspect submission';
$string['viewallsubmissions'] = 'View all submissions';
$string['editexercise'] = 'Edit exercise';
$string['editchapter'] = 'Edit chapter';
$string['earnedpoints'] = 'Earned points';
$string['late'] = 'Late';
$string['exerciseinfo'] = 'Exercise info';
$string['yoursubmissions'] = 'Your submissions';
$string['pointsrequired'] = 'Points required to pass';
$string['totalnumberofsubmitters'] = 'Total number of submitters';
$string['statuserror'] = 'Error';
$string['statuswaiting'] = 'Waiting';
$string['statusinitialized'] = 'Initialized';
$string['statusrejected'] = 'Rejected';
$string['statusunlisted'] = 'Unlisted';
$string['submissionnumber'] = 'Submission {$a}';
$string['filesinthissubmission'] = 'Files in this submission';
$string['download'] = 'Download';
$string['assistantfeedback'] = 'Assistant feedback';
$string['noassistantfeedback'] = 'No assistant feedback available for this submission.';
$string['nofeedback'] = 'No grader feedback available for this submission.';
$string['submissioninfo'] = 'Submission info';
$string['submittedon'] = 'Submitted on';
$string['grade'] = 'Grade';
$string['forstafforiginal'] = 'For staff: original';
$string['includeslatepenalty'] = 'Includes late penalty';
$string['submitters'] = 'Submitters';
$string['allsubmissions'] = 'All submissions';
$string['submitteddata'] = 'Submitted data';
$string['submissiontime'] = 'Submission time';
$string['gradingtime'] = 'Grading time';
$string['gradingtimecompleted'] = 'automatic grading completed';
$string['manualgrader'] = 'Manual grader';
$string['submittedfiles'] = 'Submitted files';
$string['nofiles'] = 'No files';
$string['sbmsanddldeviations'] = 'Submission limit and deadline deviations';
$string['userhasextrasbms'] = '{$a->submitter_name} has {$a->extra_submissions} extra submission(s) to this exercise.';
$string['userhasdlextension'] = '{$a->submitter_name} has an extended deadline until {$a->extended_dl} ({$a->extra_minutes} extra minutes{$a->without_late_penalty}).';
$string['submittedvalues'] = 'Submitted values';
$string['gradingdata'] = 'Grading data';
$string['assessmanually'] = 'Assess this submission manually';
$string['graderfeedback'] = 'Grader feedback';
$string['resubmittoservice'] = 'Re-submit to exercise service';
$string['resubmitwarning'] = 'Click this button to re-submit this submission to the assessment service. This is meant to be used only in situations where the assessment service has behaved incorrectly so that the grading data is incorrect or the status of the submission never became ready. Caution! Re-submitting overwrites the current grading data.';
$string['assesssubmission'] = 'Assess submission';
$string['assessment'] = 'Assessment';
$string['assesspoints'] = 'Points';
$string['assesspoints_help'] = 'Possible penalties are not applied - the points are set as given. This will override grader points!';
$string['assessastfeedback'] = 'Assistant feedback';
$string['assessastfeedback_help'] = 'HTML formatting is allowed. This will not override machine feedback.';
$string['assessfeedback'] = 'Grader feedback';
$string['assessfeedback_help'] = 'HTML formatting is allowed. This WILL override machine feedback.';
$string['feedbackto'] = 'Feedback to {$a}';
$string['youhavenewfeedback'] = 'You have new personal feedback to exercise <a href="{$a->exurl}">{$a->exname}</a>, <a href="{$a->sbmsurl}">submission {$a->sbmscounter}</a>.';
$string['youhavenewfeedbacknosbmsurl'] = 'You have new personal feedback to exercise <a href="{$a->exurl}">{$a->exname}</a>, submission {$a->sbmscounter}.';
$string['numbersubmissions'] = '{$a} submissions';
$string['inspect'] = 'Inspect';
$string['gradingsubmission'] = 'Grading submission...';
$string['postingsubmission'] = 'Posting submission...';
$string['loadingexercise'] = 'Loading exercise...';
$string['exerciseresults'] = 'Exercise results';
$string['toc'] = 'Table of contents';
$string['youhaveextrasubmissions'] = 'You have {$a} extra submissions';
$string['withyourextension'] = 'with your personal extension';
$string['close'] = 'Close';
$string['date'] = 'Date';
$string['files'] = 'Files';
$string['loading'] = 'Loading...';
$string['submissionreceived'] = 'Submission received.';
$string['gotofeedback'] = 'Go to feedback';
$string['acceptedforgrading'] = 'Your submission has been accepted for grading.';
$string['exercisecategory'] = 'Exercise category';
$string['statusnototal'] = 'No total points';
$string['participants'] = 'Participants';
$string['resultsof'] = 'Results of {$a}';
$string['numberofparticipants'] = 'Number of participants (any role)';
$string['numberofparticipantswithrole'] = 'Number of participants (with the role {$a})';
$string['numberofparticipantsfilter'] = 'Number of matched participants after filtering';
$string['idnumber'] = 'ID number';
$string['idnumber_help'] = 'ID number (student ID) of the user';
$string['firstname'] = 'First name';
$string['lastname'] = 'Last name';
$string['email'] = 'Email';
$string['sortasc'] = 'Ascending sort';
$string['sortdesc'] = 'Descending sort';
$string['searchresults'] = 'Search results';
$string['previous'] = 'Previous';
$string['next'] = 'Next';
$string['currentparen'] = '(current)';
$string['sortby'] = 'Sort by {$a}';
$string['selectuserrole'] = 'Select user role';
$string['resultsperpage'] = 'Results per page';
$string['searchforparticipants'] = 'Search for participants';
$string['showhidesearch'] = 'Show/hide search';
$string['submittedafter'] = 'Submitted after';
$string['submittedbefore'] = 'Submitted before';
$string['gradegreq'] = 'Grade greater than or equal to';
$string['gradeless'] = 'Grade less than or equal to';
$string['hasassistfeedback'] = 'Submissions that have received assistant feedback';
$string['searchforsubmissions'] = 'Search for submissions';
$string['yesassistfeedback'] = 'Has assistant feedback';
$string['noassistfeedback'] = 'No assistant feedback';
$string['anystatus'] = 'Any status';
$string['anystatusnoterror'] = 'Any status except error';
$string['numbersubmissionsmatched'] = '{$a} submissions matched the query';
$string['courseoverview'] = 'Course overview';
$string['intotal'] = 'In total';
$string['addextrasbms'] = 'Add extra submissions';
$string['graderoutput'] = 'grader output';
$string['extrasbmsaddedsuccess'] = 'The extra submissions were added successfully.';
$string['addextrasbmsnote'] = 'Grant the student {$a->userfullname} extra submissions in the exercise {$a->exercise} in addition to the normal submission limit ({$a->normallimit} submissions). If the student has already been granted extra submissions, the new extra submissions are added on top of them.';
$string['novalues'] = 'No values';
$string['gradererrors'] = 'Grader errors';

// Teachers edit pages.
$string['editcourse'] = 'Edit course';
$string['categoryname'] = 'Category name';
$string['categoryname_help'] = 'Enter a descriptive, short name for the category. It is visible to users.';
$string['createcategory'] = 'Create new category';
$string['cateditsuccess'] = 'The category was updated successfully.';
$string['catcreatesuccess'] = 'The category was created successfully.';
$string['catcreatefailure'] = 'The new category could not be stored in the database.';
$string['automaticsetup'] = 'Automatic setup';
$string['autosetup'] = 'Update and create Ad Astra exercises automatically';
$string['autosetup_help'] = 'Import configuration from the exercise service URL and override course contents (Ad Astra exercise rounds, exercises and categories).';
$string['createmodule'] = 'Create exercise round';
$string['modeditsuccess'] = 'The exercise round was updated successfully.';
$string['modcreatesuccess'] = 'The exercise round was created successfully.';
$string['modcreatefailure'] = 'The new exercise round could not be stored in the database.';
$string['modeditfailure'] = 'Updating the exercise round failed.';
$string['createexercise'] = 'Create new exercise';
$string['createchapter'] = 'Create new chapter';
$string['lobjecteditsuccess'] = 'The learning object was updated successfully.';
$string['lobjcreatesuccess'] = 'The learning object was created successfully.';
$string['lobjcreatefailure'] = 'The new learning object could not be stored in the database.';
$string['exercisename'] = 'Exercise name';
$string['exercisename_help'] = 'Name of the exercise that is shown to users.';
$string['category'] = 'Category';
$string['exerciseround'] = 'Exercise round';
$string['parentexercise'] = 'Parent exercise';
$string['parentexercise_help'] = 'If set, this exercise is listed under the parent. The parent must be in the same exercise round.';
$string['serviceurl'] = 'Service URL';
$string['serviceurl_help'] = 'Absolute URL of this exercise in the exercise service.';
$string['maxpoints'] = 'Max points';
$string['maxpoints_help'] = 'Max points that a student may earn in this exercise.';
$string['maxsubmissions'] = 'Max submissions';
$string['maxsubmissions_help'] = 'Maximum number of submissions a student is allowed to submit in the exercise. Set to zero for no limit. Negative values also set no limit, but the exercise only stores the N latest submissions for each student. For example, the value -2 implies that the two latest submissions are stored, however, the student may submit more times.';
$string['deleteexercise'] = 'Delete exercise';
$string['confirmobjectremoval'] = 'Confirm {$a} removal';
$string['cancel'] = 'Cancel';
$string['learningobjectlow'] = 'learning object';
$string['learningobjectremoval'] = 'You are removing {$a->type} {$a->name}. Are you sure?';
$string['lobjectremovalnote'] = '<p>If you remove this learning object, <b>its all child learning objects and all submissions made to them and this learning object will also be removed</b>.</p>';
$string['categoryremovalnote'] = '<p>If you remove this category, <b>all learning objects in the category including their submissions will also be removed</b>.</p>';
$string['roundremovalnote'] = '<p>If you remove this exercise round, <b>all learning objects in the round including their submissions will also be removed</b>.</p>';
$string['numsubmitters'] = '{$a} submitters';
$string['notsubmittable'] = 'not submittable';
$string['lobjectstoremove'] = 'The learning objects to be removed are listed below:';
$string['deleteobject'] = 'Delete object';
$string['categorylow'] = 'category';
$string['roundlow'] = 'exercise round';
$string['deviations'] = 'Deviations';
$string['addnewdldeviations'] = 'Add new deadline deviations';
$string['dldeviations'] = 'Deadline deviations';
$string['submitter'] = 'Submitter';
$string['extraminutes'] = 'Extra minutes';
$string['extraminutes_help'] = 'Amount of extra time given in minutes.';
$string['withoutlatepenalty'] = 'Without late penalty';
$string['withoutlatepenalty_help'] = 'If checked, late penalty is not applied during the extra time (between the original deadline and the extended deadline).';
$string['withoutlatepenaltysuffix'] = ' without late penalty';
$string['actions'] = 'Actions';
$string['nodldeviations'] = 'No deadline deviations.';
$string['addnewsbmslimitdeviations'] = 'Add new submission limit deviations';
$string['submitlimitdeviations'] = 'Submission limit deviations';
$string['extrasubmissions'] = 'Extra submissions';
$string['extrasubmissions_help'] = 'Number of extra submissions allowed. These are added to the original number of submissions allowed.';
$string['nosbmslimitdeviations'] = 'No submission limit deviations.';
$string['search'] = 'Search';
$string['nomatches'] = 'No matches';
$string['searchfor'] = 'Search for...';
$string['deviationsexisted'] = 'Deviations already existed for the following users and exercises. They were not modified.';
$string['deviationscreationerror'] = 'Deviations could not be created for the following users and exercises (database error).';
$string['deviationscreatesuccess'] = 'All deviations created successfully.';
$string['back'] = 'Back';
$string['adddeviationsubmitternote'] = 'You can enter students either in the text input or in the multiselect box (hold ctrl down and left-click). If you use the text input, enter student ids or usernames separated by commas.';
$string['generatetoc'] = 'Generate table of contents';
$string['generatetoc_help'] = 'If checked, a table of contents of the exercise round is automatically added to the start of the chapter page.';
$string['usewidecolumn'] = 'Use wide column';
$string['usewidecolumn_help'] = 'Remove the info box column on the learning object page in order to provide more space to the content. This is sensible for content chapters, whereas it would hide information on normal exercise pages.';
$string['sbmsfilemaxsize'] = 'Submission max file size (B)';
$string['sbmsfilemaxsize_help'] = 'Maximum allowed file size of a submission file in bytes. For example, 1048576 means 1 MB. Use zero for no limit.';
$string['allowastgrading'] = 'Allow assistant grading';
$string['allowastgrading_help'] = 'If checked, assistants (non-editing teachers) may write feedback and change points for any submission in the exercise.';
$string['allowastviewing'] = 'Allow assistant viewing';
$string['allowastviewing_help'] = 'If checked, assistants (non-editing teachers) may inspect any submission in the exercise.';
$string['exportdata'] = 'Export course data';
$string['exportresults'] = 'Export results';
$string['exportinclallexercises'] = 'Include all exercises';
$string['exportinclallexercises_help'] = 'Tick to include all exercises, or select only some exercises below.';
$string['exportselectexercises'] = 'OR include these exercises';
$string['exportselectcats'] = 'OR include all exercises from these categories';
$string['exportselectrounds'] = 'OR include all exercises from these exercise rounds';
$string['exportselectstudents'] = 'Include only these students';
$string['exportselectstudents_help'] = 'Include only these students or leave empty to include all students in the course.';
$string['exportsubmittedbefore'] = 'Take into account only submissions that were submitted before';
$string['exportsubmittedbefore_help'] = 'Only take into account submissions that were submitted at or before the given date. Disable the date to include all submissions.';
$string['exportmustdefineexercises'] = 'You must define which exercises are included. Select all by ticking the checkbox, untick if you select only some.';
$string['exportuseonemethodtoselectexercises'] = 'You can only use one of the four methods to select exercises that are included.';
$string['exportdescription'] = 'Export exercise points of the course students to a JSON file.';
$string['exportpassedlist'] = '<a href="{$a}">Download</a> a list of students who have passed the course exercise requirements (gained at least minimum required points in all exercises, rounds and categories).';
$string['exportsubmittedfiles'] = 'Export submitted files';
$string['exportsubmittedfilesdesc'] = 'Export submitted files to a zip archive.';
$string['exportsubmittedform'] = 'Export submitted form input';
$string['exportsubmittedformdesc'] = 'Export submitted form input to a JSON file. Uploaded files are not included.';
$string['massregrading'] = 'Mass regrading';
$string['massregradingdesc'] = 'Mass upload existing submissions to the exercise service for regrading.';
$string['regradesubmissions'] = 'Regrade submissions';
$string['massregrinclsbms'] = 'Include submissions';
$string['massregrinclsbms_help'] = 'Select which submissions are included. This obeys the submitted before date.';
$string['massregrsbmserror'] = 'Only submissions with status error';
$string['massregrsbmsall'] = 'All submissions';
$string['massregrsbmslatest'] = 'Only the latest submission of each student';
$string['massregrsbmsbest'] = 'Only the currently best submission (highest points) of each student';
$string['massregrtasksuccess'] = 'The submissions are uploaded to the exercise service for regrading as soon as possible.';
$string['massregrtaskerror'] = 'Error: the regrading task could not be stored in the database. No submissions are uploaded to the exercise service.';
$string['exportindexresultsdesc'] = 'Export exercise results (points) of the students or download a list of students that have passed required exercises.';
$string['exportindexsubmittedfilesdesc'] = 'Export files that students have submitted to exercises as their solutions.';
$string['exportindexsubmittedformsdesc'] = 'Export values students have submitted in exercise forms. This includes, for example, text written in text fields or the selected checkboxes. Uploaded files are not included.';
$string['exercisessubmitted'] = 'Exercises submitted';
$string['submissionsreceived'] = '{$a} submissions received';

// Edit course page.
$string['exercisecategories'] = 'Exercise categories';
$string['editcategory'] = 'Edit category';
$string['remove'] = 'Remove';
$string['addnewcategory'] = 'Add new category';
$string['exerciserounds'] = 'Exercise rounds';
$string['editmodule'] = 'Edit exercise round';
$string['openround'] = 'Open exercise round';
$string['openexercise'] = 'Open exercise';
$string['addnewexercise'] = 'Add new exercise';
$string['addnewchapter'] = 'Add new chapter';
$string['addnewmodule'] = 'Add new exercise round';
$string['save'] = 'Save';
$string['renumerateformodules'] = 'Renumerate learning objects for each module';
$string['renumerateignoremodules'] = 'Renumerate learning objects ignoring modules';
$string['modulenumbering'] = 'Module numbering';
$string['contentnumbering'] = 'Content numbering';
$string['nonumbering'] = 'No numbering';
$string['arabicnumbering'] = 'Arabic';
$string['romannumbering'] = 'Roman';
$string['hiddenarabicnum'] = 'Hidden arabic';
$string['backtocourseedit'] = 'Back to the course edit page.';
$string['clearcontentcache'] = 'Clear content cache';
$string['cachescleared'] = 'Exercise caches have been cleared.';

// Auto setup form.
$string['configurl'] = 'Configuration URL';
$string['configurl_help'] = 'Configuration data for course exercises is downloaded from this URL.';
$string['apikey'] = 'API key';
$string['apikey_help'] = 'API key to authorize access to the exercise service.';
$string['sectionnum'] = 'Moodle course section number';
$string['sectionnum_help'] = 'Number (0-N) of the Moodle course section, to which new exercise round activities should be added. Section zero is the course home page, the next section is number 1 and so on (see the navigation in the course page).';
$string['apply'] = 'Apply';
$string['backtocourse'] = 'Back to the course';
$string['autosetupsuccess'] = 'Configuration was downloaded and applied successfully.';
$string['autosetuperror'] = 'There were errors in the automatic setup.';

// Auto setup errors.
$string['configjsonparseerror'] = 'The response from the server could not be parsed as JSON.';
$string['configcategoriesmissing'] = 'Categories are required as JSON object.';
$string['configmodulesmissing'] = 'Modules (exercise rounds) are required as JSON array.';
$string['configcatnamemissing'] = 'Category requires a name.';
$string['configbadstatus'] = 'Status has an invalid value: {$a}.';
$string['configbadint'] = 'Expected integer, but received: {$a}.';
$string['configmodkeymissing'] = 'Module (exercise round) requires a key.';
$string['configbadfloat'] = 'Expected floating-point number, but received: {$a}.';
$string['configbaddate'] = 'Unable to parse date: {$a}.';
$string['configbadduration'] = 'Unable to parse duration: {$a}.';
$string['configexercisekeymissing'] = 'Exercise requires a key.';
$string['configexercisecatmissing'] = 'Exercise requires a category.';
$string['configexerciseunknowncat'] = 'Exercise has an unknown category: {$a}.';
$string['configassistantnotfound'] = '(Assistants) Users with the following student ids were not found: {$a}';
$string['configuserrolesdisallowed'] = 'You are not allowed to modify user roles in the course: assistants were not automatically promoted to non-editing teachers.';
$string['configassistantsnotarray'] = 'Assistants must be given as student ID array.';
$string['confignomanualenrol'] = 'Manual enrolment is not supported in the course and thus assistants can not be enrolled to the course (they gain no access to the course, even if they are given non-editing teacher role in the course modules (exercise rounds)).';

// Plugin file area descriptions.
$string['submittedfilesareadescription'] = 'Submitted files in exercises with file uploads';

// Errors.
$string['error'] = 'Error';
$string['negativeerror'] = 'This value can not be negative.';
$string['closingbeforeopeningerror'] = 'The closing time must be later than the opening time.';
$string['latedlbeforeclosingerror'] = 'Late submission deadline must be later than the closing time.';
$string['zerooneerror'] = 'This value must be between zero and one.';
$string['mustbesetwithlate'] = 'This field must be set when late submissions are enabled.';
$string['serviceconnectionfailed'] = 'Connecting to the exercise service failed!';
$string['submissionfailed'] = 'Your new submission could not be stored in the server!';
$string['uploadtoservicefailed'] = 'Your submission was received but it could not be sent to the exercise service for grading!';
$string['youmaynotsubmit'] = 'You may not submit new solutions to this exercise any more!';
$string['servicemalfunction'] = 'The exercise assessment service is malfunctioning. This submission is now marked as erroneous.';
$string['duplicatecatname'] = 'Category with this name already exists.';
$string['duplicateroundremotekey'] = 'Exercise round with this remote key already exists.';
$string['parentexinwronground'] = 'Parent learning object must be in the same exercise round. Unset parent if you are changing the round of this learning object.';
$string['duplicateexerciseremotekey'] = 'Learning object with this remote key already exists in the same exercise round.';
$string['invalidobjecttype'] = 'Invalid object type: {$a}.';
$string['idsnotfound'] = 'The following identifiers could not be found in the database: {$a}';
$string['exercisecommerror'] = 'Communication error with the exercise.';
$string['gradingtakeslonger'] = 'Unfortunately grading takes longer than expected. Return later to see the result.';
$string['exerciselobjectexpected'] = 'Exercise expected, but the id matches a learning object of other type.';
$string['toolargesbmsfile'] = 'One of the uploaded files is too large and the submission was not saved! The file size limit is {$a} bytes.';
$string['assistgradingnotallowed'] = 'Assistants may not grade submissions in this exercise.';
$string['assistviewingnotallowed'] = 'Assistants may not view submissions in this exercise.';
$string['exportfilesziperror'] = 'Error in creating the zip archive';
$string['notenrollednosubmit'] = 'You are not enrolled in the course, hence you may not submit new solutions to exercises.';
$string['nosecretkeyset'] = 'The Moodle site administrator has not set the mandatory secret key for the Ad Astra plugin.';
$string['loadingfailed'] = 'Loading failed!';
$string['usernotenrolled'] = 'The user is not enrolled in the course.';
$string['lowermustbeless'] = 'The lower bound must be less than or equal to the upper bound.';

// Events / logging.
$string['eventsubmitted'] = 'Student submitted a new solution';
$string['eventserviceconnectionfailed'] = 'Connection to exercise service failed';
$string['eventexerciseservicefailed'] = 'Exercise service failed';
$string['eventexerciseviewed'] = 'Student viewed an Ad Astra exercise';
$string['eventasyncgradingfailed'] = 'Asynchronous grading failed';

// Capabilities.
$string['adastra:addinstance'] = 'Add a new Ad Astra exercise (round), and edit/delete them';
$string['adastra:view'] = 'View Ad Astra exercise (round)';
$string['adastra:submit'] = 'Submit a new solution to an Ad Astra exercise';
$string['adastra:viewallsubmissions'] = 'View and inspect all submissions to Ad Astra exercises';
$string['adastra:grademanually'] = 'Edit the feedback and grade of an Ad Astra submission manually';

// Cache API.
$string['cachedef_exercisedesc'] = 'Cache for exercise descriptions retrieved from an exercise service';

// Admin settings (settings.php).
$string['cacertheading'] = 'CA (certificate authority) certificates for secure HTTPS connections to exercise services';
$string['explaincacert'] = 'If HTTPS connections are used (i.e., the service URL starts with https:// in any exercise or learning object), the PHP libcurl networking library must know where the CA certificates are located in the Moodle server. They are used to verify the peer certificate (the certificate of the exercise service). Depending on the server, libcurl default values may work and these settings may be left empty.';
$string['cainfopath'] = 'File path of the CA certificate bundle';
$string['cainfopath_help'] = 'Absolute path to a file that holds one or more CA certificates. If this is set, the next setting (curl_capath) is ignored. In Ubuntu Linux, the file "/etc/ssl/certs/ca-certificates.crt" usually contains the CA bundle. Different operating systems use different default locations!';
$string['cadirpath'] = 'Directory that holds CA certificates';
$string['cadirpath_help'] = 'Absolute path to a directory that holds multiple CA certificates. The certificate file names must be hashed (c_rehash script in OpenSSL). In Ubuntu Linux, the directory "/etc/ssl/certs" is the system default location that already has hashed the file names. Some operating systems may prefer using a CA bundle file as a default over a CA directory (see the previous setting, curl_cainfo).';
$string['asyncsecretkey'] = 'Secret key';
$string['asyncsecretkey_help'] = 'Secret key is used to ensure that only the real exercise service may post grading results back to Ad Astra, that is, the key is used to compute hash values that others can not replicate. The key should be 50-100 characters long and consist of ASCII characters (a-z, A-Z, 0-9, special characters !"#@.- etc.). The key must not leak to users or outsiders and it shall not be stored in the exercise service either.';

// Privacy API.
$string['privacy:metadata:core_files'] = 'Ad Astra stores files that users have uploaded to exercise submissions.';
$string['privacy:metadata:core_message'] = 'Messages are sent to users about new assistant feedback on their submissions.';
$string['privacy:metadata:adastra_submissions'] = 'Submissions to exercises contain the data submitted by the user, their grade and feedback, and the submission time.';
$string['privacy:metadata:adastra_submissions:submitter'] = 'The user ID of the submitter.';
$string['privacy:metadata:adastra_submissions:submissiontime'] = 'The time when the submission was uploaded.';
$string['privacy:metadata:adastra_submissions:exerciseid'] = 'The ID of the exercise that the submission is for.';
$string['privacy:metadata:adastra_submissions:feedback'] = 'Feedback for the submission.';
$string['privacy:metadata:adastra_submissions:assistfeedback'] = 'Feedback for the submission written by a teacher.';
$string['privacy:metadata:adastra_submissions:grade'] = 'The grade (or points) of the submission.';
$string['privacy:metadata:adastra_submissions:gradingtime'] = 'The time when the submission was graded.';
$string['privacy:metadata:adastra_submissions:latepenaltyapplied'] = 'Late submission penalty applied to the submission.';
$string['privacy:metadata:adastra_submissions:servicepoints'] = 'The original points granted to the submission in the grading scale used by the exercise service.';
$string['privacy:metadata:adastra_submissions:submissiondata'] = 'The user submitted data of the submission, such as text entered to a form.';
$string['privacy:metadata:adastra_submissions:gradingdata'] = 'Grading data for the submission generated by the grader.';
$string['privacy:metadata:adastra_dl_deviations'] = 'Personal exercise deadline extensions given to users.';
$string['privacy:metadata:adastra_dl_deviations:submitter'] = 'The user ID whom the extension is for.';
$string['privacy:metadata:adastra_dl_deviations:exerciseid'] = 'The ID of the exercise affected by the extension.';
$string['privacy:metadata:adastra_dl_deviations:extraminutes'] = 'The duration of the deadline extension.';
$string['privacy:metadata:adastra_maxsbms_devs'] = 'Personal exercise submission limit extensions given to users.';
$string['privacy:metadata:adastra_maxsbms_devs:submitter'] = 'The user ID whom the extension is for.';
$string['privacy:metadata:adastra_maxsbms_devs:exerciseid'] = 'The ID of the exercise affected by the extension.';
$string['privacy:metadata:adastra_maxsbms_devs:extrasubmissions'] = 'The number of extra submissions granted.';
$string['privacy:metadata:exerciseservice'] = 'Submissions are sent to an exercise service for grading. Exercise services store submission data only temporarily until they have finished the assessment.';
$string['privacy:metadata:exerciseservice:submissiondata'] = 'The submission to be graded.';

// The gradeitem mapping hack in adastra/classes/grades/gradeitems.php requires these.
$string['grade_exerciseround_name'] = 'Exercise round';
$string['grade_exercise1_name'] = 'Exercise 1';
$string['grade_exercise2_name'] = 'Exercise 2';
$string['grade_exercise3_name'] = 'Exercise 3';
$string['grade_exercise4_name'] = 'Exercise 4';
$string['grade_exercise5_name'] = 'Exercise 5';
$string['grade_exercise6_name'] = 'Exercise 6';
$string['grade_exercise7_name'] = 'Exercise 7';
$string['grade_exercise8_name'] = 'Exercise 8';
$string['grade_exercise9_name'] = 'Exercise 9';
$string['grade_exercise10_name'] = 'Exercise 10';
$string['grade_exercise11_name'] = 'Exercise 11';
$string['grade_exercise12_name'] = 'Exercise 12';
$string['grade_exercise13_name'] = 'Exercise 13';
$string['grade_exercise14_name'] = 'Exercise 14';
$string['grade_exercise15_name'] = 'Exercise 15';
$string['grade_exercise16_name'] = 'Exercise 16';
$string['grade_exercise17_name'] = 'Exercise 17';
$string['grade_exercise18_name'] = 'Exercise 18';
$string['grade_exercise19_name'] = 'Exercise 19';
$string['grade_exercise20_name'] = 'Exercise 20';
$string['grade_exercise21_name'] = 'Exercise 21';
$string['grade_exercise22_name'] = 'Exercise 22';
$string['grade_exercise23_name'] = 'Exercise 23';
$string['grade_exercise24_name'] = 'Exercise 24';
$string['grade_exercise25_name'] = 'Exercise 25';
$string['grade_exercise26_name'] = 'Exercise 26';
$string['grade_exercise27_name'] = 'Exercise 27';
$string['grade_exercise28_name'] = 'Exercise 28';
$string['grade_exercise29_name'] = 'Exercise 29';
$string['grade_exercise30_name'] = 'Exercise 30';

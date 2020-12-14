/**
 * Grunt configuration. Grunt is particularly used to minify JavaScript AMD modules.
 *
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

module.exports = function(grunt) {
    // Project configuration.
    grunt.initConfig({
        jshint: {
            options: {jshintrc: '.jshintrc'},
            all: [
                'adastra/amd/src/*.js',
                '!adastra/amd/src/highlight.js',
            ],
        },
        uglify: {
            dynamic_mappings: {
                files: [
                    {
                        src: ['*.js'], // Actual pattern(s) to match.
                        dest: 'adastra/amd/build/', // Destination path prefix.
                        expand: true, // Enable dynamic expansion.
                        cwd: 'adastra/amd/src/', // Src matches are relative to this path.
                        ext: '.min.js', // Dest filepaths will have this extension.
                        extDot: 'last', // Extensions in filenames begin after the last dot.
                    },
                ],
            },
            static_mappings: {
                // if there is a need to avoid processing all files at once, list some files here
                files: {
                    'adastra/amd/build/aplus_searchselect.min.js': ['adastra/amd/src/aplus_searchselect.js'],
                    'adastra/amd/build/aplus_chapter.min.js': ['adastra/amd/src/aplus_chapter.js'],
                }
            },
        },
    });

    // Register NPM tasks.
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-jshint');

    // Register JS tasks.
    grunt.registerTask('amd', ['uglify:dynamic_mappings']);

    // Register the default task.
    grunt.registerTask('default', ['amd']);
};
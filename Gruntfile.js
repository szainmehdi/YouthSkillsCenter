module.exports = function (grunt) {

    //Initializing the configuration object
    grunt.initConfig({
        concat: {
            options: {
                separator: ';'
            },
            main: {
                src: [
                    './bower_components/jquery/dist/jquery.js',
                    './bower_components/bootstrap/dist/js/bootstrap.js',
                    './bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.js',
                    './bower_components/jquery.easing/js/jquery.easing.js',
                    './bower_components/bootbox/bootbox.js',
                    './resources/assets/js/main.js'
                ],
                dest: './public/assets/js/main.js'
            }
        },
        exec: {
            composer: "composer dump-autoload"
        },
        uglify: {
            options: {
                mangle: false,  // Use if you want the names of your functions and variables unchanged,
                compress: false,
                beautify: true
            },
            main: {
                files: {
                    './public/assets/js/main.min.js': './public/assets/js/main.js'
                }
            },
            etc: {
                files: [
                    {
                        expand: true,
                        cwd: 'resources/assets/js/etc/',
                        src: '**/*.js',
                        dest: 'public/assets/js/etc'
                    }
                ]
            },
            vendor: {
                files: [
                    {
                        expand: true,
                        cwd: 'resources/assets/js/vendor/',
                        src: '**/*.js',
                        dest: 'public/assets/js/vendor'
                    }
                ]
            }
        },
        less: {
            development: {
                options: {
                    compress: true
                },
                files: {
                    //compiling www.less into www.css
                    "./public/assets/css/main.css": "./resources/assets/css/main.less",
                }
            }
        },
        watch: {
            js_etc: {
                files: ['./resources/assets/js/etc/*.js'],
                tasks: ['uglify:etc'],
                options: {livereload: true}
            },
            js_vendor: {
                files: ['./resources/assets/js/vendor/*.js'],
                tasks: ['uglify:vendor'],
                options: {livereload: true}
            },
            composer: {
                files: ['./composer.json'],
                tasks: ['exec:composer']
            },
            main: {
                files: [
                    //watched files
                    './bower_components/jquery/dist/jquery.js',
                    './bower_components/bootstrap/dist/js/bootstrap.js',
                    './bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.js',
                    './bower_components/jquery.easing/js/jquery.easing.js',
                    './resources/assets/js/main.js'
                ],
                tasks: [
                    'concat:main',
                    'uglify:main'
                ],     //tasks to run
                options: {
                    livereload: true                        //reloads the browser
                }
            },
            less: {
                files: [
                    './resources/assets/css/**/*.less',
                    './bower_components/**/*.less'
                ],  //watched files
                tasks: ['less'],                          //tasks to run
                options: {
                    livereload: true                        //reloads the browser
                }
            }
        }
    });

    // // Plugin loading
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-phpunit');
    grunt.loadNpmTasks('grunt-exec');

    // Task definition
    grunt.registerTask('default', ['watch']);

    grunt.registerTask('build', 'Run all necessary deployment tasks.', function() {
        grunt.task.run(['less', 'concat', 'uglify']);
    });

};
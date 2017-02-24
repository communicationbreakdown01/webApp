var pkgjson = require('./package.json');

var config = {
    pkg: pkgjson,
    app: 'src',
    dist: '../'
}

module.exports = function (grunt) {

    // Configuration
    grunt.initConfig({
        config: config,
        pkg: config.pkg,
        bower: grunt.file.readJSON('./.bowerrc'),
        copy: {
            dist: {
                files: [{
                    expand: true,
                    cwd: '<%= config.app %>/_lib/font-awesome',
                    src: 'css/font-awesome.min.css',
                    dest: '<%= config.dist %>'
                },
                    {
                        expand: true,
                        cwd: '<%= config.app %>/_lib/bootstrap/dist',
                        src: 'css/bootstrap.min.css',
                        dest: '<%= config.dist %>'
                    },

                    {
                        expand: true,
                        cwd: '<%= config.app %>/_lib/jquery/dist',
                        src: 'jquery.min.js',
                        dest: '<%= config.dist %>/js'
                    },
                    {
                        expand: true,
                        cwd: '<%= config.app %>/_lib/jquery-ui',
                        src: 'jquery-ui.min.js',
                        dest: '<%= config.dist %>/js'
                    },

                    {
                        expand: true,
                        cwd: '<%= config.app %>/_lib/jquery/dist',
                        src: 'jquery.js',
                        dest: '<%= config.dist %>/js'
                    },

                    {
                        expand: true,
                        cwd: '<%= config.app %>/_lib/bootstrap/dist',
                        src: 'fonts/*',
                        dest: '<%= config.dist %>'
                    },

                    {
                        expand: true,
                        cwd: '<%= config.app %>/_lib/font-awesome',
                        src: 'fonts/*',
                        dest: '<%= config.dist %>'
                    }]
            }
        },

        cssmin: {
            minify: {
                files: [{
                    expand: true,
                    cwd: '<%= config.app %>/devcss',
                    src: ['*.css', '!*.min.css'],
                    dest: '<%= config.dist %>/css',
                    ext: '.css'
                }, {
                    expand: true,
                    cwd: '<%= config.app %>/devcss',
                    src: ['*.min.css'],
                    dest: '<%= config.dist %/css>',
                    ext: '.min.css'
                }]
            }
        },

        uglify: {
            options: {
                banner: '/*! <%= pkg.name %> lib - v<%= pkg.version %> -' +
                '<%= grunt.template.today("yyyy-mm-dd") %> */'
            },
            dist: {
                files: {
                    '<%= config.dist %>/js/lib.min.js': [
                        '<%= bower.directory %>/jquery/dist/jquery.min.js',
                    ]
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');

    grunt.registerTask('default', [
        'copy',
        'uglify',
        'cssmin'
    ]);
};
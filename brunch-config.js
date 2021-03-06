exports.config = {

    optimize: true,
    sourceMaps: false,
    notifications:['error', 'warn', 'info'],

    "paths": {
        "watched": ["app", "vendor"],
        "public": "kirby-2",
        compass: "./compass.rb"
    },

    files: {
        stylesheets: {
            "joinTo": 'assets/css/styles.min.css',
        },
        javascripts: {
            "joinTo": {
                'assets/js/libraries.js': /^vendor/,
                'assets/js/app.min.js': /^app/
            }
        }
    },

    "conventions": {
        "assets": /static[\\/]/
    },
    "sprites":{
        "path": 'app/images/sprites',
        "destCSS": '_sprites.scss',
        "cssFormat": 'sass',
        "algorithm": 'top-down',
        "engine": 'canvas',
        "imgOpts":{
            "format": 'auto',
            "quality": 10,
        }
    },
    "plugins": {
        "imageoptmizer": {
            smushit: false,
            path: 'assets/images/'
        },
        "autoReload": {
            "enabled": false
        },
        "cleancss":{
          keepSpecialComments: 0,
          removeEmpty: true
        },
        "retina":{
            regexp: /(@2[xX])\.(?:gif|jpeg|jpg|png)$/,
            path: 'images',
            assetsPath: 'kirby-2/assets',
            minWidth: 0,
            minHeight: 0
        },
        uglify: {
            mangle: {
                toplevel: true,
                eval: true,
                functions: true
            },
            compress: true
        }
    },
    "modules": {
        "wrapper": false,
        "definition": false
    },


    "overrides": {
        "DEV": {
            server:{
                run: 'yes',
                command: 'php -S localhost:8000 -t kirby-2',
            },

            "optimize": false,
            "sourceMaps": true,

            "plugins": {
                "autoReload": {
                    "enabled": true
                }
            }
        }
    }
}
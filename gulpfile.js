// Initialising modules
const {src, dest, watch, series, parallel} = require('gulp');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const concat = require('gulp-concat');
const postcss = require('gulp-postcss');
const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');
const uglify = require('gulp-uglify-es').default;


// File the path variables
const files = {
    // Gets all the scss files within the app folder and sub-folders
    scssPath: 'assets/scss/**/*.scss',
    jsPath: 'assets/js/**/*.js' 
}

// Sass task
function scssTask() {
    return src(files.scssPath)
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(postcss( [ autoprefixer(), cssnano() ] ))
        .pipe(sourcemaps.write('.'))
        .pipe(dest('dest'));
}

// JS task
function jsTask() {
    return src(files.jsPath)
        .pipe(concat('all.js'))
        .pipe(uglify())
        .pipe(dest('dest'));
}

// Watch task
function watchTask() {
    // Watching all the sass and js files from the files object
    watch([files.scssPath, files.jsPath],
        parallel(scssTask, jsTask));
}

// Default task
exports.default = series(
    parallel(scssTask, jsTask),
    watchTask
);
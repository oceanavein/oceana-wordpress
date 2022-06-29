/*
npm install gulp gulp-sass gulp-autoprefixer gulp-sourcemaps jshint gulp-jshint gulp-concat gulp-uglify gulp-imagemin gulp-newer gulp-changed gulp-rename browser-sync --save-dev
*/

'use strict';

var gulp = require('gulp'),
    sass = require('gulp-sass')(require('node-sass')),
    autoprefixer = require('gulp-autoprefixer'),
    sourcemaps = require('gulp-sourcemaps'),
    jshint = require('gulp-jshint'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    newer = require('gulp-newer'),
    changed = require('gulp-changed'),
    rename = require('gulp-rename'),
    browserSync = require('browser-sync').create();

sass.compiler = require('node-sass');

var paths = {
  styles: {
    src:  'src/sass/**/*.scss',
    dest: './'
  },

  scripts: {
    src:  'src/js/*.js',
    dest: 'dist/js/'
  },

  images: {
    src:  'src/images/**',
    dest: 'dist/images/'
  },

  files: './**/*.php'
};


function style() {
  return gulp.src(paths.styles.src)
    .pipe(sourcemaps.init())
      .pipe(sass().on('error', sass.logError))
      .pipe(autoprefixer({
        cascade: false
      }))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(paths.styles.dest))
    .pipe(browserSync.stream());
}


function scripts() {
  return gulp.src(paths.scripts.src)
    .pipe(jshint())
    .pipe(jshint.reporter('default'))
    .pipe(concat('main.js'))
    .pipe(gulp.dest(paths.scripts.dest));
}


function images() {
  gulp.src(paths.images.src)
    .pipe(newer(paths.images.dest))
    .pipe(changed(paths.images.dest))
    .pipe(imagemin())
    .pipe(gulp.dest(paths.images.dest));
}


function watch() {
  browserSync.init({
    proxy: 'oceana.local',
    port: 8000
  });

  gulp.watch(paths.styles.src, style);
  gulp.watch(paths.scripts.src, scripts).on('change', browserSync.reload);
  gulp.watch(paths.images.src, images).on('change', browserSync.reload);
  gulp.watch(paths.files).on('change', browserSync.reload);
}


exports.style = style;
exports.scripts = scripts;
exports.images = images;
exports.watch = watch;

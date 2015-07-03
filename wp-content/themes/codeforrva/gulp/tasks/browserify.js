var browserify = require('gulp-browserify');
var gulp         = require('gulp');
var handleErrors = require('../util/handleErrors');

gulp.task('browserify', ['browserify-detection', 'browserify-jquery', 'browserify-app']);

gulp.task('browserify-detection', function(){

	return gulp.src(['app/js/detection.js'])
        .pipe(browserify())
        .on('error', handleErrors)
        .pipe(gulp.dest('./dist/js'))
});

gulp.task('browserify-jquery', function(){

	return gulp.src(['app/js/jquery.js'])
        .pipe(browserify())
        .on('error', handleErrors)
        .pipe(gulp.dest('./dist/js'))
});

gulp.task('browserify-app', function(){

	return gulp.src(['app/js/app.js'])
        .pipe(browserify())
        .on('error', handleErrors)
        .pipe(gulp.dest('./dist/js'))
});
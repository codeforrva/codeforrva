var sass      = require('gulp-sass');
var gulp         = require('gulp');
var handleErrors = require('../util/handleErrors');
var postcss = require('gulp-postcss');
var autoprefixer = require('autoprefixer-core');

gulp.task('sass', function() {
	return gulp.src('./app/scss/*.scss')
		.pipe(sass({
			style: 'nested',
			lineNumbers: true
		}))
		.on('error', handleErrors)
		.pipe(gulp.dest('dist/css'));
});

gulp.task('sass-dev', function() {
	return gulp.src(['./app/scss/app.scss'])
		.pipe(sass({
			style: 'nested',
			lineNumbers: true
		}))
		.on('error', handleErrors)
		.pipe(gulp.dest('dist/css'));
});

gulp.task('autoprefixer', ['sass', 'sass-dev'], function () {
    var processors = [
      autoprefixer({
        browsers: ['last 2 version']
      })
    ];
    return gulp.src('./dist/css/*.css')
        .pipe(postcss(processors))
        .pipe(gulp.dest('./dist/css'));
});

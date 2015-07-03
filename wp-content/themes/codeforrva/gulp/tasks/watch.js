var gulp       = require('gulp');

gulp.task('watch', function() {
	var server = livereload();

	var reload = function(file) {
		server.changed(file.path);
	};

	gulp.watch('app/js/**/*.js', ['browserify-app']);
	gulp.watch('app/scss/**/*', ['sass-dev', 'autoprefixer']);
	gulp.watch('app/img/**/*', ['images']);
	gulp.watch('app/video/**/*', ['videos']);
});

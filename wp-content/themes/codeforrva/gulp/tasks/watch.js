var gulp       = require('gulp');

gulp.task('watch', function() {
	gulp.watch('app/js/**/*.js', ['browserify-app']);
	gulp.watch('app/scss/**/*', ['sass', 'autoprefixer']);
	gulp.watch('app/img/**/*', ['images']);
	gulp.watch('app/video/**/*', ['videos']);
});

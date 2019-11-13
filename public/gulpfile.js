/*const gulp = require('gulp');

gulp.task('test', function(){
	return true;
});

*/

var gulp = require('gulp'),
    uglify = require('gulp-uglify');

gulp.task('minify', function () {
    gulp.src('*.+(js|css)')
        .pipe(uglify())
        .pipe(gulp.dest('build'));
});

//gulp.task('default', ['watch']);
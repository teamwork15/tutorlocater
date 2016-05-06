// Include gulp
var gulp = require('gulp');

// Include Our Plugins
var sass = require('gulp-sass');

// Compile Our Sass
gulp.task('sass', function() {
    return gulp.src('sass/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('../../public/css'));
});

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('sass/*.scss', ['sass']);
});
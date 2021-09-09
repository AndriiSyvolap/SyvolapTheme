const gulp = require('gulp'),
sass = require('gulp-sass')(require('sass')),
cleanCSS = require('gulp-clean-css'),
concat = require('gulp-concat'),
minify = require('gulp-minify'),
watch = require('gulp-watch');

gulp.task('buildCss', () =>  {
  return gulp.src('src/sass/main.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(cleanCSS())
    .pipe(concat('style.min.css'))
    .pipe(gulp.dest('./dist'));
});

gulp.task('minifyJs', () => {
  return gulp.src('src/js/*.js')
    .pipe(minify({noSource: true, ignoreFiles: ['*-min.js', 'main.min.js']}))
    .pipe(concat('main.min.js'))
    .pipe(gulp.dest('./dist'));
});

gulp.task('default', gulp.series('buildCss', 'minifyJs'));
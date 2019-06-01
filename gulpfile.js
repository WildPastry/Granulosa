var gulp = require('gulp');
sass = require('gulp-sass');
concat = require('gulp-concat'),
postcss = require('gulp-postcss');
cssnext = require('postcss-preset-env');
notify = require('gulp-notify');
autoprefixer = require('autoprefixer');
livereload = require('gulp-livereload');
purge = require('gulp-css-purge');

// autoprefix
gulp.task('autoprefixer', function () {
  return gulp.src('assets/sass/**/*.scss')
      .pipe(postcss([ autoprefixer() ]))
      .pipe(gulp.dest('assets/prefix'));
});

// concat
gulp.task('styles', function () {
  var processors = [
  cssnext({})
  ];
 return gulp.src('assets/prefix/**/*.scss')
  .pipe(concat('main'))
  .pipe(sass())
  .pipe(postcss(processors))
  .pipe(purge())
  .pipe(notify("success"))
  .pipe(gulp.dest('assets/css/'))
  .pipe(livereload())
 });

// watch
 gulp.task('watch', function () {
  livereload.listen();
  gulp.watch('assets/sass/**/*.scss', {
		usePolling: true
  }, gulp.series('autoprefixer', 'styles'));
 });

 // load tasks
gulp.task('default',
gulp.series('autoprefixer', 'styles', 'watch')
);

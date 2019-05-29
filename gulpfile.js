var gulp = require('gulp');
sass = require('gulp-sass');
concat = require('gulp-concat'),
postcss = require('gulp-postcss');
cssnext = require('postcss-preset-env');
notify = require('gulp-notify');
autoprefixer = require('autoprefixer');
livereload = require('gulp-livereload');
purge = require('gulp-css-purge');

// AUTOPREFIX
gulp.task('autoprefixer', function () {
  return gulp.src('sass/**/*.scss')
      .pipe(postcss([ autoprefixer() ]))
      .pipe(gulp.dest('./sass'));
});

// CONCAT
gulp.task('styles', function () {
  var processors = [
  cssnext({})
  ];
 return gulp.src('sass/**/*.scss')
  .pipe(concat('main'))
  .pipe(sass())
  .pipe(postcss(processors))
  .pipe(purge())
  .pipe(notify("success"))
  .pipe(gulp.dest('css/'))
  .pipe(livereload())
 });

//  WATCH
 gulp.task('watch', function (event) {
  livereload.listen();
  gulp.watch('sass/**/*.scss', {
		usePolling: true
  }, gulp.series('autoprefixer', 'styles'));
 });

 //LOAD TASKS
gulp.task('default',
gulp.series('autoprefixer', 'styles', 'watch')
);

var gulp = require('gulp');
sass = require('gulp-sass');
concat = require('gulp-concat'),
postcss = require('gulp-postcss');
cssnext = require('postcss-preset-env');
notify = require('gulp-notify');
livereload = require('gulp-livereload');
purge = require('gulp-css-purge');

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

 gulp.task('watch', function (event) {
  livereload.listen();
  gulp.watch('sass/**/*.scss', {
		usePolling: true
	}, gulp.series('styles'));
 });

 //LOAD TASKS
gulp.task('default',
gulp.series('styles', 'watch')
);

// VARIATION ONE
// gulp.task('autoprefixer', function () {
//   var postscss      = require('postcss-scss');
//   var sourcemaps   = require('gulp-sourcemaps');
//   var autoprefixer = require('autoprefixer');

//   return gulp.src('sass/**/*.scss')
//       .pipe(sourcemaps.init())
//       .pipe(cssnext([ autoprefixer() ]))
//       .pipe(sourcemaps.write('.'))
//       .pipe(gulp.dest('./dest'));
// });

// VARIATION TWO
// var postcss = require('gulp-postcss');
// var gulp = require('gulp');
// var autoprefixer = require('autoprefixer');
// var cssnano = require('cssnano');

// gulp.task('css', function () {
//     var plugins = [
//         autoprefixer({browsers: ['last 1 version']}),
//         cssnano()
//     ];
//     return gulp.src('./src/*.css')
//         .pipe(postcss(plugins))
//         .pipe(gulp.dest('./dest'));
// });
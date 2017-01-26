var gulp = require('gulp'),
    gutil = require('gulp-util'),
    coffee = require('gulp-coffee'),
    browserify = require('gulp-browserify'),
    concat = require('gulp-concat'),
    sass = require('gulp-ruby-sass'),
    browserSync = require('browser-sync').create();

var coffeeSources = ['components/coffee/tagline.coffee']
var jsSources = [
  'components/scripts/tagline.js',
  'components/scripts/rclick.js',
  'components/scripts/pixgrid.js',
  'components/scripts/template.js'
];
var sassSources = ['components/sass/style.scss']

gulp.task('coffee', function () {
  gulp.src(coffeeSources)
      .pipe(coffee({bare: true})
        .on('error', gutil.log))
      .pipe(gulp.dest('components/scripts'))
});

gulp.task('js', function () {
  gulp.src(jsSources)
    .pipe(concat('script.js'))
    .pipe(browserify())
    .pipe(gulp.dest('builds/development/js'))
});

gulp.task('compass', function() {
   return sass(sassSources, {
     compass: true,
     lineNumbers: true
   }).on('error', gutil.log)
   .pipe(gulp.dest('builds/development/css'))
   .pipe(browserSync.stream());
});

gulp.task('default', ['coffee', 'js', 'compass', 'browser-sync', 'watch']);

gulp.task('watch', function () {
  gulp.watch(coffeeSources, ['coffee']);
  gulp.watch(jsSources, ['js']);
  gulp.watch('components/sass/*.scss', ['compass']);
  gulp.watch(['builds/development/*.php', 'builds/development/*.html'])
  .on('change', function(file) {
      gutil.log(gutil.colors.yellow('PHP or HTML file changed' + ' (' + file.path + ')'));
      browserSync.reload();
  });
});

gulp.task('browser-sync', function() {
    browserSync.init({
      proxy: "127.0.0.5:8080",
      port: 8010,
      open: true,
      notify: false
    });
});

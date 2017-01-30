var gulp = require('gulp'),
    gutil = require('gulp-util'),
    coffee = require('gulp-coffee'),
    browserify = require('gulp-browserify'),
    concat = require('gulp-concat'),
    sass = require('gulp-ruby-sass'),
    watch = require('gulp-watch'),
    browserSync = require('browser-sync').create();

var reload = browserSync.reload();

var destination = './builds/development/public';

var coffeeSources = ['components/coffee/tagline.coffee']
var jsSources = [
  'components/scripts/styleChange.js',
  // 'components/scripts/rclick.js',
  // 'components/scripts/pixgrid.js',
  // 'components/scripts/template.js'
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
    .pipe(gulp.dest(destination + '/js'))
});

gulp.task('compass', function() {
   return sass(sassSources, {
     compass: true,
     lineNumbers: true
   }).on('error', gutil.log)
   .pipe(gulp.dest(destination + '/css'))
   .pipe(browserSync.stream());
});


gulp.task('default', ['coffee', 'js', 'compass', 'browser-sync', 'copyPHP', 'copyImages', 'watch']);

gulp.task('copyPHP', () => gulp
  .src('./components/php/**/*', {base: './components/php'})
  .pipe(gulp.dest(destination)));

  gulp.task('copyImages', () => gulp
    .src('./components/images/**/*', {base: './components'})
    .pipe(gulp.dest(destination)));



gulp.task('watch', function () {
  gulp.watch(coffeeSources, ['coffee']);
  gulp.watch(jsSources, ['js']);
  gulp.watch('components/sass/*.scss', ['compass']);

  var source = './components/php',
    dest = destination;
  gulp.src(source + '/**/*', {base: source})
    .pipe(watch(source, {base: source}))
    .on('change', function(file) {
        msg='PHP or HTML file changed' + ' (' + file + ')';
        gutil.log(gutil.colors.yellow(msg));
        browserSync.reload();
    })
    .pipe(gulp.dest(dest));

    var source = './components/include',
        dest = destination + '/../include';
    gulp.src(source + '/**/*', {base: source})
      .pipe(watch(source, {base: source}))
      .on('change', function(file) {
          msg='PHP or HTML file changed' + ' (' + file + ')';
          gutil.log(gutil.colors.yellow(msg));
          browserSync.reload();
      })
      .pipe(gulp.dest(dest));

    var source = './components/images',
        dest = destination + '/images';
    gulp.src(source + '/**/*', {base: source})
      .pipe(watch(source + '/*', {base: source}))
      .on('change', function(file) {
          msg='Image changed' + ' (' + file + ')';
          gutil.log(gutil.colors.yellow(msg));
          browserSync.reload();
      })
      .pipe(gulp.dest(dest));


});

gulp.task('browser-sync', function() {
    browserSync.init({
      proxy: "127.0.0.5:8080",
      port: 8010,
      open: true,
      notify: false
    });
});

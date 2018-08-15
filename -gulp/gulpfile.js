const gulp      = require('gulp'),
sass            = require('gulp-sass'),
uglify          = require('gulp-uglify'),
imagemin        = require('gulp-imagemin'),
jshint          = require('gulp-jshint'),
jshintStylish   = require('jshint-stylish'),
browserSync     = require('browser-sync').create();

const src = {
  php   : ['../**/*.php'],
  img   : ['img/**/*.jpg','img/**/*.jpeg','img/**/*.png','img/**/*.gif','img/**/*.svg'],
  js    : ['js/**/*.js'],
  sass  : ['../scss/style.scss']
}

gulp.task('build-css', function() {
  gulp.src(src.sass)
  .pipe(sass.sync().on('error', sass.logError))
  .pipe(sass({outputStyle: 'compressed'}))
  .pipe(gulp.dest('../'))  
  .pipe(browserSync.stream());
});

gulp.task('build-img', function() {
  gulp.src(src.img)
  .pipe(imagemin())
  .pipe(gulp.dest('../img'))
  .pipe(browserSync.stream());
});

gulp.task('build-js', function() {
  gulp.src(src.js)
  .pipe(jshint())
  .pipe(jshint.reporter(jshintStylish))
  .pipe(uglify())
  .on('error', function(err) {
    gutil.log(gutil.colors.red('[Error]'), err.toString());
    this.emit('end');
  })
  .pipe(gulp.dest('../build/js'))
  .pipe(browserSync.stream());
});

gulp.task('browser-sync', function () {
  browserSync.init({
    proxy: "localhost/sitiosead",
    online: true,
    open: false
  });
  gulp.watch([src.sass, '../scss/**/*.scss'], ['build-css']);
  gulp.watch(src.js, ['build-js']);
  gulp.watch(src.img, ['build-img']);
  gulp.watch(src.php).on('change', browserSync.reload);
});

gulp.task('default', function() {
  gulp.start(['build-css', 'build-img', 'build-js', 'browser-sync']);
})

var gulp = require('gulp'),
    sass = require('gulp-sass'),
    browserSync = require('browser-sync');

gulp.task('scss', function() {
    return gulp.src('assets/scss/main.scss')
        .pipe(sass())
        .pipe(gulp.dest('web/css'))
        .pipe(browserSync.reload({
            stream: true
        }))
});

gulp.task('browser-sync', function() { // Создаем таск browser-sync
    browserSync.init({ // Выполняем browser Sync
        proxy: 'liza/',
        port: 8080,
        notify: false // Отключаем уведомления
    });
});

gulp.task('watch', ['browser-sync', 'scss'], function(){
    gulp.watch('assets/scss/**/*.scss', ['scss']);
    //gulp.watch('views/*.html', browserSync.reload);
    gulp.watch('web/js/**/*.js', browserSync.reload);
    gulp.watch('views/**/*.php', browserSync.reload);
})

gulp.task('prefixes', function () {
    var postcss      = require('gulp-postcss');
    var sourcemaps   = require('gulp-sourcemaps');
    var autoprefixer = require('autoprefixer');

    return gulp.src('web/css/main.css')
        .pipe(sourcemaps.init())
        .pipe(postcss([ autoprefixer() ]))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('web/css'));
});


gulp.task('minify-css', function(){

    var cleanCSS = require('gulp-clean-css');
    var rename = require('gulp-rename');

    return gulp.src('web/css/main.css')
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('web/css'));
});

gulp.task('default', ['watch']);

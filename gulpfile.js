const gulp = require('gulp');
const babel = require('gulp-babel');
const uglify = require('gulp-uglify');

// Javascript
function scripts() {
    return gulp.src('resources/js/app.js')
        .pipe(babel({
            presets: ['@babel/env']
        }))
        .pipe(uglify())
        .pipe(gulp.dest('public/js'))
}

exports.scripts = scripts;

// Watch
gulp.task('watch', function() {
    return gulp.watch('resources/js/' + 'app.js', scripts);
});
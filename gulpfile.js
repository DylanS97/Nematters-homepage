const gulp = require('gulp');
const babel = require('gulp-babel');
const uglify = require('gulp-uglify');

// Javascript
function scripts() {
    return gulp.src('js-src/app.js')
        .pipe(babel({
            presets: ['@babel/env']
        }))
        .pipe(uglify())
        .pipe(gulp.dest('js-min'))
}
// function minify() {
//     return gulp.src('js-src/app.js')
//         .pipe(uglify())
//         .pipe(gulp.dest('js-min'))
// }

exports.scripts = scripts;

// Watch
gulp.task('watch', function() {
    return gulp.watch('js-src/' + 'app.js', scripts);
});
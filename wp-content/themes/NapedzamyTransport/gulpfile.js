// Moduły
var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');

// Konfiguracja
var scssPath = 'scss/*.scss';

gulp.task('sass', function(){
	return gulp.src(scssPath)
		.pipe(sourcemaps.init()) // załadowanie sourcemaps
		.pipe(sass({
				errLogToConsole: true,
				outputStyle: 'expanded'
			})
			.on('error', sass.logError) // żeby nie wysypywało watch-a po błędzie
		)
		.pipe(sourcemaps.write()) // zapis sourcemaps
		.pipe(gulp.dest('css'));
});

gulp.task('watch', ['sass'], function(){
	gulp.watch(scssPath, ['sass']);
});
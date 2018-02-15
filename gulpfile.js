var gulp = require('gulp'),
    browserSync = require('browser-sync');




gulp.task('browser-sync', function(){
  browserSync ({
    server: {
      baseDir: 'app'
    },
    notify: false
  });
});

gulp.task('watch', ['browser-sync'], function(){
  gulp.watch('app/css/**/*.scss', browserSync.reload);
  gulp.watch('app/*.html', browserSync.reload);
  gulp.watch('app/js/*.js', browserSync.reload);
});
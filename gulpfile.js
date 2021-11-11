var fileinclude = require('gulp-file-include'),
    gulp = require('gulp');
 
gulp.task('build', function() {

    let files = [
        'index.html', 
        'docs/index.html',
        'docs/started/configuration.html',
        'docs/started/directory.html',
        'docs/basics/controller.html',
        'docs/basics/middleware.html',
        'docs/basics/request.html',
        'docs/basics/response.html',
        'docs/basics/routing.html',
        'docs/basics/services.html',
        'docs/foundation/application.html',
        'docs/foundation/middleware.html',
        'docs/foundation/routing.html',
        'docs/foundation/services.html',
        'docs/services/database/delete.html',
        'docs/services/database/index.html',
        'docs/services/database/inserts.html',
        'docs/services/database/joins.html',
        'docs/services/database/retrievingresults.html',
        'docs/services/database/selects.html',
        'docs/services/database/unions.html',
        'docs/services/database/updates.html',
        'docs/services/database/wheres.html',
        'docs/services/errorhandling/index.html',
        'docs/services/exceptionhandling/index.html',
        'docs/services/flashmessage/index.html',
        'docs/services/logging/index.html',
        'docs/services/memcache/index.html',
        'docs/services/templates/index.html',
    ];

    return gulp.src(files, { cwd: './site', base: "./site" })
        .pipe(fileinclude({
            prefix: '@@',
            basepath: '@file'
        }))
        .pipe(gulp.dest('./public'));
      
});
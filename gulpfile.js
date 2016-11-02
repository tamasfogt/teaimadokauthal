var packageJSON = require('./package.json');
var gulp = require('gulp');
var uglify = require('gulp-uglify');
var watch = require('gulp-watch');
var concat = require('gulp-concat');
var ngAnnotate = require('gulp-ng-annotate');
var rename = require('gulp-rename');
var watch = require('gulp-watch');
var clean = require('gulp-clean');
var sass = require('gulp-sass');
var copyDir = require('copy-dir');
var bulkSass = require('gulp-sass-bulk-import');


var source = require('vinyl-source-stream')
var buffer = require('vinyl-buffer')

var browserify = require('browserify')
var babelify = require('babelify')

const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');


elixir(mix => {
    mix.sass('app.scss')
       .webpack('app.js');
});




gulp.task('build', ['buildjs', 'copy:thirdpartydev', 'buildjslib', 'copy:templates', 'copy:html', 'copy:fonts','copy:fonts2', 'sass','copy:images']);

gulp.task('build-develop', ['buildjs', 'copy:html', 'copy:templates', 'sass']);



function buildjs() {
  var bundler = browserify(packageJSON.config.basedir+'/app/index.js').transform(babelify, {/* options */ })

  return bundler.bundle()
    .pipe(source('app.js'))
    .pipe(buffer())
    .pipe(rename('app.min.js'))
  //  .pipe(uglify({
   //             mangle: true
    //       }))
    .pipe(gulp.dest(packageJSON.config.destdir))
}
gulp.task('buildjs', buildjs);
          
function buildjslib() {
   gulp.src([packageJSON.config.basedir+'/jslib/jquery.min.js',
            packageJSON.config.basedir+'/jslib/bootstrap.min.js',
            packageJSON.config.basedir+'/jslib/owl.carousel.js',
            packageJSON.config.basedir+'/jslib/jquery.fitvids.js',
            packageJSON.config.basedir+'/jslib/smoothscroll.js',
            packageJSON.config.basedir+'/jslib/jquery.parallax-1.1.3.js',
            packageJSON.config.basedir+'/jslib/jquery.prettyPhoto.js',
            packageJSON.config.basedir+'/jslib/wow.min.js',
            packageJSON.config.basedir+'/jslib/waypoints.min.js',
            packageJSON.config.basedir+'/jslib/jquery.counterup.min.js',
            packageJSON.config.basedir+'/jslib/jquery.easing.min.js',
            packageJSON.config.basedir+'/jslib/cookies.js',
            packageJSON.config.basedir+'/jslib/script.js'
            ])
        .pipe(concat('lib.js'))
           .pipe(uglify({
                mangle: true
           }))
            .pipe(rename({
                extname: '.min.js'
            }))
        .pipe(gulp.dest(packageJSON.config.destdir));
}
gulp.task('buildjslib', buildjslib);
          

function development() {
    watch([packageJSON.config.basedir + '/scss/app.scss', packageJSON.config.basedir + '/js/**/*.js', packageJSON.config.basedir + '/*.php', packageJSON.config.basedir + '/js/**/*.tpl']
        , function () {
            gulp.start('build-develop');
        });
}
gulp.task('development', development);



function copyHtml() {
    return gulp.src([packageJSON.config.basedir + '/index.php', packageJSON.config.basedir + '/admin.php'])
        .pipe(gulp.dest('./resources/views'));
}
gulp.task('copy:html', copyHtml);


function copySass() {
    return gulp.src(packageJSON.config.basedir + '/scss/app.scss')
		.pipe(bulkSass())
        .pipe(sass({
                    includePaths: [packageJSON.config.basedir + '/scss/stylesheets']
                }))
        .pipe(concat('app.css'))
        .pipe(gulp.dest(packageJSON.config.destdir + '/css/'));
}
gulp.task('sass', copySass);


function copyTemplates() {
    return gulp.src(packageJSON.config.basedir + '/app/**/*.tpl')
        .pipe(gulp.dest(packageJSON.config.destdir ));
}
gulp.task('copy:templates', copyTemplates);



function resetDist() {
    return gulp.src('./public/dist', {
            read: false
        })
        .pipe(clean());
}
gulp.task('resetdist', resetDist);


function copyFonts() {
    return copyDir.sync(
        'node_modules/bootstrap/dist/fonts'
        , packageJSON.config.destdir + '/fonts/bootstrap/');
}
gulp.task('copy:fonts', copyFonts);

function copyFonts2() {
    return copyDir.sync(
        'frontend/csslib/fonts'
        , packageJSON.config.destdir + '/fonts/');
}
gulp.task('copy:fonts2', copyFonts2);

function copyImages() {
    return copyDir.sync(
        'frontend/images'
        , packageJSON.config.destdir + '/images/');
}
gulp.task('copy:images', copyImages);



function copyThirdPartyDev() {
    return gulp.src([
        'node_modules/angular/angular.js'
            , 'node_modules/angular-ui-router/release/angular-ui-router.js' 
            , 'node_modules/angular-animate/angular-animate.js'       
            , 'node_modules/angular-aria/angular-aria.js'
            , 'node_modules/angular-ui-bootstrap/dist/ui-bootstrap-tpls.js'
            , 'node_modules/angular-messages/angular-messages.js'
            , 'node_modules/sortablejs/Sortable.js'
			, 'node_modules/sortablejs/ng-sortable.js'
			, 'node_modules/ui-navbar/release/js/ui-navbar.js'
			, 'node_modules/angular-touch/angular-touch.js'
			, 'node_modules/lodash/dist/lodash.js'
		      , 'node_modules/angular-cookies/angular-cookies.js'
            , 'node_modules/angular-toastr/dist/angular-toastr.tpls.js'
    ])    
        .pipe(concat('angularlib.js'))
          .pipe(uglify({
                mangle: true
          }))
            .pipe(rename({
                extname: '.min.js'
            }))
        .pipe(gulp.dest(packageJSON.config.destdir + '/lib'));
}
gulp.task('copy:thirdpartydev', copyThirdPartyDev);

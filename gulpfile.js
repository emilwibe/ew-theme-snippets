const
  gulp = require("gulp"),
  sass = require("gulp-sass"),
  cleanCSS = require("gulp-clean-css"),
  concat = require("gulp-concat"),
  concatCSS = require("gulp-concat-css"),
  autoprefixer = require("gulp-autoprefixer"),
  cssimport = require("gulp-cssimport"),
  rename = require("gulp-rename"),
  git = require("gulp-git"),
  paths = {
    scss: [
      "./src/css/base.scss",
      "./src/css/animations.scss",
      "./src/css/layout.scss",
      "./src/css/grid.scss",
      "./src/css/modules.scss",
      "./src/css/modules-e.scss",
      "./src/css/state.scss",
      "./src/css/theme.scss",
      "./src/css/tomorrow-night-eighties.css"
    ],
    jsHeader: [

    ],
    jsFooter: [
      "./src/js/scripts.js",
      "./src/js/highlightjs.js"
    ],
    grid: [
      "./src/css/grid/_grid-core.css"
    ],
    git: [
      "./",
      "!./node_modules"
    ]
  }
;
sass.compiler = require("node-sass");

gulp.task('css', function(){
  return gulp.src(paths.scss)
    .pipe(concatCSS("core.css"))
    .pipe(sass().on("error", sass.logError))
    .pipe(autoprefixer())
    .pipe(cleanCSS({compatibility: "*"}))
    .pipe(gulp.dest("./dist/css"))
});

gulp.task("jsF", function(){
  return gulp.src(paths.jsFooter)
    .pipe(concat("scripts-footer.js"))
    .pipe(gulp.dest("./dist/js"))
});

gulp.task("grid", function(){
  return gulp.src(paths.grid)
    .pipe(cssimport())
    .pipe(rename("grid.scss"))
    .pipe(gulp.dest("./src/css"))
});

// git
gulp.task("git-add", function(){
  return gulp.src(paths.git)
    .pipe(git.add())
});
gulp.task('git-commit', function(){
  return gulp.src(paths.git)
    .pipe(git.commit('s'));
});
gulp.task('git-push', function(done){
  git.push('origin', 'master', function (err) {
    if (err) throw err;
  });
  done();
});

gulp.task("git-all", gulp.series("git-add", "git-commit", "git-push"));

gulp.task("default", gulp.series("grid", "css", "jsF", "git-all"));
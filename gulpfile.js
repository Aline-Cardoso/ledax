const { series, src, watch } = require("gulp");
const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const uglify = require("gulp-uglify");
const concat = require("gulp-concat");
const webp = require("gulp-webp");

function css() {
  return src(["./css/**/*.{scss,css}"])
  .pipe(concat("style-min.css"))
    .pipe(gulp.dest("./css"));
}

function script() {
  return src(["./js/**/*.js"])
    .pipe(concat("default.min.js"))
    .pipe(uglify())
    .pipe(gulp.dest("./js"));
}

function images() {
  return src(["./img/**/*.{jpg,png}"])
    .pipe(webp())
    .pipe(gulp.dest("./img/webp"));
}

exports.css = css;
exports.images = images;
exports.scripts = script;
// digitando apenas gulp ele roda padrão para montar os arquivos "build"  gulp
exports.default = series(css, images, script);
// para assistir o codigo e fazer as mudanças automaticamente digita gulp watch
exports.watch = function () {
  watch("./css/**/*.scss", css);
  watch("./img/**/*.{jpg,png}", images);
  watch("./js/**/*.js", script);
};

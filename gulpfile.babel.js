import { src, dest, watch, parallel, series } from 'gulp'
import babel from 'gulp-babel'
import cleanCSS from 'gulp-clean-css'
import concat from 'gulp-concat'
import del from 'del'
import download from 'gulp-download-files'
import plumber from 'gulp-plumber'
import sass from 'gulp-sass'
import sourcemaps from 'gulp-sourcemaps'
import vinylPaths from 'vinyl-paths'
import importCSS from "gulp-import-css"
import rename from "gulp-rename"



const sources = {
  css: [
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
  jsHead: [

  ],
  jsFooter: [
    "./src/js/scripts.js",
    "./src/js/highlightjs.js"
  ],
  particlesJS: "./src/js/stand-alone/particles.js",
  particlesConfig: ".src/js/stand-alone/particlesjs-config.json",
  cssGrid: [
    "./src/css/grid/_grid-core.css"
  ]
}

const dirs = {
  dest: "./dist",
  destCSS: "./src/css",
  distCSS: "./dist/css",
  distJS: "./dist/js"
}

export const clean = () => src("./dist/*")
  .pipe(vinylPaths(del))

export const build_grid = () => src(sources.cssGrid)
  .pipe(importCSS())
  .pipe(rename("grid.scss"))
  .pipe(dest(dirs.destCSS))

export const buildStylesProd = () => src(sources.css)
  .pipe(plumber())
  .pipe(sourcemaps.init())
  .pipe(sass())
  .pipe(concat('core.min.css'))
  .pipe(cleanCSS({ compability: 'ie8' }))
  .pipe(sourcemaps.write('.'))
  .pipe(plumber.stop())
  .pipe(dest(dirs.distCSS))

export const buildStylesDev = () => src(sources.css)
  .pipe(plumber())
  .pipe(sourcemaps.init())
  .pipe(sass())
  .pipe(concat('core.dev.css'))
  .pipe(sourcemaps.write('.'))
  .pipe(plumber.stop())
  .pipe(dest(dirs.distCSS))

export const buildJSHead = () => src(sources.jsHead)
  .pipe(concat("scripts-head.js"))
  .pipe(babel({
    presets: ['@babel/env']
  }))
  .pipe(dest(dirs.distJS))

export const buildJSFooter = () => src(sources.jsFooter)
  .pipe(concat("scripts-footer.js"))
  .pipe(babel({
    presets: ['@babel/env']
  }))
  .pipe(dest(dirs.distJS))

export const particlesJS = () => src(sources.particlesJS)
  .pipe(dest(dirs.distJS))

export const dev = series(clean, build_grid, parallel(buildStylesDev, buildStylesProd, buildJSFooter, particlesJS /*, buildJSHead*/));

export default dev;
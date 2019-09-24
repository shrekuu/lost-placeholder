/**
 * 开发时编译为
 * npm run watch
 *
 * empty.js 不要删除, 为修复 manifest.js vendor.js 所在的目录.
 */

const mix = require('laravel-mix')
const LiveReloadPlugin = require('webpack-livereload-plugin')
const globby = require('globby')

// 编译结束不要提示
mix.disableNotifications()

// 增加 livereload 功能
mix.webpackConfig({
    plugins: [
        new LiveReloadPlugin(),
    ],
})

// 修改字体文件存放目录
mix.config.fileLoaderDirs.fonts = `fonts`

// 自动提取出第三方依赖到 vendor.json 文件, 视图上要引入 `manifest.js`
// 写入 mix-manifest.json 以便在视图使用 mix() 防止缓存
mix.extract().version()

globby.sync([
    `resources/js/pages/**/[^_]*.js`,
    `resources/js/empty.js`,
])
    .forEach(filePath => {
        mix.js(filePath, filePath.replace(/^resources/, 'public'))
    })

globby.sync(`resources/scss/pages/**/[^_]*.scss`)
    .forEach(filePath => {
        mix.sass(filePath, filePath.replace(/^resources/, 'public')
            .replace(/\/scss\//, '/css/')
            .replace(/\.scss/, '.css'))
    })

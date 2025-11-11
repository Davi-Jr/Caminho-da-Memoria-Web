const browserSync = require('browser-sync').create();

browserSync.init({
  proxy: "localhost:8080",
  files: [
    "**/*.php",
    "app/**/*.php",
    "public/**/*.css",
    "public/**/*.js",
    "public/**/*.webp" // 👈 adiciona suporte a imagens .webp
  ],
  serveStatic: ["public"], // 👈 serve arquivos estáticos locais
  injectChanges: true,
  open: true,
  notify: false,
  reloadDelay: 500,
  port: 3000
});

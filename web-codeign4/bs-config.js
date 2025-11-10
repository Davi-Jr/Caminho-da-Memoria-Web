const browserSync = require('browser-sync').create();

browserSync.init({
  proxy: "localhost:8080", // Porta do spark serve
  files: [
    "**/*.php",          // 👈 observa qualquer mudança em arquivos PHP
    "app/**/*.php",      // 👈 observa também dentro da pasta app
    "public/**/*.css",
    "public/**/*.js"
  ],
  injectChanges: true,
  open: true,
  notify: false,
  reloadDelay: 500,
  port: 3000
});

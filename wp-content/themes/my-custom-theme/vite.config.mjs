import { defineConfig } from 'vite'
import FullReload from 'vite-plugin-full-reload'
import tailwindcss from '@tailwindcss/vite'
import path from 'path'

export default defineConfig({
  root: '.',
  server: {
    origin: 'http://localhost:5173',
    cors: true,
    strictPort: true,
    hmr: {
      protocol: 'ws',
      host: 'localhost',
      port: 5173,
    },
  },
  build: {
    outDir: 'dist',
    rollupOptions: {
      input: './src/js/index.js',
      output: {
        entryFileNames: 'bundle.js',
        assetFileNames: 'bundle.css',
      },
    },
    emptyOutDir: false,
  },
  plugins: [
    tailwindcss(),
    FullReload(['./**/*.php']), // ⬅️ Make sure this is outside `server`
  ],
})
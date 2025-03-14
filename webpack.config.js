const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CopyPlugin = require('copy-webpack-plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');

const mode = process.env.NODE_ENV || 'development';

module.exports = {
  mode: mode, // Utiliza la variable de entorno para establecer el modo
  entry: './src/assets/app.js', // Punto de entrada JavaScript
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: 'js/bundle.js', // Salida del archivo JS
  },
  module: {
    rules: [
      {
        test: /\.css$/i, // Procesa archivos CSS
        use: [
          MiniCssExtractPlugin.loader, // Extrae CSS en archivos separados
          'css-loader', // Interpreta `@import` y `url()`
          'postcss-loader', // Procesa CSS con PostCSS (Tailwind)
        ],
      },
      {
        test: /\.php$/, // Maneja archivos PHP como recursos estáticos
        type: 'asset/resource',
      },
      {
        test: /\.(woff(2)?|ttf|eot|otf|svg)$/, // Maneja archivos de fuentes
        type: 'asset/resource',
        generator: {
          filename: 'assets/fonts/[name][ext]', // Carpeta de destino en `dist`
        },
      },
    ],
  },
  plugins: [
    new CleanWebpackPlugin(), // Limpia el directorio `dist` antes de cada compilación
    new MiniCssExtractPlugin({
      filename: 'assets/css/styles.css', // Salida del CSS compilado
    }),
    new CopyPlugin({
      patterns: [
        {
          from: 'src/**/*.php', // Copia todos los archivos PHP
          to: ({ context, absoluteFilename }) => {
            const relativePath = path.relative(context, absoluteFilename);
            return relativePath.replace(/^src[\\/]/, ''); // Elimina 'src/' del path
          },
        },
        {
          from: 'src/**/*.json', // Copia todos los archivos JSON
          to: ({ context, absoluteFilename }) => {
            const relativePath = path.relative(context, absoluteFilename);
            return relativePath.replace(/^src[\\/]/, ''); // Elimina 'src/' del path
          },
        },
        {
          from: 'src/**/*.{jpg,jpeg,png,gif,svg,webp}', // Copia todas las imágenes desde cualquier subdirectorio
          to: ({ context, absoluteFilename }) => {
            const relativePath = path.relative(context, absoluteFilename);
            return relativePath.replace(/^src[\\/]/, ''); // Elimina 'src/' del path
          },
        },
        {
          from: 'src/assets/icons/*.svg', // Copia todas las imágenes
          to: 'assets/icons/[name][ext]', // Carpeta de destino en `dist`
        },
        {
          from: 'src/assets/docs/**/*.{doc,docx,pdf,xls}', // Copia todos los documentos
          to: 'assets/docs/[name][ext]', // Carpeta de destino en `dist`
        },
        {
          from: 'src/**/assets/docs/**/*.{doc,docx,pdf,xls}', // Copia todos los documentos desde cualquier subdirectorio
          to: ({ context, absoluteFilename }) => {
            const relativePath = path.relative(context, absoluteFilename);
            return relativePath.replace(/^src[\\/]/, ''); // Mantiene la estructura de directorios
          },
        },
        {
          from: 'node_modules/@fontsource-variable/open-sans/files/open-sans-latin*', // Copia solo fuentes latinas de Open Sans
          to: 'assets/fonts/[name][ext]',
        },
        {
          from: 'node_modules/@fontsource-variable/roboto-condensed/files/roboto-condensed-latin*', // Copia solo fuentes latinas de Roboto Condensed
          to: 'assets/fonts/[name][ext]',
        },
      ],
    }),
  ],
  watch: mode === 'development', // Activa observación solo en modo desarrollo
};

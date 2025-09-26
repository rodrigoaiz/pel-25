const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CopyPlugin = require('copy-webpack-plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');

const mode = process.env.NODE_ENV || 'development';
const isProduction = mode === 'production';

module.exports = {
  mode: mode,
  entry: './src/assets/app.js',
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: 'js/bundle.js',
    clean: true, // Limpia automáticamente el directorio dist
  },
  // Solo generar source maps en desarrollo
  devtool: isProduction ? false : 'eval-source-map',
  
  module: {
    rules: [
      {
        test: /\.css$/i,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          'postcss-loader',
        ],
      },
      {
        test: /\.php$/,
        type: 'asset/resource',
      },
      {
        test: /\.(woff(2)?|ttf|eot|otf|svg)$/,
        type: 'asset/resource',
        generator: {
          filename: 'assets/fonts/[name][ext]',
        },
      },
    ],
  },
  plugins: [
    new CleanWebpackPlugin(),
    new MiniCssExtractPlugin({
      filename: 'assets/css/styles.css',
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
          from: 'src/**/*.html', // Copia todos los archivos H5P
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
          from: 'src/**/assets/docs/**/*.{doc,docx,pdf,xls,xlsx,pptx,ppt}', // Copia todos los documentos desde cualquier subdirectorio
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

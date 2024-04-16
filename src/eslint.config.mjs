import path from 'path';
import { fileURLToPath } from 'url';
import { FlatCompat } from '@eslint/eslintrc';
import pluginJs from '@eslint/js';

// mimic CommonJS variables -- not needed if using CommonJS
const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);
const compat = new FlatCompat({ baseDirectory: __dirname, recommendedConfig: pluginJs.configs.recommended });

export default [
 {
    files: ['**/*.js'],
    languageOptions: { sourceType: 'commonjs' }
 },
 {
    ignores: ['/config/*', 'tailwind.config.js', 'webpack.mix.js']
 },
 ...compat.extends('standard')
];

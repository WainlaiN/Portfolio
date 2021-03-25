/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';

// You can specify which plugins you need

//import $ from 'jquery';
//global.$ = global.jQuery = $;
import { Tooltip, Toast, Popover } from 'bootstrap';

import './js/theme';

// start the Stimulus application
import './bootstrap';


require('@fortawesome/fontawesome-free/css/all.min.css');
require('@fortawesome/fontawesome-free/js/all.js');

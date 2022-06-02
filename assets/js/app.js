/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import '../styles/app.css';
import '../styles/global.scss';

// start the Stimulus application
import '../bootstrap';

console.log('app.js compiled active');

// import 
import Vue from 'vue';
import Routes from './routes.js';
import App from './views/App';

// render vue.js in twig template
const app = new Vue({
  el: '#app',
  router: Routes,
  render: h => h(App),
});

export default app;
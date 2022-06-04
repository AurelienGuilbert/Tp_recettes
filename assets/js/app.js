console.log('app.js compiled active');

// styles
import '../styles/app.css';
import '../styles/global.scss';
import '../bootstrap';

// import 
import Vue from 'vue';
import Routes from './routes.js';
import App from './views/App';

// render in index.twig template
const app = new Vue({
  el: '#app',
  router: Routes,
  render: h => h(App),
});

export default app;
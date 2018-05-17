require('./bootstrap');

import router from './routes';

// import { store } from './store';

import App from './components/App';

// import Toasted from 'vue-toasted';

// Vue.use(Toasted, {
//     iconPack: 'fontawesome'
// });

   /**
    * TODO: create a event bus in order to display/hide success/error messages
    * It's a better approach than calling functions in every component
    * I don't feel like doing it :'v
    */

Vue.prototype.$eventHub = new Vue();
   
new Vue({
    el: '#app',
   //  store,
    router,
    render: h => h(App)
});
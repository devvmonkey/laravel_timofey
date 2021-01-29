
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'; 
import { routes } from './routes';
import VeeValidate from 'vee-validate';
import Loading from 'vue-loading-overlay';
import 'vue-loading-overlay/dist/vue-loading.min.css';
import VueNotifications from 'vue-notifications';
import iziToast from 'izitoast'// https://github.com/dolce/iziToast
import 'izitoast/dist/css/iziToast.min.css';
import VueSwal from 'vue-swal';
import { Validator } from 'vee-validate';

function toast ({title, message, type, timeout, cb}) {
  if (type === VueNotifications.types.warn) type = 'warning'
  return iziToast[type]({title, message, timeout})
}

const options = {
  success: toast,
  error: toast,
  info: toast,
  warn: toast
}

Vue.use(VueRouter);
Vue.use(VeeValidate);
Vue.use(Loading);
Vue.use(VueNotifications, options);
Vue.use(VueSwal)

const router = new VueRouter({
    routes
});

const dictionary = {
  en: {
    attributes: {
      email: 'Email',
      first_name: 'First name',
      last_name: 'Last name'
    }
  },
};

Validator.localize(dictionary);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import App from './App.vue';

const app = new Vue({
    el: '#app',
    router,
    render: h => h(App)
});

import App1 from './App1.vue';

const app1 = new Vue({
    el: '#app1',
    router,
    render: h => h(App1)
});



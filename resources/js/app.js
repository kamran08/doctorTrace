
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import router from './router';
import store from './store'
import common from './common'
Vue.mixin(common)
// iView items
import iView from 'iview'
import 'iview/dist/styles/iview.css'
import locale from 'iview/dist/locale/en-US';
Vue.use(iView, { locale });
import VueChatScroll from 'vue-chat-scroll'
Vue.use(VueChatScroll)


import Chat from 'vue-beautiful-chat'
Vue.use(Chat)




Vue.component('master', require('./layout/master.vue'));
Vue.component('dashboard', require('./layout/dashBoard.vue'));
Vue.component('home-master', require('./layout/home-master.vue'));
Vue.component('user-profile', require('./layout/user-profile.vue'));
Vue.component('bot', require('./layout/bot.vue'));
Vue.component('custom', require('./layout/custom.vue'));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    store,
    router,
});

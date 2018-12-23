window.Vue = require('vue');
//window.Router = require('vue-router');
import Router from 'vue-router';

import AboutTab from '../components/profileTabs/AboutTab';
import InfoTab from '../components/profileTabs/InfoTab';
import FeedbackTab from '../components/profileTabs/FeedbackTab';

Vue.use(Router);

export default new Router({
  mode: 'history',
  routes: [{
    path: '/profile',
    name: 'About',
    component: AboutTab,
  }, {
    path: '/profile/info',
    name: 'Info',
    component: InfoTab,
  }, {
    path: '/profile/feedback',
    name: 'Feedback',
    component: FeedbackTab,
  }],

});
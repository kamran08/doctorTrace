import Vue from 'vue';
import Vuex from 'vuex';
import doctorModule from './modules/doctor';
import userModule from './modules/user';
import searchModule from './modules/search';


Vue.use(Vuex);

export default new Vuex.Store({
  modules: {
    doctor: doctorModule,
    user: userModule,
    search: searchModule,
  },
});

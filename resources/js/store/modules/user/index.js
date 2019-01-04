import actions from './actions';
import getters from './getters';
import mutations from './mutations';

const state = {
  users : '',
  user_id:[],
  SuccessMsg:'',
 
 
};

export default {
  namespaced: true,
  state,
  actions,
  getters,
  mutations,
};
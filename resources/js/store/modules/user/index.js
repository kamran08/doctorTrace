import actions from './actions';
import getters from './getters';
import mutations from './mutations';

const state = {
  users : '',
  user_id:[],
  appointments:[],
  SuccessMsg:'',
 
 
};

export default {
  namespaced: true,
  state,
  actions,
  getters,
  mutations,
};

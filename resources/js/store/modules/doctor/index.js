import actions from './actions';
import getters from './getters';
import mutations from './mutations';

const state = {
  doctorInfo : [],
  appointmentInfo : [],
  LinkFlagTab: 2,


 
 
};

export default {
  namespaced: true,
  state,
  actions,
  getters,
  mutations,
};

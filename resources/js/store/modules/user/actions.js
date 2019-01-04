const updateUser = async (context,data) => {
					  context.commit('USER_UPDATED', data);    
};
const Userid_UPDATED = async (context,data) => {
					  context.commit('Userid_UPDATED', data);    
};
const Msg_UPDATED = async (context,data) => {
					  context.commit('Msg_UPDATED', data);    
};



export default {
	updateUser,
	Userid_UPDATED,
	Msg_UPDATED,
};

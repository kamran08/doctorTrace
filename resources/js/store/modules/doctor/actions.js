const updateDoctor = async (context,data) => {
					  context.commit('Doctor_UPDATED', data);    
};



export default {
	updateDoctor,
};

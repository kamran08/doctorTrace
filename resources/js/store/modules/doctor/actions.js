const updateDoctor = async (context,data) => {
					  context.commit('Doctor_UPDATED', data);    
};
const updateTab = async (context,data) => {
					  context.commit('Tab_UPDATED', data);    
};
const updateAppointment = async (context,data) => {
					  context.commit('AppointMent_UPDATED', data);    
};



export default {
	updateDoctor,
	updateTab,
	updateAppointment,
};

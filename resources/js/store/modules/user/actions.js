const updateUser = async (context,data) => {
					  context.commit('USER_UPDATED', data);    
};
const Userid_UPDATED = async (context,data) => {
					  context.commit('Userid_UPDATED', data);    
};
const Msg_UPDATED = async (context,data) => {
					  context.commit('Msg_UPDATED', data);    
};
const Appointment_UPDATED = async (context,data) => {
					  context.commit('Appointment_UPDATED', data);    
};
const AppointmentSerial_UPDATED = async (context,data) => {
					  context.commit('AppointmentSerial_UPDATED', data);    
};



export default {
	updateUser,
	Userid_UPDATED,
	Msg_UPDATED,
	Appointment_UPDATED,
	AppointmentSerial_UPDATED,
};

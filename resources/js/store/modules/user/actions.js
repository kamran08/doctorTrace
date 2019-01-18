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
const userAppointMent_UPDATED = async (context,data) => {
	context.commit('userAppointMent_UPDATED', data);    
};
const AppointMent_Delete = async (context,data) => {
	context.commit('AppointMent_Delete', data);    
};



export default {
	updateUser,
	Userid_UPDATED,
	Msg_UPDATED,
	Appointment_UPDATED,
	AppointmentSerial_UPDATED,
	userAppointMent_UPDATED,
	AppointMent_Delete,
};

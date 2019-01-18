const users = state => state.users;
const user_id = state => state.user_id;
const getMsg = state => state.SuccessMsg;
const getAppointments = state => state.appointments;
const getUserAppointmentInfo = state => state.userAppointmentInfo;





export default {
  users,
  user_id,
  getMsg,
  getAppointments,
  getUserAppointmentInfo,
};

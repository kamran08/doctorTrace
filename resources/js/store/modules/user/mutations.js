const USER_UPDATED = (state,user) => {   
            state.users=user;
          };
const Userid_UPDATED = (state,user_id) => {  
            state.user_id=user_id;
          };
const Msg_UPDATED = (state,data) => {  
            state.SuccessMsg=data;
          };
const Appointment_UPDATED = (state,data) => {  
            state.appointments=data;
          };
const AppointmentSerial_UPDATED = (state,data) => {  
            state.appointments[data].isBooked=true;
            state.appointments[data].isPending=true;
          };
const userAppointMent_UPDATED = (state,data) => {   
            state.userAppointmentInfo=data;
          };
const AppointMent_Delete = (state,data) => {   
           // delete state.userAppointmentInfo[data];
            state.userAppointmentInfo.splice(data,1)
          };




export default {
            USER_UPDATED,
            Userid_UPDATED,
            Msg_UPDATED,
            Appointment_UPDATED,
            AppointmentSerial_UPDATED,
            userAppointMent_UPDATED,
            AppointMent_Delete,
};

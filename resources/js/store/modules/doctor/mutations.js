const Doctor_UPDATED = (state,data) => {   
            state.doctorInfo=data;
          };
const Tab_UPDATED = (state,data) => {   
            state.LinkFlagTab=data;
          };
const AppointMent_UPDATED = (state,data) => {   
            state.appointmentInfo=data;
          };
 




export default {
  Doctor_UPDATED,
  Tab_UPDATED,
  AppointMent_UPDATED,

};

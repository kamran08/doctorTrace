const USER_UPDATED = (state,user) => {   
            state.users=user;
          };
const Userid_UPDATED = (state,user_id) => {  
            console.log("Log In user Upadating") ;
            state.user_id=user_id;
          };
const Msg_UPDATED = (state,data) => {  
            console.log("SuccessMsg Upadating") ;
            state.SuccessMsg=data;
          };




export default {
            USER_UPDATED,
            Userid_UPDATED,
            Msg_UPDATED,
};

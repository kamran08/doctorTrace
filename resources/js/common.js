import {mapActions,mapGetters} from 'vuex';
export default  {
    data(){
        return {

         
           
          
                

        }
    },
    
   methods: {
  
    async callApi(method, url, dataObj){
        try{

            let data = await axios({
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                },
                method: method,
                url: url,
                data: dataObj
            })
            return data 
            
        }catch(e){
            
            return e.response
        }
    },

   

    
   },

   computed: {
    ...mapGetters({
       doctor: 'doctor/doctorInfo',
       user_id: 'user/user_id',
       SuccessMsg: 'user/getMsg',
       LinkFlagTab: 'doctor/TabInfo',
       appointmentInfo: 'doctor/appointmentInfo',
       specialtiesInfo: 'search/getSpecialties',
       locationInfo: 'search/getLocation',
       resultInfo: 'search/getResult',

}),
}

  
};
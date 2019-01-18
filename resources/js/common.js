import {mapActions,mapGetters} from 'vuex';
export default  {
    data(){
        return {

         BASE_URL:"http://docappoint.test",
           
          
                

        }
    },
    
    methods: {
        /**
         * 
         * @param {*} method, call method
         * @param {*} url , api url
         * @param {*} dataObj, payload
         */
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

        async callApiBot(quary){

            let obj = {
                query: quary,
                lang: "en", 
                sessionId: "somerandomthing" 
            }
            //obj = JSON.stringify(obj)
            const res = await this.callApi('post', 'https://api.dialogflow.com/v1/query?v=20180101',obj)
            if(res.status == 200){
               let msg = res.data.result.fulfillment.speech;
              //  console.log("i am common")
               // console.log(msg);
                this.s(msg);

                return msg 

              //  return res.data.result.fulfillment.speech
            
                
            }
            else{
                this.swr();
            }
         
        },

        

        i(msg,i='Hey!') {
            this.$Notice.info({
                title: i,
                desc:  msg
            });
        },
        s(msg,i='Great!') {
            this.$Notice.success({
                title: i,
                desc:  msg
            });
        },
        w(msg,i='Hi!') {
            this.$Notice.warning({
                title: i,
                desc:  msg
            });
        },
        e(msg,i='Oops!') {
            this.$Notice.error({
                title: i,
                desc:  msg
            });
        },
        swr() {
            this.$Notice.error({
                title: 'Oops',
                desc:  'Something went wrong, please try again later'
            });
        },
        ns(title){
            this.$Message.success(title);
        },
        ni(title){
            this.$Message.info(title);
        },
        nw(title){
            this.$Message.warning(title);
        },
        ne(title){
            this.$Message.error(title);
        },
        nswr(){
            this.$Message.error('Something went wrong, please try again later');
        },
    },

   computed: {
    ...mapGetters({
       doctor: 'doctor/doctorInfo',
       user_id: 'user/user_id',
       SuccessMsg: 'user/getMsg',
       userAppointments: 'user/getAppointments',
       LinkFlagTab: 'doctor/TabInfo',
       appointmentInfo: 'doctor/appointmentInfo',
       specialtiesInfo: 'search/getSpecialties',
       locationInfo: 'search/getLocation',
       resultInfo: 'search/getResult',

}),
}

  
};
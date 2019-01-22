<template>
    <div class="wrapper hold-transition skin-blue fixed sidebar-mini">
       <!-- Content Wrapper. Contains page content -->
       <div class="">
          <!-- right content -->
          <section class="content">
             <div class="box direct-chat">
                <div class="box-header with-border bg-lighter">
                   <h3 class="box-title">Chat Message</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                   <!-- Conversations are loaded here -->
                   <div id="chat-app" class="direct-chat-messages chat-app" v-chat-scroll="{always: true, smooth: true}">

                       <!-- chat item -->
                       <div  >
                           <div  v-if="chats.length" v-for="(c,i) in chats" :key="i" >
                                <!-- Message to the right -->
                                <div class="direct-chat-msg right mb-30" v-if="c.msgFrom==='me'">
                                   <div class="direct-chat-text">
                                      <p>{{c.msg}}</p>
                                      <!-- <p class="direct-chat-timestamp"><time  datetime="2018">{{currentTime}}</time></p> -->
                                   </div>
                                   <!-- /.direct-chat-text -->
                                </div>
                                <!-- Message. Default to the left -->
                                <div class="botChat direct-chat-msg mb-30" v-if="c.msgFrom==='bot'" >
                                   <!-- /.direct-chat-info -->
                                   <img class="direct-chat-img avatar" src="img/bot.png" alt="message user   image">
                                   <!-- /.direct-chat-img -->
                                   <div class="direct-chat-text">
                                      <p>{{c.msg}}</p>
                                      <!-- <p class="direct-chat-timestamp"><time datetime="2018">{{currentTime}}</time></p> -->
                                   </div>
                                   <!-- /.direct-chat-text -->
                                </div>
                                <!-- /.direct-chat-msg -->
                           </div>
                        </div>
                   </div>
                   <!--/.direct-chat-messages-->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                      <div class="input-group">
                         <input id="input" type="text" placeholder="Type  Message ..."  v-model="userWriteChat"  v-on:keyup.13="getAnswer" class="form-control">
                         <div class="input-group-addon">
                            <div class="align-self-end gap-items">
                               <a class="publisher-btn" @click="getAnswer" ><i class="fa fa-paper-plane"></i></a>
                            </div>
                         </div>
                      </div>
                </div>
                <!-- /.box-footer-->
             </div>
             <!-- /.box -->
          </section>
          <!-- /.right content -->
       </div>
       <!-- /.content-wrapper -->
    </div>
</template>

<script>
export default {
   props: ['gid'],
    data(){
        return{
            boxChat:[],
            allDoctors:[],


            
            userWriteChat:'',
            botShowChat:'',
            userShowChat:'',
            currentTime: (new Date().toISOString().slice(0,10)),
            chatIndex:0,
            chats: [],

        }
    },
   methods:{
     async  getAnswer(){
            let userChat =this.userWriteChat;
            this.userWriteChat = '';
            let obj = {
                query: userChat,
                lang: "en", 
                sessionId: "somerandomthing" 
            }
             this.chats.push({
                  msgFrom: 'me', 
                  msg: userChat
               })
            
            const res = await this.callApi('post', 'https://api.dialogflow.com/v1/query?v=20180101',obj)
            if(res.status == 200){
               let msg = res.data.result.fulfillment.speech;

              
               msg = this.backgroudProcess(msg);
              
               this.chats.push({
                  msgFrom: 'bot', 
                  msg: msg
               })
            }
            else{
                this.swr();
            }


          
       },

       backgroudProcess(msg){
          
            var re = msg.split("/");
            console.log("i am backroud")
            if(re[0]== '**'){
               console.log(this.gid.user_id);
               if(this.gid.user_id == 0){
                  msg = "Please Login to  make any appointment";
               }
               else{
                  let doctor = this.findDoctorByName(re[1])

                 let flag =  this.makeAppointment(doctor.id,this.gid.user_id,re[2])

                 if(flag){
                     msg = "Booking Confirmed!! Please check your profile dashboard";
                 }
                 else{
                    msg = "Sorry Service not available right now"
                 }
               }
              
            }
            else if(re[0] == '***'){
                msg = "You should consult with a "+re[1]+" For your "+re[2]+" Problem . "
                 let info =this.findDoctorBySpecialties(re[1],re[2]);

                  console.log(info)

                  if(info.doctor.length>0){
                        msg = msg+'\n'+info.msg
                  }

            }
            console.log(re)

            return msg;
       },
      async getAllDoctorName(){
           const res = await this.callApi('get', '/getAllDoctorName');
             if(res.status == 200){
               this.allDoctors = res.data;
               console.log(this.allDoctors)
            }
            else{j
                this.swr();
            }
       },
          findDoctorBySpecialties(specialties,problem){
               let msg = ' Here are some doctors you can consult with your ' +problem+' problem';
               let doctor = [];
               console.log(this.allDoctors);
                for(let d of this.allDoctors){
                   console.log("| d name " + d.specialties);
                     if(d.specialties == specialties){
                         msg = msg+' '+d.name
                         doctor.push(d);
                     }

                     return {'msg': msg,'doctor':doctor};
                }
               
               
            },
          findDoctorByName(name){
               // console.log("name " + name);
               console.log(this.allDoctors);
                for(let d of this.allDoctors){
                   console.log("d name " + d.name);
                     if(d.name == name){
                         return d;
                     }
                }
               
               
            },
            async  makeAppointment(doctor_id,user_id,date){
               console.log("i am here");
               let AuthData = {
               'doctor_id':doctor_id,
               'user_id':user_id,
               'serial':1,
               'date':date,
               }
               console.log(AuthData);
               const info = await this.callApi('post', '/makeAppointment',AuthData)
                  if(info.status===200){
               this.s(info.data.message);
               return 1;
               }
               else{
               let msg = "Error : "+info
               this.e(msg)
               console.log(msg)
               return 0;
               }
               
            },

   },
   created(){

      this.getAllDoctorName();
   },
   


}
</script>

<style>

</style>

<template>
    <div>
        <div class="form-group">
            <form method="POST" name="SearchByDate" action="">
                <input type="date" class="form-control " v-model="currentTime" v-on:change="userAppoShowByDate">
            </form>
        </div>
        <div class="table-responsive">
           <table  class="table table table-hover m-0" v-if="userAppointmentInfo.length" >
               <thead>
                   <tr>
                       <th>Serial No</th>
                       <th>Doctors  Name</th>
                       <th>Phone</th>
                       <th>Time</th>
                       <th>Date</th>
                       <th>Status</th>
                   </tr>
               </thead>
               <tbody>
                   <tr v-for="(item,index) in userAppointmentInfo" :key="index" >
                       <th>
                           <span >{{index+1}}</span>
                       </th>
                       <td>
                           <h5 class="m-0">{{item.name}}</h5>
                           <p class="m-0 text-muted font-13"><small>{{item.specialties}}</small></p>
                       </td>
                       <td>{{item.phone}}</td>
                       <td>{{item.slotDetails}}</td>
                       <td>{{item.date}}</td>
                       <td>
                            <div class="button_one"><button  v-if="(item.status==1)" type="button" name='change' class="btn btn-success">Approved</button></div>
                            <div class="button_one"><button v-if="(item.status==0)" type="button" name='change' class="btn btn-success">Pending</button></div>
                            <div class="button_two"><button v-if="(item.status==0)" type="button" name='change' @click="cancelAppointment(item.id)" class="btn btn-danger">Cancel Appointment</button></div>
                       </td>
                   </tr>
                       
               </tbody>
           </table>
       </div> <!-- table-responsive -->
    </div>
</template>

<script>
import {mapActions,mapGetters} from 'vuex';
    export default {
        props: ['userGID'],

        data() {
            return {
                user: [],
                currentTime: (new Date().toISOString().slice(0,10)),
                
            }
        },

        computed: {

            ...mapGetters({
                userAppointmentInfo: 'user/getUserAppointmentInfo',

            }),

           

        },
        created() {
            // Do something useful with the data in the template
            console.log("i am from referencer bla bla")
            this.user = this.userGID.user;

            this.userAppoShowByDate();
            // this.$Notice.info({
            //         title: 'Notification title',
            //         desc: 'Sucess sdf sdf sdf sd fsd f sdf sd'
            // })

            this.i('Appoint Infomation Component')
            

            


        },

        methods: {

            async userAppoShowByDate(){

      
	  		let AuthData = {
      	    	'user_id':this.user.id,
      	    	'date':this.currentTime,
      		}
	  		const res = await this.callApi('post', '/userAppoShowByDate',AuthData)
	  		if(res.status===200){

                

                //  this.userAppointmentInfo = res.data.appointment;
                  this.$store.dispatch('user/userAppointMent_UPDATED',res.data.appointment);

	  		}
	  		else{
	  			console.log("Error in deleting Appointment Info");
	  		}
        },
            async cancelAppointment(id){

                 

                 let index = this.userAppointmentInfo.findIndex(x => x.id === id);
                  console.log("Cancle : "+index)
                   this.$store.dispatch('user/AppointMent_Delete',index);
                   this.s('Appointment have been cancle','Update')
      
	  		// let AuthData = {
      	    // 	'id':id,
      		// }
	  		// const res = await this.callApi('post', '/cancleAppointment',AuthData)
	  		// if(res.status===200){

                

            //     // <Alert type="success" show-icon closable>
            //     //     A success prompt
            //     //     <span slot="desc">Content of prompt. Content of prompt. Content of prompt. Content of prompt. </span>
            //     // </Alert>

	  		// }
	  		// else{
	  		// 	console.log("Error in retriveing Appointment Info");
            //   }
             
        },

        },

    }
</script>
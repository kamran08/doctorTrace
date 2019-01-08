<template>
	<div >
	    <!-- Success Msg -->
		<!-- <div class="row justify-content-center" v-if="SuccessMsg" >     
      		<div class="alert alert-success alert-dismissible fade show" role="alert">
        		{{ SuccessMsg }}
        		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            		<span aria-hidden="true">&times;</span>
          		</button>
        	</div>
      	</div> -->
		  <!-- menu -->
      	<div class="profile_tabs box_shadow">
			<div class="profile_tabs_menu">
  				<ul class="profile_tabs_menu_ul">
      				<li  v-bind:class =" (LinkFlag==1)? 'profile_tabs_menu_ul_active': '' " @click="changeTab(1)" >About</li>
      				<li  v-bind:class =" (LinkFlag==2)? 'profile_tabs_menu_ul_active': '' " @click="changeTab(2)" >Info</li>
      				<li  v-bind:class =" (LinkFlag==3)? 'profile_tabs_menu_ul_active': '' " @click="changeTab(3)" >Feedback</li>
  				</ul>
  			</div>
			<AboutTab v-if="(LinkFlag==1)"/>	
			<InfoTab v-if="(LinkFlag==2)"/>	
			<FeedbackTab v-if="(LinkFlag==3)"/>
		</div>	
	</div>
</template>

<script>

import AboutTab from '../components/profileTabs/AboutTab';
import InfoTab from '../components/profileTabs/InfoTab';
import FeedbackTab from '../components/profileTabs/FeedbackTab';
export default {
	props: ['gid'],
	// props: ['user'],:user="{{Auth::user()}}"
	components: {
    AboutTab,
    InfoTab,
    FeedbackTab,
  },
	data(){
		return{

			LinkFlag:1,

		

		}
	},

	// async created() {

    //     const res = await this.callApi('get', '/app/get/some-data-from-laravel')
	// 		if(res.status===200){

	// 			 this.$store.dispatch('users/updateUser',res.data);

	// 		}

       
	// },

	computed: {

	},
	async created () {
		this.$store.dispatch('doctor/updateDoctor',this.gid.doctor);
		this.$store.dispatch('user/Userid_UPDATED',this.gid.user_id);
		
		console.log(this.userAppointments);

		if(this.gid.user_id){
			console.log("I am log In");
			let AuthData = {
    	    	'doctor_id':this.doctor.id,
    	    	'date':(new Date().toISOString().slice(0,10)),
    		}
			const res = await this.callApi('post', '/showByDate',AuthData)
			if(res.status===200){

				this.$store.dispatch('user/Appointment_UPDATED',res.data.appointment);

			}
			else{
				console.log("Error in retriveing Appointment Info");
			}
		}
	    

	},
	  methods: {
		changeTab(id){

  			if(id==1){
    			this.LinkFlag = 1;
  			}
  			else if(id==2){
    			this.LinkFlag=2;
  			}
 			else if(id==3){
    			this.LinkFlag=3;
    		}
		}
	},
	
}
</script>



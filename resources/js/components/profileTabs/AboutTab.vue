<template>
  <div class="profile_tabs_components">
      <div class="doc_profile_tabs dis">
        <div class="doc_profile_tabs_img">
          <img class="doc_profile_tabs_image"   v-bind:src="BASE_URL+'/img/V90.jpg'" >
        </div>
        <div class="doc_profile_tabs_details flex_space">
          <p class="doc_profile_tabs_details_name">Dr. Parthddathi Dutta Ray <span>Profile is claimbed</span></p>
          <p class="doc_profile_tabs_details_deg">B.Sc, MBBS, DDVL, MD-Dermatology</p>
          <p class="doc_profile_tabs_details_post"><i class="fas fa-thumbs-up"></i>Dermatology, Trichologist, Cosmetologist, 14 Years Experience</p>
          <div class="fliter_main_details_all dis">
              <div class="fliter_main_details_icons"></div>
              <div class="fliter_main_details_text">
              <p class="fliter_main_details_nor">Medical Registration Verified</p>
              </div>
          </div>
          <div class="fliter_main_details_all dis">
              <div class="fliter_main_details_icons"></div>
              <div class="fliter_main_details_text">
              <p class="fliter_main_details_rating">86% <span>(43 votes)</span></p>
              
              </div>
          </div>
          <p class="profile_sidebar_text_details doc_profile_tabs_see">Intern at grow n excel. Intern at grow n excel Intern at grow n excel. Syed Rafia Islam Lopa Syed Rafia Islam Lopa <span>See More</span></p>
          <!-- Start -->
          <div class="doc_profile_tabs_button"  ></div>
          <!-- Non Start -->
          <div class="justify-content-center" v-if="user_id!=0">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">Make Appointment</button>         
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">New Appointment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label text-center ">Date</label>
                      <input type="date" class="form-control" v-model="date" v-on:change="showByDate"  >
                    </div>
                    <div class="form-group text-center" v-for="(item,index) in userAppointments" :key="index" >
                      <hr>
                      <p>Serial: {{index+1}}</p><p>{{item.slotDetails}}   :  
                        <a v-if="item.isBooked==false" role="button" class="btn btn-success  text-white" @click="makeAppointment(index+1,item)" >Click to Book</a>
                        <a v-if="item.isBooked==true" role="button"  v-bind:class="(item.isPending==true)? 'btn btn-secondary text-white': 'btn btn-danger text-white'">{{(item.isPending==true)? 'Pending Request': 'Booked'}}</a>
                      </p>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                  </div>
                </div>
              </div>
            </div>
          <!-- End -->
        </div>
          </div>
    </div>  
  </div>
</template>

<script>

export default {

	data(){
		return{

            date:(new Date().toISOString().slice(0,10)),
		}
	},
    
   methods: {

    async  makeAppointment(No,item){
      console.log("i am here");
      let AuthData = {
        'doctor_id':this.doctor.id,
        'user_id':this.user_id,
        'serial':No,
        'slotDetails':item.slotDetails,
        'date':this.date,
      }
      console.log(AuthData);
      const info = await this.callApi('post', '/makeAppointment',AuthData)
			if(info.status===200){
        this.$store.dispatch('user/Msg_UPDATED',info.data.message);

        this.$store.dispatch('user/AppointmentSerial_UPDATED',(No-1));
      }
      else{
        let msg = "Error : "+info
        console.log(msg)
      }
      
    },
  
    async showByDate(){

      
	  		let AuthData = {
      	    	'doctor_id':this.doctor.id,
      	    	'date':this.date,
      		}
	  		const res = await this.callApi('post', '/showByDate',AuthData)
	  		if(res.status===200){

	  			this.$store.dispatch('user/Appointment_UPDATED',res.data.appointment);

	  		}
	  		else{
	  			console.log("Error in retriveing Appointment Info");
	  		}
    },

  },
	
}
</script>


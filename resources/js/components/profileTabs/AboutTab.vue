<template>
        <!-- components -->
        <div class="profile_tabs_components">
            <!-- items -->
        <div class="doc_profile_tabs dis">
            <div class="doc_profile_tabs_img">
            <img class="doc_profile_tabs_image" src="http://docappoint.test:8080/img/V90.jpg" alt="" title="">
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
                    

          <div class="doc_profile_tabs_button">
            <button type="button" class="btn b_bg" data-toggle="modal" data-target="#exampleModal" >Make Appointment</button>
            
              <div class="modal " id="exampleModal" ref="vuemodal" tabindex="-1" role="dialog" data-backdrop="" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">New Appointment</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form  v-on:submit.prevent="makeAppointment">
                    <div class="modal-body">
                      
                         <!-- @csrf //  -->
                        <div class="form-group">
                          <label for="recipient-name" class="col-form-label text-center ">Date</label>
                          <input type="date" v-model="date" class="form-control" name='date'>
                          <!-- <input type="hidden" class="form-control"  v-model="doctor.id" >

                          <input type="hidden" class="form-control"  v-model="user_id" > -->
                        </div>
                      
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit " class="btn btn-primary">Confirm</button>
                    </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            <!-- End -->
            </div>
        </div>
           
        </div>
        <!-- components -->
</template>

<script>

export default {

	data(){
		return{

            date:'',
		}
	},
    
   methods: {

    async  makeAppointment(){
      console.log("i am here");
      let AuthData = {
        'doctor_id':this.doctor.id,
        'user_id':this.user_id,
        'date':this.date,
      }
      console.log(AuthData);
      const info = await this.callApi('post', '/makeAppointment',AuthData)
			if(info.status===200){
        this.$store.dispatch('user/Msg_UPDATED',info.data.message);
      }
      else{
        let msg = "Error : "+info
      }
      $(this.$refs.vuemodal).modal('hide') 
    }
  },
	
}
</script>


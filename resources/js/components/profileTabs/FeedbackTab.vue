<template>
<!-- components -->
    <div class="profile_tabs_components">

        <!-- items -->
      <div class="doc_feedback_tabs">
        <div  v-if="user_id!=0">
        <p class="feed">Give Feedback </p>
        <p class="comment">These are patient's opinions and do not necessarlly reflect the doctor's medical capabilities.</p>

        <div class="doc_feedback_tabs_filter b_color">
          <div class="dis doc_feedback_tabs_filter_top">
       
            
              <Input v-model="review"  type="textarea" :rows="4" placeholder="Enter something..." />
            
          
            <div class="flex_space"></div>
            <div class="doc_feedback_tabs_filter_top_select">
             
            </div>
          </div>

         <Button type="primary" class="m-1" @click="makeReview" >Submit</Button>
        
         	 
         	
        </div>
       
        </div>

        <hr>
       
        <div class="dis doc_feedback_tabs_filter_found">
          <p class="doc_feedback_tabs_filter_found_results">{{reviewData.length}} Feedback</p>

          <div class="flex_space"></div>

          <div class="sorts doc_feedback_tabs_filter_top_select">
            
          </div>
        </div>
         <div v-for="(item,index) in reviewData " :key="index" >
        <div class="dis doc_verified b_color">
          <div class="doc_verified_pic">
            <img class="doc_verified_image" :src="BASE_URL+item.users.image" alt="" title="">
          </div>

          <div class="flex_space">
            <p class="ver_p">Verified Patient</p>
            <p class="treatment"></p>

            <p class="recommend">{{item.users.name}}</p>

            <p class="doc_verified_text">{{item.details}}</p>
            <p class="doc_verified_date">{{item.date}}</p>
          </div>
          <hr>
          </div>
        </div>
      </div>
        <!-- items -->
    </div>
      <!-- components -->
</template>
<script>
  export default {
    data(){
      return{
        review:'',
        date:(new Date().toISOString().slice(0,10)),
        reviewData:'',
      
      }      
    },
    methods:{

     async makeReview(){
      console.log("i am here");
      if(this.review==''){
        this.e('Please fill the review field');
        return
      }
      let AuthData = {
        'doctor_id':this.doctor.id,
        'user_id':this.user_id,
        'details':this.review,
        'date':this.date,
      }
      console.log(AuthData);

      const info = await this.callApi('post','/makeReviewByUser',AuthData)
			if(info.status===201){
          this.review='';
          this.s('Review Successfully given ');
          this.fetchReview();
       
      }
      else{
        this.swr();
      }
      },

      async fetchReview(){

        const info = await this.callApi('get', `/getReviewById/${this.doctor.id}`)
			if(info.status===200){
      
          this.reviewData=info.data;
       
      }
      else{
        this.swr();
      
      }

      }

    },
     created(){
       this.fetchReview();
      

    }
    
  }
</script>

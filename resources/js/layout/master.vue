<template>
	<div >
	    	<!-- Success Msg -->
		<div class="row justify-content-center" v-if="SuccessMsg" >     
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        			{{ SuccessMsg }}
        		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            		<span aria-hidden="true">&times;</span>
          		</button>
        	</div>
      </div>
      	<div class="profile_tabs box_shadow">

	
		<NavHead/>
		<!-- menu -->
		<router-view/>	
	</div>
	</div>
	
</template>

<script>
import NavHead from '../components/ProfileMenu.vue';
export default {
	props: ['gid'],
	// props: ['user'],:user="{{Auth::user()}}"
	components: {
    NavHead,
  },
	data(){
		return{

		

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
	created () {
        // Do something useful with the data in the template
		console.log(this.gid)
		this.$store.dispatch('doctor/updateDoctor',this.gid.doctor);
		console.log(this.doctor)
		this.$store.dispatch('user/Userid_UPDATED',this.gid.user_id);
		
		console.log(this.user_id)
		
       
    }
	
}
</script>



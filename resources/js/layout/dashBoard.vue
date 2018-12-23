<template>
	<div>
		<h1>I am here Mr. Component</h1>
		<AboutTab v-if="(LinkFlagTab==1)"/>	
		<InfoTab v-if="(LinkFlagTab==2)"/>	
	</div>
</template>

<script>
import dashBoardMain from '../components/dashBoard/dashBoardMain.vue';
import dashBoardProfile from '../components/dashBoard/dashBoardProfile.vue';
export default {
//	props: ['gid'],
	components: {
    dashBoardMain,
    dashBoardProfile,
  },
	data(){
		return{

		}
	},

	computed: {

	},
	// created () {
    //     // Do something useful with the data in the template
	// 	console.log(this.gid)
	// 	this.$store.dispatch('doctor/updateDoctor',this.gid.doctor);
	// 	console.log(this.doctor)
	// 	this.$store.dispatch('user/Userid_UPDATED',this.gid.user_id);
		
	// 	console.log(this.user_id)
		
       
    // }
	
	  methods: {
		
	},
	
}
</script>



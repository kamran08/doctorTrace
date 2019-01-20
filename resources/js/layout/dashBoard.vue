<template>
	<div>
		<dashBoardMenu/>	
		<dashBoardProfile v-if="(LinkFlagTab==1)"/>	
		<dashBoardMain v-if="(LinkFlagTab==2)"/>	
		<dashBoardShedule v-if="(LinkFlagTab==3)"/>	
	</div>
</template>

<script>
import dashBoardMain from '../components/dashBoard/dashBoardMain.vue';
import dashBoardProfile from '../components/dashBoard/dashBoardProfile.vue';
import dashBoardMenu from '../components/dashBoard/dashBoardMenu.vue';
import dashBoardShedule from '../components/dashBoard/dashBoardShedule.vue';
export default {
	props: ['gid'],
	components: {
    dashBoardMain,
    dashBoardProfile,
    dashBoardMenu,
    dashBoardShedule,
  },
	data(){
		return{

		}
	},

	computed: {

	},
	created () {
        // Do something useful with the data in the template
		console.log(this.gid)
		this.$store.dispatch('doctor/updateDoctor',this.gid.doctor);
		console.log(this.doctor)
		this.$store.dispatch('doctor/updateAppointment',this.gid.appointmentInfo);
		console.log(this.appointmentInfo)
    },
	
	  methods: {
		
	},
	
}
</script>



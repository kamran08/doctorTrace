<template>
    <div>
        <div class="left side-menu">
  			<div class="sidebar-inner slimscrollleft">
      			<!--- Sidemenu -->
      			<div id="sidebar-menu">
          			<ul>
            			<li class="menu-title">Navigation</li>
              			<li class="has_sub">
                  			<a @click="changeTab(1)" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span>Dashboard </span> </a>
              			</li>
              			<li class="has_sub">
                  			<a class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span>Finished Appointment </span> </a>
              			</li>
						<li class="menu-title">Extra</li>
              			<li class="has_sub">
                  			<a @click="changeTab(2)" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span> Profile </span> </a>
              			</li>
          			</ul>
      			</div>
      			<!-- Sidebar -->
      			<div class="clearfix"></div>

  				</div>
  				<!-- Sidebar -left -->

		</div>
    </div>
</template>

<script>
export default {
    data(){
        return{

        }
    },

	  methods: {
		changeTab(id){

  			if(id==1){
                this.$store.dispatch('doctor/updateTab',1);
  			}
  			else if(id==2){
    			 this.$store.dispatch('doctor/updateTab',2);
  			}
		}
	},
	
}
</script>

<style>

</style>

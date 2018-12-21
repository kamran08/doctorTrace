<template>
  <div>



  <div class="profile_tabs_menu">
  <ul class="profile_tabs_menu_ul">
      <li  v-bind:class =" (LinkFlag==1)? 'profile_tabs_menu_ul_active': '' " 
    @click="changeTab(1)" >About
      </li>
      <li v-bind:class =" (LinkFlag==2)? 'profile_tabs_menu_ul_active': '' "  @click="changeTab(2)" >Info
      </li>
      <li  v-bind:class =" (LinkFlag==3)? 'profile_tabs_menu_ul_active': '' " @click="changeTab(3)"  >Feedback
      </li>
  </ul>
  </div>
</div>

</template>
<script>
export default {

	data(){
		return{

      LinkFlag: 1,

		}
	},


	computed: {
    
},

  methods: {
changeTab(id){

  if(id==1){

    this.LinkFlag = 1;

    this.$router.push({ name:'About'});
  }
  else if(id==2){
    this.LinkFlag=2;
        this.$router.push({ name:'Info'});
    
  }
  else if(id==3){
    this.LinkFlag=3;
       this.$router.push({ name:'Feedback'});
    
  }

}

  

},
	
}
</script>


<template>
    <div class="home">
        <!-- search section -->
        <div class="home_search box_shadow">
            <div class="container-fluid">
                <form class="row align-items-center justify-content-center" v-on:submit.prevent="changeAndSearch">
                    <!-- <form > -->
                        <div class="col-12 col-sm-auto col-md-auto home_search_selet">
                            <select class="form-control b_color home_ser_input" v-model="locationKey" placeholder="Location" required>
                                <option disabled selected>Location</option>
                                <option v-for="(item,index) in locationInfo" :key="index">{{item.location}}</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-4 col-md-4 home_search_input">
                            <input type="text" class="form-control b_color home_ser_input" v-model="mainKey" placeholder="Key" required>
                        </div>
                        <div class="col-12 col-sm-auto col-md-auto home_search_button">
                            <button class="home_search_button_btn b_bg btn" type="submit" >SEARCH</button>
                              <button class="home_search_button_btn b_bg btn" @click="showAllDoctor" >All Doctors </button>
                        </div>
                         </form>
                        <div class="col-12 col-sm-auto col-md-auto home_search_button">
                          
                        </div> 
                    <!-- </form> -->
               
            </div>
        </div>
        <!--  section -->
        <ServiceTab v-if="(LinkFlag==1)"/>	
		<SearchTab v-if="(LinkFlag==2)"/>	
    </div>
</template>

<script>
import ServiceTab from '../components/homeTabs/serviceTab';
import SearchTab from '../components/homeTabs/searchTab';
export default {
    components: {
    ServiceTab,
    SearchTab,
    },
    data(){
        return{
            LinkFlag:1,
            locationKey:'Location',
            mainKey:null,
         

        }
    },

	methods: {

	async changeAndSearch(){

            console.log(this.locationKey);
            console.log(this.mainKey);

            let AuthData = {
                'locationKey':this.locationKey,
                'mainKey':this.mainKey,
              }
            const res = await this.callApi('post', '/searchByKey',AuthData);
		    if(res.status===200){

			    this.$store.dispatch('search/updateResult',res.data.searchResult);
			  
            }
            else{
                console.log("Error "+res.status+" . Please fix this!!");
            }
  			if(this.LinkFlag==1)
                this.LinkFlag=2;
            
	
		},
	async showAllDoctor(){

           
            const res = await this.callApi('get', '/showAllDoctor');
		    if(res.status===200){

			    this.$store.dispatch('search/updateResult',res.data);
			    this.locationKey = "Sylhet";
                this.mainKey ='All doctors';
            }
            else{
                this.swr();
            }
  			if(this.LinkFlag==1)
                this.LinkFlag=2;
            
	
		}
    },
	async created() {

        const res = await this.callApi('get', '/indexSearch');
		if(res.status===200){
			this.$store.dispatch('search/updateSpecialties',res.data.specialities);
			this.$store.dispatch('search/updateSLocation',res.data.location);
        }
        else{
           this.e("Something Went Wrong in Created")
        }

       
	},
	
}
</script>



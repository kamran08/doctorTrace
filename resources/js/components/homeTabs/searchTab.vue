<template>
    <div class="fliter">
        <div class="container">
            <!-- fliter_top -->
            <div class="fliter_top dis">
                <!-- items -->
                <div class="fliter_top_auto">
                    <div class="dropdown">

                        
                            <!-- <Select v-model="filterProduct" placeholder="Specialties" style="width:200px" filterable clearable >
                                <Option v-for="(item,i) in filterSpecialties" :value="item" :key="i" >{{ item }}</Option>
                            </Select> -->
                        
              
                        <!-- <button class="btn fliter_button dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Specialties 
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item" v-for="(item,index) in filterSpecialties" :key="index" >{{item}}</button>
                            
                        </div> -->
                        <Select  v-model="filterbySpecialties" placeholder="Select Specialties" filterable clearable >
                            <Option v-for="(item,i) in filterSpecialties" :value="item" :key="i" >{{ item }}</Option>
                        </Select>
                    </div>
                </div>
                <!-- items -->

                <!-- items -->
                <div class="fliter_top_auto">
                    <div class="dropdown">
                          <Select  v-model="filterbyLocation" placeholder="Select Location" filterable clearable >
                            <Option v-for="(item,i) in filterLocation" :value="item" :key="i" >{{ item }}</Option>
                        </Select>
                          <!-- <button class="btn fliter_button dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Location
                        </button>
                         <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item" v-for="(item,index) in filterLocation" :key="index" >{{item}}</button>
                            
                        </div> -->
                    </div>
                </div>
                  <!-- items -->    
                  <!-- items -->
                <div class="fliter_top_auto">
                    <div class="dropdown">
                        <Select  v-model="filterbyChamberLocation" placeholder="Select Chamber Location" filterable clearable >
                            <Option v-for="(item,i) in filterChamberLocation" :value="item" :key="i" >{{ item }}</Option>
                        </Select>
                        <!-- <button class="btn fliter_button" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Chamber Location
                        </button>
                         <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item" v-for="(item,index) in filterChamberLocation" :key="index" >{{item}}</button>
                             
                        </div>-->
                    </div>
                </div>
                 
            </div>
            <!-- fliter_top -->

            <!-- found -->
            <div class="fliter_found">
                <p class="fliter_found_text">{{filterResultinfo.length}} matches found for: <strong>{{this.$parent.mainKey}} in {{this.$parent.locationKey}}</strong></p>
            </div>
            <!-- found -->

            <!-- filter main -->
            <div class="fliter_main dis box_shadow" v-if="filterResultinfo.length" v-for="(item,index) in filterResultinfo" :key="index">
                <div class="fliter_main_img dis">
                    <img class="fliter_main_img_image" :src="BASE_URL+item.image" title="" alt="">
                    <div class="flex_space"></div>
                    <p class="SPONSORED">SPONSORED</p>
                </div>

                <div class="fliter_main_pro">
                    <a class="fliter_main_pro_title" v-bind:href="BASE_URL+'/profile/'+item.id"   >{{item.name}}</a>
                    <p class="fliter_main_details_text">{{item.specialties}}</p>
                </div>
        
                



                <div class="fliter_main_details">
                    
                    
                    <div class="fliter_main_details_all dis">
                      <div class="fliter_main_details_icons"></div>
                      <div class="fliter_main_details_text">
                        <p class="fliter_main_details_nor"><span>{{(item.review)? item.review.length: 0 }} Feedback for this Doctor</span></p>
                      </div>
                    </div>
                    <div class="fliter_main_details_all dis">
                      <div class="fliter_main_details_icons"></div>
                      <div class="fliter_main_details_text">
                        <p class="fliter_main_details_nor"><span>{{item.address}}, {{item.location}}</span></p>
                      </div>
                    </div>
                    <div class="fliter_main_details_all dis">
                      <div class="fliter_main_details_icons"></div>
                      <div class="fliter_main_details_text">
                        <p class="fliter_main_details_nor"><span>৳ 500</span></p>
                      </div>
                    </div>
                    <div class="fliter_main_details_all dis">
                        <div class="fliter_main_details_icons"></div>
                        <div class="fliter_main_details_text">
                            <p class="fliter_main_details_days"><span>TUE-SAT</span></p>
                            <p class="fliter_main_details_date"><span>AM - 1:30 PM, 5:00PM - 7:00PM</span></p>
                        </div>
                    </div>
                    <div class="fliter_main_details_button">
                        <button type="button" class="btn b_bg"  ><a v-bind:href="BASE_URL+'/profile/'+item.id" class="text-white" >Visit Profile for Appointment</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
          filterProduct:'',
          filterbySpecialties:'',
          filterbyLocation:'',
          filterbyChamberLocation:'',
        }
    },

    computed:{
        filterSpecialties(){
            var output = [];
            var keys   = [];

            this.resultInfo.forEach(function (data) {
                var key = data.specialties;

                if (keys.indexOf(key) === -1) {
                    keys.push(key);
                   // output.push(post);
                }
            });
            console.log(keys)
            return keys;
            },
        filterLocation(){
            var output = [];
            var keys   = [];

            this.resultInfo.forEach(function (data) {
                var key = data.location;

                if (keys.indexOf(key) === -1) {
                    keys.push(key);
                   // output.push(post);
                }
            });
            console.log(keys)
            return keys;
            },
        filterChamberLocation(){
            var output = [];
            var keys   = [];

            this.resultInfo.forEach(function (data) {
                var key = data.address;

                if (keys.indexOf(key) === -1) {
                    keys.push(key);
                   // output.push(post);
                }
            });
            console.log(keys)
            return keys;
            },

        filterResultinfo(){
             if (this.filterbySpecialties) {
                return this.resultInfo.filter((data) => {
                    return (data.specialties.toUpperCase().match(this.filterbySpecialties.toUpperCase()))
                        
                });
             }
             else{
                return this.resultInfo
             }
        }
        
    },

}
</script>

<style>

</style>

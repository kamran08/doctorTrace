<template>
    <div class="fliter">
        <div class="container">
            <!-- fliter_top -->
            <div class="fliter_top dis">
                <!-- items -->
                <div class="fliter_top_auto">
                    <div class="dropdown">
                        <button class="btn fliter_button dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Availability
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item" type="button">Action</button>
                            <button class="dropdown-item" type="button">Another action</button>
                            <button class="dropdown-item" type="button">Something else here</button>
                        </div>
                    </div>
                </div>
                <!-- items -->

                <!-- items -->
                <div class="fliter_top_auto">
                    <div class="dropdown">
                        <button class="btn fliter_button" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            In Hospital
                        </button>
                    </div>
                </div>
                  <!-- items -->    
                  <!-- items -->
                <div class="fliter_top_auto">
                    <div class="dropdown">
                        <button class="btn fliter_button" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Online Booking
                        </button>
                    </div>
                </div>
                  <!-- items -->    
                  <!-- items -->
                <div class="fliter_top_auto all_fliter flex_space">
                    <div class="dropdown">
                        <button class="btn fliter_button dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            All Filters
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item" type="button">Action</button>
                            <button class="dropdown-item" type="button">Another action</button>
                            <button class="dropdown-item" type="button">Something else here</button>
                        </div>
                    </div>
                </div>
                  <!-- items -->    
                  <!-- items -->
                <div class="fliter_top_auto sorts">
                    <p class="by">Sort By</p>
                    <div class="dropdown">
                        <button class="btn fliter_button dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Relevance
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item" type="button">Action</button>
                            <button class="dropdown-item" type="button">Another action</button>
                            <button class="dropdown-item" type="button">Something else here</button>
                        </div>
                    </div>
                </div>
                <!-- items -->
            </div>
            <!-- fliter_top -->

            <!-- found -->
            <div class="fliter_found">
                <p class="fliter_found_text">{{resultInfo.length}} matches found for: <strong>Dermatogist in Bangalore</strong> <span><button type="button" class="fliter_found_button btn b_bg">Show doctors near me</button></span></p>
            </div>
            <!-- found -->

            <!-- filter main -->
            <div class="fliter_main dis box_shadow" v-if="resultInfo.length" v-for="(item,index) in resultInfo" :key="index">
                <div class="fliter_main_img dis">
                    <img class="fliter_main_img_image" src="img/Rectangle40.png" title="" alt="">
                    <div class="flex_space"></div>
                    <p class="SPONSORED">SPONSORED</p>
                </div>

                <div class="fliter_main_pro">
                    <p class="fliter_main_pro_title">{{item.name}}</p>
                    <p class="Dwematologist">1 Dwematologist</p>
                    <ul class="fliter_main_pro_image">
                        <li><img src="img/Rectangle40.png" title="" alt=""></li>
                        <li><img src="img/Rectangle40.png" title="" alt=""></li>
                        <li><img src="img/Rectangle40.png" title="" alt=""></li>
                        <li><img src="img/Rectangle40.png" title="" alt=""></li>
                    </ul>
                    <span class="fliter_main_pro_tabs">Acne / Pimples T...</span>
                    <span class="fliter_main_pro_tabs">Chemical peel</span>
                </div>
        
                <div class="fliter_main_skin flex_space">
                    <span class="fliter_main_pro_tabs">Chemical peel</span>
                    <p class="View">View all 30 services</p>
                </div>



                <div class="fliter_main_details">
                    
                    <div class="fliter_main_details_all dis">
                      <div class="fliter_main_details_icons"></div>
                      <div class="fliter_main_details_text">
                        <p class="fliter_main_details_rating">86% <span>(43 votes)</span></p>
                      </div>
                    </div>
                    <div class="fliter_main_details_all dis">
                      <div class="fliter_main_details_icons"></div>
                      <div class="fliter_main_details_text">
                        <p class="fliter_main_details_nor"><span>19 Feedback for 1 Doctor</span></p>
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
                        <p class="fliter_main_details_nor"><span>$ 500</span></p>
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
                        <button type="button" class="btn b_bg">Call Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style>

</style>

<template>
  <!-- components -->
    <div class="profile_tabs_components">

        <!-- items -->
      <div class="doc_info_tabs">
        <p class="hospital_location feed">{{doctor.address}}, {{doctor.location}}</p>
        <div class="hospital_details row mt-2">
          <div class="col-md-4 details_left">
            <div class="hospital_name">
              <p class="info">Jalalabad public medical hospital</p>
            </div>
            <p class="hospital_address">
              5, 6, Sadath Court, Magrath Road, Dhaka
            </p>
            <p class="hospital_geo_location mt-1">
              <a href="#">Get Directions</a>
            </p>
          </div>
          <div class="col-md-4 details_middle">
            <div class="timings_list">
              <div class="timings_days">
                Mon - Sat
              </div>
              <div class="timings_time">
                2:30 PM - 6:30 PM
              </div>
            </div>
          </div>
          <div class="col-md-4 details_right">
            <div class="fees_details">
              <p>500 Taka</p>
              <div class="payment_option">Payment after finishing</div>
            </div>
          </div>
        </div>
      </div>
        <!-- items -->
    </div>
      <!-- components -->
</template
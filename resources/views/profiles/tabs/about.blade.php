

<div class="col-12 col-sm-9 col-md-9">
    @if (Session::has("info"))

        <div class="row justify-content-center">     
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ Session::get('info') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>

    @endif
  <div class="profile_tabs box_shadow">

      <!-- menu -->
    <div class="profile_tabs_menu">
      <ul class="profile_tabs_menu_ul">
        <li >About</li>
        <li class="profile_tabs_menu_ul_active">Info</li>
        <li>Feedback(1019)</li>
        <li>Consult Q & A</li>
        <li>Healtfeed</li>
      </ul>
    </div>
      <!-- menu -->

      <!-- components -->
    <div class="profile_tabs_components">
        <!-- items -->
      <div class="doc_profile_tabs dis">
        <div class="doc_profile_tabs_img">
          <img class="doc_profile_tabs_image" src="img/V90.jpg" alt="" title="">
        </div>

        <div class="doc_profile_tabs_details flex_space">
        <p class="doc_profile_tabs_details_name">{{$doctor->name}} <span>Profile is claimbed</span></p>

          <p class="doc_profile_tabs_details_deg">B.Sc, MBBS, DDVL, MD-Dermatology</p>

          <p class="doc_profile_tabs_details_post"><i class="fas fa-thumbs-up"></i>Dermatology, Trichologist, Cosmetologist, 14 Years Experience</p>

          <div class="fliter_main_details_all dis">
            <div class="fliter_main_details_icons"></div>
            <div class="fliter_main_details_text">
              <p class="fliter_main_details_nor">Medical Registration Verified</p>
            </div>
          </div>

          <div class="fliter_main_details_all dis">
            <div class="fliter_main_details_icons"></div>
            <div class="fliter_main_details_text">
              <p class="fliter_main_details_rating">86% <span>(43 votes)</span></p>
            </div>
          </div>

          <p class="profile_sidebar_text_details doc_profile_tabs_see">Intern at grow n excel. Intern at grow n excel Intern at grow n excel. Syed Rafia Islam Lopa Syed Rafia Islam Lopa <span>See More</span></p>
          
          {{-- Appointment Modal --}}

          <div class="doc_profile_tabs_button">
            <button type="button" class="btn b_bg" data-toggle="modal" data-target="#exampleModal" >Take Appointment</button>
              {{-- Modal  --}}
              <div class="modal  fade show" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">New Appointment</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form method="POST" action="{{ route('makeAppointment') }}">
                    <div class="modal-body">
                     
                        @csrf
                        <div class="form-group">
                          <label for="recipient-name" class="col-form-label text-center ">Date</label>
                          <input type="date" class="form-control" name='date' id="recipient-name">
                          <input type="hidden" class="form-control" name='doctor_id' value="{{$doctor->id}}" id="recipient-name">
                          <input type="hidden" class="form-control" name='user_id' value="{{Auth::user()->id}}" id="recipient-name">
                        </div>
                      
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit " class="btn btn-primary">Confirm</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

          </div>
        </div>
      </div>
        <!-- items -->
    </div>
      <!-- components -->
  </div>
</div>
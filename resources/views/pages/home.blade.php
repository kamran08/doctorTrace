@extends('main')

@section('container')
<div class="home">
  <!-- search section -->
  <div class="home_search box_shadow">
    <div class="container-fluid">
      <div class="row align-items-center justify-content-center">
        <div class="col-12 col-sm-auto col-md-auto home_search_selet">
          <select class="form-control b_color home_ser_input"   id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
          </select>
        </div>
        <div class="col-12 col-sm-4 col-md-4 home_search_input">
          <input type="text" class="form-control b_color home_ser_input" placeholder="Name">
        </div>
        <div class="col-12 col-sm-auto col-md-auto home_search_button">
          <button class="home_search_button_btn b_bg" type="button" class="btn">SEARCH</button>
        </div>
      </div>
    </div>
  </div>
  <!-- search section -->
  
  <!-- service section -->
  <div class="service_section">
    <div class="container">
      <!-- items -->
      <div class="service_section_main box_shadow">
        <div class="row">
          <div class="col-12 col-sm-4 col-md-4 service_section_pic">
            <img class="service_section_pic_image" src="img/Cryptoe.jpg" alt="" title="">
          </div>

          <div class="col-12 col-sm-8 col-md-8 service_section_text">
            <h2 class="title">Doctor Apponitment</h2>
            <p class="service_section_text_block">
            Lorem Ipsum is simply dummy text of the
            printing and typesetting industry. Lorem
            printing and typesetting industry. Lorem
            printing and typesetting industry. Lorem
            Ipsum has been the industry's standard
            dummy text ever since the 1500s, when an
            unknown printer took a galley
            </p>

            <div class="service_section_button">
              <button type="button" class="btn b_bg">See More</button>
            </div>
          </div>
        </div>
      </div>
      <!-- items -->
      
      <!-- items -->
      <div class="service_section_main box_shadow">
        <div class="row">
          <div class="col-12 col-sm-8 col-md-8 service_section_text">
            <h2 class="title">Doctor Apponitment</h2>
            <p class="service_section_text_block">
            Lorem Ipsum is simply dummy text of the
            printing and typesetting industry. Lorem
            printing and typesetting industry. Lorem
            printing and typesetting industry. Lorem
            Ipsum has been the industry's standard
            dummy text ever since the 1500s, when an
            unknown printer took a galley
            </p>

            <div class="service_section_button">
              <button type="button" class="btn b_bg">See More</button>
            </div>
          </div>
        
        <div class="col-12 col-sm-4 col-md-4 service_section_pic">
          <img class="service_section_pic_image" src="img/Cryptoe.jpg" alt="" title="">
        </div>
        </div>
      </div>
      <!-- items -->
    </div>
  </div>
  <!-- service section -->
</div> {{-- home finished --}}
@endsection
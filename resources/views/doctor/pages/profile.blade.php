@extends('doctor.main')

@section('container')
<div class="content-page">
  <!-- Start content -->
  <div class="content">
      <div class="container">

          <div class="row">
<div class="col-xs-12">
  <div class="page-title-box">
                      <h4 class="page-title">Profile </h4>
                      <div class="clearfix"></div>
                  </div>
</div>
</div>
          <!-- end row -->

          <div class="row">
              <div class="col-sm-12">
                  <div class="card-box">
                      <div class="row">
                          <div class="col-lg-3 col-md-5 col-sm-12">
                              <div class="text-center card-box">
                                  <div class="member-card">
                                      <div class="thumb-xl member-thumb m-b-10 center-block">
                                            <div class="img__wrap"><a href="#" >
                                                <img src="doctor/img/12.jpg" class="img-circle img-thumbnail img__wrap" alt="profile-image">
                                                    <div class="img__description_layer">
                                                        <p class="img__description">update</p>
                                                    </div>
                                            </a></div>
                                          <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                                      </div>

                                      <div class="">
                                          <h4 class="m-b-5">{{Auth::guard('doctor')->user()->name}}</h4>
                                          <p class="text-muted">@B.Sc, MBBS, DDVL, MD-Dermatology</p>
                                      </div>

                                      <p class="text-muted font-13 m-t-20">
                                          Hi I'm {{Auth::guard('doctor')->user()->name}},has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                                      </p>

                                      <hr/>

                                      <div class="text-left">
                                          <p class="text-muted font-13"><strong>Full Name :</strong> <span class="m-l-15">{{Auth::guard('doctor')->user()->name}}</span></p>

                                          <p class="text-muted font-13"><strong>Mobile :</strong><span class="m-l-15">{{Auth::guard('doctor')->user()->phone}}</span></p>

                                          <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15">{{Auth::guard('doctor')->user()->email}}</span></p>

                                          <p class="text-muted font-13"><strong>Location :</strong> <span class="m-l-15">{{Auth::guard('doctor')->user()->address}},{{Auth::guard('doctor')->user()->chamber_location}}</span></p>
                                      </div>

                                      <ul class="social-links list-inline m-t-30">
                                          <li>
                                              <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                          </li>
                                          <li>
                                              <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                          </li>
                                          <li>
                                              <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                          </li>
                                      </ul>

                                  </div>

                              </div> <!-- end card-box -->

                          </div> <!-- end col -->

                          <div class="col-lg-9 col-md-7">
                              <div class="row">
                                  <div class="col-md-12 col-sm-12">
                                      <h4>Experience</h4>

                                      <div class=" p-t-10">
                                              <h5 class="text-custom m-b-5">Lead designer / Developer</h5>
                                              <p class="m-b-0">websitename.com</p>
                                              <p><b>2010-2015</b></p>

                                              <p class="text-muted font-13 m-b-0">Lorem Ipsum is simply dummy text
                                                  of the printing and typesetting industry. Lorem Ipsum has
                                                  been the industry's standard dummy text ever since the
                                                  1500s, when an unknown printer took a galley of type and
                                                  scrambled it to make a type specimen book.
                                              </p>
                                      </div>

                                      <hr/>

                                      <div class="">
                                              <h5 class="text-custom m-b-5">Senior Graphic Designer</h5>
                                              <p class="m-b-0">coderthemes.com</p>
                                              <p><b>2007-2009</b></p>

                                              <p class="text-muted font-13">Lorem Ipsum is simply dummy text
                                                  of the printing and typesetting industry. Lorem Ipsum has
                                                  been the industry's standard dummy text ever since the
                                                  1500s, when an unknown printer took a galley of type and
                                                  scrambled it to make a type specimen book.
                                              </p>
                                      </div>
                                  </div> <!-- end col -->
                              </div> <!-- end row -->
                          </div>
                          
                          
                          <!-- end col -->

                      </div>
                  </div>
              </div>
          </div>
          <!-- End row -->



      </div> <!-- container -->

  </div> <!-- content -->

</div>
@endsection
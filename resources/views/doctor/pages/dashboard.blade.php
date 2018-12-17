@extends('doctor.main')

@section('container')
<div class="content-page">
  <!-- Start content -->
  <div class="content">
      <div class="container">


          <div class="row">
<div class="col-xs-12">
  <div class="page-title-box">
                      <h4 class="page-title">Dashboard</h4>
                      <div class="clearfix"></div>
                  </div>
</div>
</div>
          <!-- end row -->


          <div class="row">

              <div class="col-lg-3 col-md-6">
                  <div class="card-box widget-box-two widget-two-info">
                      <i class="mdi mdi-chart-areaspline widget-two-icon"></i>
                      <div class="wigdet-two-content text-white">
                          <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Statistics</p>
                          <h2 class="text-white"><span data-plugin="counterup">34578</span> <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                          <p class="m-0"><b>Last:</b> 30.4k</p>
                      </div>
                  </div>
              </div><!-- end col -->

              <div class="col-lg-3 col-md-6">
                  <div class="card-box widget-box-two widget-two-primary">
                      <i class="mdi mdi-layers widget-two-icon"></i>
                      <div class="wigdet-two-content text-white">
                          <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">User This Month</p>
                          <h2 class="text-white"><span data-plugin="counterup">52410 </span> <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                          <p class="m-0"><b>Last:</b> 40.33k</p>
                      </div>
                  </div>
              </div><!-- end col -->

              <div class="col-lg-3 col-md-6">
                  <div class="card-box widget-box-two widget-two-danger">
                      <i class="mdi mdi-access-point-network widget-two-icon"></i>
                      <div class="wigdet-two-content text-white">
                          <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Statistics</p>
                          <h2 class="text-white"><span data-plugin="counterup">6352</span> <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                          <p class="m-0"><b>Last:</b> 30.4k</p>
                      </div>
                  </div>
              </div><!-- end col -->

              <div class="col-lg-3 col-md-6">
                  <div class="card-box widget-box-two widget-two-success">
                      <i class="mdi mdi-account-convert widget-two-icon"></i>
                      <div class="wigdet-two-content text-white">
                          <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User Today">User Today</p>
                          <h2 class="text-white"><span data-plugin="counterup">895 </span> <small><i class="mdi mdi-arrow-down text-danger"></i></small></h2>
                          <p class="m-0"><b>Last:</b> 1250</p>
                      </div>
                  </div>
              </div><!-- end col -->

          </div>
          <!-- end row -->


          <div class="row">

              <div class="col-md-12">
                  <div class="panel panel-color panel-info">
                      <div class="panel-heading">
                          <h3 class="panel-title">Recent Users</h3>
                      </div>
                      <div class="panel-body">
                          <div class="table-responsive">
                              <table class="table table table-hover m-0">
                                  <thead>
                                      <tr>
                                          <th></th>
                                          <th>User Name</th>
                                          <th>Phone</th>
                                          <th>Location</th>
                                          <th>Date</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th>
                                          <span class="avatar-sm-box bg-primary">C</span>
                                      </th>
                                      <td>
                                          <h5 class="m-0">Craig Hause</h5>
                                          <p class="m-0 text-muted font-13"><small>Programmer</small></p>
                                      </td>
                                      <td>+89 345 6789</td>
                                      <td>Canada</td>
                                      <td>29/07/2016</td>
                                  </tr>

                                  <tr>
                                      <th>
                                          <span class="avatar-sm-box bg-pink">B</span>
                                      </th>
                                      <td>
                                          <h5 class="m-0">Bret Weaver</h5>
                                          <p class="m-0 text-muted font-13"><small>Web designer</small></p>
                                      </td>
                                      <td>+00 567 890</td>
                                      <td>USA</td>
                                      <td>20/07/2016</td>
                                  </tr>

                                  </tbody>
                              </table>

                          </div> <!-- table-responsive -->
                      </div> <!-- end panel body -->
                  </div>
                  <!-- end panel -->
              </div>
              <!-- end col -->

          </div>
          <!-- end row -->


      </div> <!-- container -->

  </div> <!-- content -->

  <footer class="footer text-right">
      2016 - 2018 © Zircos.
  </footer>

</div>
@endsection
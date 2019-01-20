<template>
    <div>
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="page-title-box">
                                <h4 class="page-title">{{msg}}</h4>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                   <!-- <div class="row">

                       <div class="col-lg-3 col-md-6">
                         <div class="card-box widget-box-two widget-two-info">
                             <i class="mdi mdi-chart-areaspline widget-two-icon"></i>
                             <div class="wigdet-two-content text-white">
                                 <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Statistics</p>
                                 <h2 class="text-white"><span data-plugin="counterup">34578</span> <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                                 <p class="m-0"><b>Last:</b> 30.4k</p>
                             </div>
                         </div>
                       </div>

                       <div class="col-lg-3 col-md-6">
                         <div class="card-box widget-box-two widget-two-primary">
                             <i class="mdi mdi-layers widget-two-icon"></i>
                             <div class="wigdet-two-content text-white">
                                 <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">User This Month</p>
                                 <h2 class="text-white"><span data-plugin="counterup">52410 </span> <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                                 <p class="m-0"><b>Last:</b> 40.33k</p>
                             </div>
                         </div>
                       </div>

                       <div class="col-lg-3 col-md-6">
                         <div class="card-box widget-box-two widget-two-danger">
                             <i class="mdi mdi-access-point-network widget-two-icon"></i>
                             <div class="wigdet-two-content text-white">
                                 <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Statistics</p>
                                 <h2 class="text-white"><span data-plugin="counterup">6352</span> <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                                 <p class="m-0"><b>Last:</b> 30.4k</p>
                             </div>
                         </div>
                       </div>

                       <div class="col-lg-3 col-md-6">
                         <div class="card-box widget-box-two widget-two-success">
                             <i class="mdi mdi-account-convert widget-two-icon"></i>
                             <div class="wigdet-two-content text-white">
                                 <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User Today">User Today</p>
                                 <h2 class="text-white"><span data-plugin="counterup">895 </span> <small><i class="mdi mdi-arrow-down text-danger"></i></small></h2>
                                 <p class="m-0"><b>Last:</b> 1250</p>
                             </div>
                         </div>
                       </div>

                    </div> -->
                    <!-- end row -->


                    <div class="row">
                       <div class="col-md-12">
                           <div class="panel panel-color panel-info">
                               <div class="panel-heading">
                                   <h5 class="panel-title" style="float:left;">Appointments</h5>
                                   <div class="form-group">
                                       <form method="POST" name="SearchByDate" action="" >
                                           <input type="date" class="form-control text-white" v-model="currentTime"  v-on:change="appointmentSearchByDate" >
                                       </form>
                                   </div>
                               </div>
                               <div class="panel-body">
                                   <div class="table-responsive">
                                       <table  class="table table table-hover m-0" v-if="appointmentInfo.length" >
                                           <thead>
                                               <tr>
                                                   <th>Serial No</th>
                                                   <th>patient Name</th>
                                                   <th>Phone</th>
                                                   <th>Date</th>
                                                   <th>Status</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                               <tr v-for="(item,index) in appointmentInfo" :key="index" >
                                                   <th>
                                                       <span class="avatar-sm-box bg-success">{{index+1}}</span>
                                                   </th>
                                                   <td>
                                                       <h5 class="m-0">{{item.name}}</h5>
                                                       <p class="m-0 text-muted font-13"><small>Programmer</small></p>
                                                   </td>
                                                   <td>{{item.email}}</td>
                                                   <td>{{item.date}}</td>
                                                   <td v-if="(item.status==1)"><button type="button" name='change' class="btn btn-success">Approved</button></td>
                                                   <td v-if="(item.status==0)"><button type="button" name='change' @click="approveAppointment(item.id)" class="btn btn-danger">Click Here to Approve</button></td>
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
            
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            msg: 'DashBoard',
            currentTime: (new Date().toISOString().slice(0,10)),
            
            
        }
    },

   methods: {

       async appointmentSearchByDate(){
            console.log('New Date: '+this.currentTime)

                   
            
              let AuthData = {
                'date':this.currentTime,
              }
              const info = await this.callApi('post', '/appointmentSearchByDate',AuthData)
	        		if(info.status===200){

                        this.$store.dispatch('doctor/updateAppointment',info.data.appointment);
              }
              else{
                let msg = "Error : "+info;
              }
              
        },
       async approveAppointment(id){
            console.log('New Date: '+this.currentTime)

                   
            
              let AuthData = {
                'date':this.currentTime,
                'id':id,
              }
               const info = await this.callApi('post', '/updateStatus',AuthData)
	        		if(info.status===200){

                        this.$store.dispatch('doctor/updateAppointment',info.data.appointment);
              }
              else{
                let msg = "Error : "+info;
              }
              
        },
  },
}
</script>



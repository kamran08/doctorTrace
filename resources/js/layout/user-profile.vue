<template>
    <div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt="" />
                        <div class="file btn btn-lg btn-primary">
                            Change Photo
                            <input type="file" name="file" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                        <h5>
                            {{user.name}}
                        </h5>
                        <h6>
                            Normal User
                        </h6>
                        <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" @click="changeTab(1)" >About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" @click="changeTab(2)" >Appointment Info</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-work">
                        <p>WORK LINK</p>
                        <a href="">Website Link</a><br />
                        <a href="">Bootsnipp Profile</a><br />
                        <a href="">Bootply Profile</a>
                        <p>SKILLS</p>
                        <a href="">Web Designer</a><br />
                        <a href="">Web Developer</a><br />
                        <a href="">WordPress</a><br />
                        <a href="">WooCommerce</a><br />
                        <a href="">PHP, .Net</a><br />
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        
                        <mainProfile :userGID = " gid " v-if="(linkFlag==1)"/>	
                        <editProfile :userGID = " gid " v-if="(linkFlag==2)"/>	
                        <!-- <dashBoardMain v-if="(LinkFlagTab==2)"/>	 -->
                    </div>
                </div>
            </div>
        </form>
    </div>


</template>

<script>
    import mainProfile from '../components/userProfile/mainProfile.vue';
    import editProfile from '../components/userProfile/editProfile.vue';

    export default {
        props: ['gid'],
        components: {
            mainProfile,
            editProfile,
        },
        data() {
            return {

                linkFlag: 1,
                user: [],

            }
        },

        computed: {

        },
        created() {
            // Do something useful with the data in the template
            // console.log(this.gid)
            this.user = this.gid.user;


        },

        methods: {

            changeTab(id){
                if(1==id){
                    this.linkFlag =1
                }
                else{
                    if(this.user.id==this.gid.user_id)
                        this.linkFlag=2
                }
            }

        },

    }
</script>
<template>
    <div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-4" @click="checkUser">
                    <div class="profile-img">
                        <img :src="BASE_URL+img" alt="user-profile" />
                        <div v-if="user.id===gid.user_id"  class="file btn btn-lg btn-primary">
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

        <!-- upload modal -->
        <Modal
        v-model="showUploadModal"
        title="Upload your profile picture"
        :closable = "false"
       >
       <Upload
       
            type="drag"
            action="/app/upload-avater"
            :on-success="handleSuccess"
            >
            <div style="padding: 20px 0">
                <Icon type="ios-cloud-upload" size="52" style="color: #3399ff"></Icon>
                <p>Click or drag files here to upload</p>
            </div>
        </Upload>
        <div slot="footer">
            <Button @click="showUploadModal=false">Close</Button>
        </div>
    </Modal>


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
                showUploadModal:false,
                img: ''

            }
        },

        computed: {

        },
        created() {
            // Do something useful with the data in the template
            // console.log(this.gid)
            this.user = this.gid.user;
            this.img = this.gid.user.image;


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
            },
             handleSuccess (res, file) {
                console.log(res)
                this.img = `/uploads/${res}`
                this.showUploadModal = false
            },
            checkUser(){

               

                if(this.user.id===this.gid.user_id){

                     console.log("i am calling chekcuser")

                    this.showUploadModal=true;
                }

            },

        },

    }
</script>
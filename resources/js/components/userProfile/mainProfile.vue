<template>
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="row">
            <div class="col-md-6">
                <label>User Id</label>
            </div>
            <div class="col-md-6">
                <p>user-{{user.id}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>Name</label>
            </div>
            <div class="col-md-6">
                <p>{{user.name}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>Email</label>
            </div>
            <div class="col-md-6">
                <p>{{user.email}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>Phone</label>
            </div>
            <div class="col-md-6">
                <p>{{user.phone}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>Profession</label>
            </div>
            <div class="col-md-6">
                <p>Normal User</p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['userGID'],

        data() {
            return {

              
                user: [],

            }
        },

        computed: {

        },
        created() {
            // Do something useful with the data in the template
            console.log(this.userGID)
            this.user = this.userGID.user;


        },

        methods: {

        },

    }
</script>
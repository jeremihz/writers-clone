<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row mt-5">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{dash['total_pending']}}</h3>

                                <p>Pending approval</p>
                            </div>
                            <div class="icon">
                               <i class="fas fa-hourglass-start white"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{dash['total_approved']}}</h3>

                                <p>Active orders</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-clock white"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{dash['total_completed']}}</h3>

                                <p>Completed orders</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-clipboard-list white"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{dash['total_revision']}}</h3>

                                <p>Revisions</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-comment-alt white"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
            data(){
                return{
                    dash: {}
            }
        },
        methods :{
            loadDash(){
                axios.get("api/dashboard").then(({data})=>([this.dash = data ['data']]));
            }
        },
        created() {
            this.loadDash();
        }
    }
</script>

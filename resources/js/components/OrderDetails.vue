<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Order Details</h3>
                    </div>

                    <div class="card-body">
                        <div class="row">
                        <div class="col-md-6">
          <div class="box">
            <div class="box-header">
              <h4 class="box-title">Client Details</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding table-responsive p-0">
              <table class="table">
                <tbody><tr>
                  <th>Title</th>
                  <th style="width: 40px">Details</th>
                </tr>
                <tr>
                  <td>Client's Name</td>
                  <td><span>{{details.name}}</span></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td><span>{{details.email}}</span></td>
                </tr>
                <tr>
                  <td>Estimated Cost</td>
                  <td><span>${{details.suggested_price}}</span></td>
                </tr>
                <tr>
                  <td>Client's Budget</td>
                  <td><span>${{details.budget}}</span></td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <hr>
          <div class="box">
            <div class="box-header">
              <h4 class="box-title">Order Details</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding table-responsive p-0">
              <table class="table table-striped">
                <tbody><tr>
                  <th>Title</th>
                  <th style="width: 40px">Details</th>
                </tr>
                <tr>
                  <td>Document's Title</td>
                  <td><span>{{details.title}}</span></td>
                </tr>
                <tr>
                  <td>Level</td>
                  <td><span>{{details.level}}</span></td>
                </tr>
                <tr>
                  <td>Subject</td>
                  <td><span>{{details.subject_name}}</span></td>
                </tr>
                <tr>
                  <td>Document Type</td>
                  <td><span>{{details.documentType_name}}</span></td>
                </tr>
                <tr>
                  <td>No. of Pages</td>
                  <td><span>{{details.pages}}</span></td>
                </tr>
                <tr>
                  <td>Deadline</td>
                  <td><span>{{details.deadline_datetime}}</span></td>
                </tr>
                <tr>
                  <td>Spacing</td>
                  <td><span>{{details.spacing}}</span></td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-6">
            <div class="box">
            <div class="box-header">
              <h4 class="box-title">Files</h4>
            </div>
            <div class="box-body" v-if="this.filesCount > 0">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12" v-for="file in files" :key="file.id">
                        <a href="#" @click="download(file.id)">
                      <div class="info-box">
                        <span class="info-box-icon" style="background-color: green;"><i class="fas fa-download" style="color: white;"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">Download</span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                  </a>
                      <!-- /.info-box -->
                    </div>
                </div>
            </div>
            <div class="alert alert-warning alert-dismissible" v-if="this.filesCount == 0">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fa fa-ban"></i> Alert!</h5>
                No files attached!!
              </div>
        </div>
        <div class="box">
            <div class="box-header">
              <h4 class="box-title">Task Description</h4>
            </div>
            <div class="box-body">
                <p>
                  <a class="btn btn-primary btn-sm" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fas fa-eye"></i>
                   View
                  </a>
                </p>
                <div class="collapse" id="collapseExample">
                  <div class="card card-body">
                    {{details.task}}
                  </div>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="box-header">
              <h5 class="box-title">Upload</h5>
            </div>
            <div class="box-body">
              <button type="button" class="btn btn-success" @click="newModal">
                <i class="fas fa-cloud-upload-alt"></i>
                Upload Completed Task
              </button>
            </div>
        </div>
    </div>
        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="addnewLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addnewLabel">Upload File</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="submit()">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="files">Select File</label>
                                <input type="file" multiple class="form-control-file" @change="fieldChange" id="files">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">
                              <i class="fas fa-cloud-upload-alt"></i>
                              Upload
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                orderId: this.$route.params.orderId,
                details: {},
                filesCount: {},
                files: {},
                attachments:[],
                formf: new FormData(),
                form: new Form({

                })
            }
        },
        methods:{
          submit(){
              for(let i=0; i<this.attachments.length;i++){
                    this.formf.append('pics[]',this.attachments[i]);
                }

                const config = { headers: { 'Content-Type': 'multipart/form-data' } };

              axios.post('/api/completed/' + this.orderId,this.formf,config).then(response=>{
                Fire.$emit('entry');
                $('#addnew').modal('hide');
                this.form.reset();
                swal.fire({
                      type: 'success',
                      title: 'Submited!!',
                      text: 'Files added successfully',

                    })

                })
                    .catch(response=>{
                        //error
                    });
            },
          fieldChange(e){
                let selectedFiles=e.target.files;
                if(!selectedFiles.length){
                    return false;
                }
                for(let i=0;i<selectedFiles.length;i++){
                    this.attachments.push(selectedFiles[i]);
                }
                console.log(this.attachments);
            },
          newModal(){
                this.form.reset();
                $('#addnew').modal('show');
            },
            download(id){
              axios.get("/api/download/" + id).then();
            },
            getDetails(){
              axios.get("/api/task/" + this.orderId).then(({ data }) => ([this.details = data]));
            },

            getFilesCount(){
              axios.get("/api/ifFiles/" + this.orderId).then(({ data }) => ([this.filesCount = data]));
            },

            getFiles(){
              axios.get("/api/getFiles/" + this.orderId).then(({ data }) => ([this.files = data]));
            },
        },
        created() {
            this.getDetails();
            this.getFilesCount();
            this.getFiles();
        }
    }
</script>

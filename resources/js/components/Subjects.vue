<template>
    <div class="container">
        <div class="row pt-3" >
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List of the subjects</h3>

                        <div class="card-tools">
                            <button class="btn btn-sm btn-primary" @click="newModal">Add subject</button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>N.o</th>
                                <th>Subject Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="subjects in subject.data" :key="subject.id">
                                <td>{{subjects.id}}</td>
                                <td>{{subjects.name}}</td>
                                <td>
                                    <a href="#" @click="deleteSubject(subjects.id)">
                                        <i class="fa fa-trash p-1 text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <pagination :data="subject" @pagination-change-page="getResults"></pagination>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- //Modal -->
        <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="addnewLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 v-show="!editMode" class="modal-title" id="addnewLabel">Add Subject</h5>
                        <h5 v-show="editMode" class="modal-title" id="addnewLabel">Edit Subject</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="editMode ? updateSubject() : addSubject()">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Subject Name</label>
                                <input v-model="form.name" type="text" name="name"
                                       placeholder="Enter Subject"
                                       class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                                <has-error :form="form" field="name"></has-error>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button v-show="!editMode" type="submit" class="btn btn-success">Create</button>
                            <button v-show="editMode" type="submit" class="btn btn-primary">Update</button>
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
                editMode:false,
                subject:{},
                form: new Form({
                    id:'',
                    name: '',
                })
            }
        },

        methods: {
            getResults(page = 1) {
                axios.get('api/subject?page=' + page)
                    .then(response => {
                        this.subject = response.data;
                    });
            },
            addSubject(){
                this.$Progress.start();
                this.form.post('api/subject')
                    .then(()=>{
                        Fire.$emit('entry');
                        $('#addnew').modal('hide');
                        toast.fire({
                            type: 'success',
                            title: 'Subject created successfully'
                        });
                        this.$Progress.finish();
                    })
                    .catch(()=>{
                        this.$Progress.fail();
                    });
            },
            loadSubject(){
                    axios.get("api/subject").then(({data}) => (this.subject = data));
            },
            deleteSubject(id){
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    //type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if(result.value){
                        this.form.delete("api/subject/"+id).then(()=>{
                            swal(
                                'Delete!',
                                'Your file has been deleted.',
                                'success'
                            )
                            Fire.$emit('entry');
                        }).catch(()=>{
                            swal('Failed!','There was something wrong')
                        });
                    }
                })
            },
            newModal(){
                this.editMode = false;
                this.form.reset();
                $('#addnew').modal('show');
            },
            editModal(counties){
                this.editMode = true;
                this.form.reset();
                $('#addnew').modal('show');
                this.form.fill(counties);
            }
        },
        created() {
            Fire.$on('searching', ()=>{
                let query = this.$parent.search;
                axios.get('api/findSubject?q=' + query)
                    .then((data)=>{
                        this.subject = data.data;
                    })
                    .catch(()=>{

                    })
            })
            this.loadSubject();
            Fire.$on('entry', () =>{
                this.loadSubject();
            })
            //setInterval(() => this.loadUsers(), 3000);
        }
    }
</script>


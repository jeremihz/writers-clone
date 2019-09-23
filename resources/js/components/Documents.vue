<template>
    <div class="container">
        <div class="row pt-3" >
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Documents</h3>

                        <div class="card-tools">
                            <button class="btn btn-sm btn-primary" @click="newModal">Add Documents</button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                
                                <th>Document Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="document_types in document.data" :key="document.id">
                                
                                <td>{{document_types.name}}</td>
                                <td>
                                    <a href="#" @click="editModal(document_types)">
                                        <i class="fa fa-edit p-1 text-primary"></i>
                                    </a>
                                    <a href="#" @click="deleteDocument(document_types.id)">
                                        <i class="fa fa-trash p-1 text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <pagination :data="document" @pagination-change-page="getResults"></pagination>
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
                        <h5 v-show="!editMode" class="modal-title" id="addnewLabel">Add Document</h5>
                        <h5 v-show="editMode" class="modal-title" id="addnewLabel">Edit Document</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="editMode ? updateDocument() : addDocument()">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Document Name</label>
                                <input v-model="form.name" type="text" name="name"
                                       placeholder="Enter document"
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
                document:{},
                form: new Form({
                    id:'',
                    name: '',
                })
            }
        },

        methods: {
            getResults(page = 1) {
                axios.get('api/document?page=' + page)
                    .then(response => {
                        this.document = response.data;
                    });
            },
            addDocument(){
                this.$Progress.start();
                this.form.post('api/document')
                    .then(()=>{
                        Fire.$emit('entry');
                        $('#addnew').modal('hide');
                        toast.fire({
                            type: 'success',
                            title: 'Document created successfully'
                        });
                        this.$Progress.finish();
                    })
                    .catch(()=>{
                        this.$Progress.fail();
                    });
            },
            loadDocument(){
                    axios.get("api/document").then(({data}) => (this.document = data));
            },
            deleteDocument(id){
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
                        this.form.delete("api/document/"+id).then(()=>{
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
            editModal(document_types){
                this.editMode = true;
                this.form.reset();
                $('#addnew').modal('show');
                this.form.fill(document_types);
            },
            updateDocument(){
                this.$Progress.start();
                this.form.put('api/county/'+this.form.id)
                    .then(()=>{
                        $('#addnew').modal('hide');
                        swal(
                            'Updated!',
                            'Your Document has been updated.',
                            'success'
                        )
                        this.$Progress.finish();
                        Fire.$emit('entry');
                    })
                    .catch(()=>{
                        this.$Progress.fail();
                    })
                console.log('I can edit');
            }
        },
        created() {
            Fire.$on('searching', ()=>{
                let query = this.$parent.search;
                axios.get('api/findDocument?q=' + query)
                    .then((data)=>{
                        this.document = data.data;
                    })
                    .catch(()=>{

                    })
            })
            this.loadDocument();
            Fire.$on('entry', () =>{
                this.loadDocument();
            })
            //setInterval(() => this.loadUsers(), 3000);
        }
    }
</script>


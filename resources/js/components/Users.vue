<template>
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Пользователи</h3>
                    <div class="card-tools">
                        <h4 class="card-title">
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addNew">Add</button>
                        </h4>
                        <div class="modal fade" id="addNew" tabindex="-1" aria-labelledby="addNewLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addNewLabel">Add New User</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form @submit.prevent="createUser">


                                        <div class="modal-body">
                                            <div class="form-group">
                                                <input type="text" v-model="form.name" name="name"
                                                       placeholder="name"
                                                       class="form-control" :class="{'is_invalid': form.errors.has('name')}">
                                                <has-error field="name" :form="form"></has-error>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" v-model="form.email" name="email"
                                                       placeholder="email"
                                                       class="form-control" :class="{'is_invalid': form.errors.has('email')}">
                                                <has-error field="email" :form="form"></has-error>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" v-model="form.password" name="password"
                                                       placeholder="password"
                                                       class="form-control" :class="{'is_invalid': form.errors.has('password')}">
                                                <has-error field="password" :form="form"></has-error>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Сoхранить</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Registered At</th>
                            <th>Modify</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="users in users" :key="users.id">
                            <td>{{ users.id }}</td>
                            <td>{{ users.name }}</td>
                            <td>{{users.email}}</td>
                            <td>{{users.created_at | myDate}}</td>
                            <td>
                                <a href="#">
                                    <i class="fa fa-edit blue"></i>
                                </a>
                                /
                                <a href="#" @click="deleteUsers(users.id)">
                                    <i class="fa fa-trash red"></i>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            users : {},
            form: new Form({
                name: '',
                email: '',
                password: '',

            })
        }
    },
    methods: {
        deleteUsers(id){
            swal({
                title: 'Вы уверены?',
                text: 'Вы не сможете вернуть данные',
                type: 'warning',
                showCanselButton: true,
                confirmButtonColor: '#3085d6',
                canselButtonColor: '#d33',
                confirmButtonText: 'Удалить'
            }).then((result)=>{
                if(result.value){
                    swal(
                        'Удалено'
                    )
                }
            })
        },
        loadUsers(){
            axios.get('api/user').then(({data}) =>(this.users = data.data));
        },
        createUser(){
            this.$Progress.start();
            this.form.post('api/user');
            this.$Progress.finish();
        }
    },
    created() {
        this.loadUsers();
        setInterval(() => this.loadUsers(), 3000);
    }
}
</script>

<style scoped>

</style>

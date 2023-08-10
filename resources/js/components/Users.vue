<script setup>

import ExampleComponent from "./ExampleComponent.vue";
</script>

<template>
<div class="container">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Users Table</h3>
                <div class="card-tools">
                        <h4 class="card-title">
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Add</button>
                        </h4>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add info</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="#" method="POST">


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
                                        <button type="submit" class="btn btn-primary">Send message</button>
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
                        <th>Modify</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>183</td>
                        <td>John Doe</td>
                        <td>11-7-2014</td>
                        <td><span class="tag tag-success">Approved</span></td>
                        <td>
                            <a href="#">
                                <i class="fa fa-edit blue"></i>
                            </a>
                            /
                            <a href="#">
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
              form: new Form({
                  name: '',
                  email: '',
                  password: '',

              })
          }
        },
        mounted() {
            console.log('Component mounted')
        }
    }
</script>

<style scoped>

</style>

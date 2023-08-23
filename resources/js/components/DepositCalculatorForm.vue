<script setup>

import ExampleComponent from "./ExampleComponent.vue";
</script>

<template>
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Депозитный калькулятор</h3>
                    <div class="card-tools">
                        <h4 class="card-title">
                            <button type="button" class="btn btn-primary float-right" @click="newModal">Добавить</button>
                        </h4>
                        <div class="modal fade" id="addNew" tabindex="-1" aria-labelledby="addNewLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" v-show="!editmode" id="addNewLabel">Добавить</h5>
                                        <h5 class="modal-title" v-show="editmode" id="addNewLabel">Изменить</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form @submit.prevent="editmode ? updatedepositcalculatorform() : createdepositcalculatorform()">


                                        <div class="modal-body">
                                            <div class="form-group">
                                                <input type="text" v-model="form.surname" name="surname"
                                                       placeholder="фамилия"
                                                       class="form-control" :class="{'is_invalid': form.errors.has('surname')}">
                                                <has-error field="surname" :form="form"></has-error>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" v-model="form.name" name="name"
                                                       placeholder="имя"
                                                       class="form-control" :class="{'is_invalid': form.errors.has('name')}">
                                                <has-error field="name" :form="form"></has-error>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" v-model="form.e_mail" name="e_mail"
                                                       placeholder="E-mail"
                                                       class="form-control" :class="{'is_invalid': form.errors.has('e_mail')}">
                                                <has-error field="e_mail" :form="form"></has-error>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" v-model="form.phone_number" name="phone_number"
                                                       placeholder="номер телефона"
                                                       class="form-control" :class="{'is_invalid': form.errors.has('phone_number')}">
                                                <has-error field="phone_number" :form="form"></has-error>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" v-model="form.additional_phone_number" name="additional_phone_number"
                                                       placeholder="доп. номер телефона"
                                                       class="form-control" :class="{'is_invalid': form.errors.has('additional_phone_number')}">
                                                <has-error field="additional_phone_number" :form="form"></has-error>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                                            <button v-show="editmode" type="submit" class="btn btn-success">Изменить</button>
                                            <button v-show="!editmode" type="submit" class="btn btn-primary">Сoхранить</button>
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
                            <th>Фамилия</th>
                            <th>Имя</th>
                            <th>Отечество</th>
                            <th>e-mail</th>
                            <th>Номер телефона</th>
                            <th>Дополнительный номер телефона</th>
                            <th>Время создания</th>
                            <th>Изменения</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="depositculatorform in depositculatorform" :key="depositculatorform.id">
                            <td>{{ depositculatorform.id }}</td>
                            <td>{{ depositculatorform.surname }}</td>
                            <td>{{depositculatorform.name}}</td>
                            <td>{{depositculatorform.middle_name}}</td>
                            <td>{{depositculatorform.e_mail}}</td>
                            <td>{{depositculatorform.phone_number}}</td>
                            <td>{{depositculatorform.additional_phone_number}}</td>
                            <td>{{depositculatorform.created_at | myDate}}</td>
                            <td>
                                <a href="#" @click="editModal(depositcalculatorform)">
                                    <i class="fa fa-edit blue"></i>
                                </a>
                                /
                                <a href="#" @click="deletedepositcalculatorform(depositcalculatorform.id)">
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
            editmode: false,
            depositcalculatorform : {},
            form: new Form({
                id: '',
                surname: '',
                name: '',
                middle_name: '',
                e_mail: '',
                phone_number: '',
                additional_phone_number: '',
            })
        }
    },
    methods: {
        updatedepositcalculatorform(){
            this.$Progress.start();
            this.form.put('api/depositcalculatorform/'+this.form.id)
                .then(() => {
                    $('#addNew').modal('hide');
                    swal(
                        'Измнено'
                    )
                    this.$Progress.finish();
                    Fire.$emit('AfterCreate');
                }).catch(() => {
                this.$Progress.fail();
            });
        },
        editModal(depositcalculatorform){
            this.editmode = true;
            this.form.reset();
            $('#addNew').modal('show');
            this.form.fill(depositcalculatorform);
        },
        newModal(){
            this.editmode = false;
            this.form.reset();
            $('#addNew').modal('show');
        },
        deletedepositcalculatorform(id){
            swal.fire({
                title: 'Вы уверены?',
                text: 'Вы не сможете вернуть данные',
                type: 'warning',
                showCanselButton: true,
                confirmButtonColor: '#3085d6',
                canselButtonColor: '#d33',
                confirmButtonText: 'Удалить'
            }).then((result)=>{
                this.form.delete('api/depositcalculatorform/'+id).then(()=>{
                    swal(
                        'Удалено'
                    )
                })
            }).catch(()=>{
                swal('Ошибка')
            })
        },
        loaddepositcalculatorform(){
            axios.get('api/depositcalculatorform').then(({data}) =>(this.depositcalculatorform = data.data));
        },
        createdepositcalculatorform(){
            this.$Progress.start();
            this.form.post('api/depositcalculatorform')
        .then(() =>{
                Fire.$emit('AfterCreate');
                $('#addNew').modal('hide')
                this.$Progress.finish();
            })
                .catch(() => {

                })
        }
    },
    created() {
        this.loaddepositcalculatorform();
        setInterval(() => this.loaddepositcalculatorform(), 3000);
    }
}
</script>

<style scoped>

</style>

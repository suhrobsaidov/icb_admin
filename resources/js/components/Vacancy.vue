<script setup>

import ExampleComponent from "./ExampleComponent.vue";
</script>

<template>
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
                                    <form @submit.prevent="editmode ? updatevacancy() : createvacancy()">


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
                                                <input type="text" v-model="form.middle_name" name="middle_name"
                                                       placeholder="отчество"
                                                       class="form-control" :class="{'is_invalid': form.errors.has('middle_name')}">
                                                <has-error field="middle_name" :form="form"></has-error>
                                            </div>
                                                <div class="form-group">
                                                    <input type="text" v-model="form.e_mail" name="e_mail"
                                                           placeholder="E-mail"
                                                           class="form-control" :class="{'is_invalid': form.errors.has('e_mail')}">
                                                    <has-error field="e_mail" :form="form"></has-error>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" v-model="form.phone" name="phone"
                                                           placeholder="номер телефона"
                                                           class="form-control" :class="{'is_invalid': form.errors.has('phone')}">
                                                    <has-error field="phone" :form="form"></has-error>
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
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Фамилия</th>
                            <th>Имя</th>
                            <th>Отчество</th>
                            <th>e-mail</th>
                            <th>Номер телефона</th>
                            <th>Время создания</th>
                            <th>Изменения</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="vacancy in vacancy" :key="vacancy.id">
                            <td>{{ vacancy.id }}</td>
                            <td>{{ vacancy.surname }}</td>
                            <td>{{vacancy.name}}</td>
                            <td>{{vacancy.middle_name}}</td>
                            <td>{{vacancy.e_mail}}</td>
                            <td>{{vacancy.phone}}</td>
                            <td>{{vacancy.created_at | myDate}}</td>
                            <td>
                                <a href="#" @click="editModal(vacancy)">
                                    <i class="fa fa-edit blue"></i>
                                </a>
                                /
                                <a href="#" @click="deletevacancy(vacancy.id)">
                                    <i class="fa fa-trash red"></i>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
</template>

<script>
export default {
    data(){
        return{
            editmode: false,
            vacancy : {},
            form: new Form({
                id: '',
                surname: '',
                name: '',
                middle_name: '',
                e_mail: '',
                phone_number: '',
            })
        }
    },
    methods: {
        updatevacancy(){
            this.$Progress.start();
            this.form.put('api/vacancy/'+this.form.id)
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
        editModal(vacancy){
            this.editmode = true;
            this.form.reset();
            $('#addNew').modal('show');
            this.form.fill(vacancy);
        },
        newModal(){
            this.editmode = false;
            this.form.reset();
            $('#addNew').modal('show');
        },
        deletevacancy(id){
            swal.fire({
                title: 'Вы уверены?',
                text: 'Вы не сможете вернуть данные',
                type: 'warning',
                showCanselButton: true,
                confirmButtonColor: '#3085d6',
                canselButtonColor: '#d33',
                confirmButtonText: 'Удалить'
            }).then((result)=>{
                this.form.delete('api/vacancy/'+id).then(()=>{
                    swal(
                        'Удалено'
                    )
                })
            }).catch(()=>{
                swal('Ошибка')
            })
        },
        loadvacancy(){
            axios.get('api/vacancy').then(({data}) =>(this.vacancy = data.data));
        },
        createvacancy(){
            this.$Progress.start();
            this.form.post('api/vacancy')
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
        this.loadvacancy();
        setInterval(() => this.loadvacancy(), 3000);
    }
}
</script>

<style scoped>

</style>

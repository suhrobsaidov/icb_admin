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
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addNew">Добавить</button>
                        </h4>
                        <div class="modal fade" id="addNew" tabindex="-1" aria-labelledby="addNewLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addNewLabel">Добавить</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form @submit.prevent="createfeedback">


                                        <div class="modal-body">
                                                <div class="form-group">
                                                <input type="text" v-model="form.name" name="name"
                                                       placeholder="имя"
                                                       class="form-control" :class="{'is_invalid': form.errors.has('name')}">
                                                <has-error field="name" :form="form"></has-error>
                                            </div>
                                                <div class="form-group">
                                                    <input type="text" v-model="form.surname" name="surname"
                                                           placeholder="фамилия"
                                                           class="form-control" :class="{'is_invalid': form.errors.has('surname')}">
                                                    <has-error field="surname" :form="form"></has-error>
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
                                            <div class="form-group">
                                                <input type="text" v-model="form.question" name="question"
                                                       placeholder="Вопрос"
                                                       class="form-control" :class="{'is_invalid': form.errors.has('question')}">
                                                <has-error field="question" :form="form"></has-error>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
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
                            <th>Имя</th>
                            <th>Фамилия</th>
                            <th>e-mail</th>
                            <th>Номер телефона</th>
                            <th>Вопрос</th>
                            <th>Время создания</th>
                            <th>Изменения</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="feedback in feedback" :key="feedback.id">
                            <td>{{ feedback.id }}</td>
                            <td>{{feedback.name}}</td>
                            <td>{{ feedback.surname }}</td>
                            <td>{{feedback.e_mail}}</td>
                            <td>{{feedback.phone}}</td>
                            <td>{{feedback.question}}</td>
                            <td>{{feedback.created_at | myDate}}</td>
                            <td>
                                <a href="#">
                                    <i class="fa fa-edit blue"></i>
                                </a>
                                /
                                <a href="#" @click="deletefeedback(feedback.id)">
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
            feedback : {},
            form: new Form({
                name: '',
                surname: '',
                e_mail: '',
                phone_number: '',
                question: '',
            })
        }
    },
    methods: {
        deletefeedback(id){
            swal.fire({
                title: 'Вы уверены?',
                text: 'Вы не сможете вернуть данные',
                type: 'warning',
                showCanselButton: true,
                confirmButtonColor: '#3085d6',
                canselButtonColor: '#d33',
                confirmButtonText: 'Удалить'
            }).then((result)=>{
                this.form.delete('api/feedback/'+id).then(()=>{
                    swal(
                        'Удалено'
                    )
                })
            }).catch(()=>{
                swal('Ошибка')
            })
        },
        loadfeedback(){
            axios.get('api/feedback').then(({data}) =>(this.feedback = data.data));
        },
        createfeedback(){
            this.$Progress.start();
            this.form.post('api/feedback');
            this.$Progress.finish();
        }
    },
    created() {
        this.loadfeedback();
        setInterval(() => this.loadfeedback(), 3000);
    }
}
</script>

<style scoped>

</style>

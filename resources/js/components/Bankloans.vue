<script setup>

import ExampleComponent from "./ExampleComponent.vue";
</script>

<template>
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Кредиты</h3>
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
                                    <form @submit.prevent="createbankloans">


                                        <div class="modal-body">
                                            <div class="form-group">
                                                <input type="text" v-model="form.title" name="title"
                                                       placeholder="заголовок"
                                                       class="form-control" :class="{'is_invalid': form.errors.has('title')}">
                                                <has-error field="title" :form="form"></has-error>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" v-model="form.description" name="description"
                                                       placeholder="Описание"
                                                       class="form-control" :class="{'is_invalid': form.errors.has('description')}">
                                                <has-error field="description" :form="form"></has-error>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" v-model="form.link" name="link"
                                                       placeholder="ссылка"
                                                       class="form-control" :class="{'is_invalid': form.errors.has('link')}">
                                                <has-error field="link" :form="form"></has-error>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" v-model="form.maintenance" name="maintenance"
                                                       placeholder="обслуживание"
                                                       class="form-control" :class="{'is_invalid': form.errors.has('maintenance')}">
                                                <has-error field="maintenance" :form="form"></has-error>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" v-model="form.security" name="security"
                                                       placeholder="безопасноть"
                                                       class="form-control" :class="{'is_invalid': form.errors.has('security')}">
                                                <has-error field="security" :form="form"></has-error>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" v-model="form.access" name="access"
                                                       placeholder="доступность"
                                                       class="form-control" :class="{'is_invalid': form.errors.has('access')}">
                                                <has-error field="access" :form="form"></has-error>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" v-model="form.commission" name="commission"
                                                       placeholder="Комиссия"
                                                       class="form-control" :class="{'is_invalid': form.errors.has('commission')}">
                                                <has-error field="commission" :form="form"></has-error>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" v-model="form.time" name="time"
                                                       placeholder="время"
                                                       class="form-control" :class="{'is_invalid': form.errors.has('time')}">
                                                <has-error field="time" :form="form"></has-error>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" v-model="form.money" name="money"
                                                       placeholder="деньги"
                                                       class="form-control" :class="{'is_invalid': form.errors.has('money')}">
                                                <has-error field="money" :form="form"></has-error>
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
                            <th>Заголовок</th>
                            <th>Описание</th>
                            <th>Путь кнопки</th>
                            <th>Обслуживание</th>
                            <th>Безопасноть</th>
                            <th>Доступность</th>
                            <th>Комиссия</th>
                            <th>Время</th>
                            <th>Деньги</th>
                            <th>Время создания</th>
                            <th>Изменения</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="bankloans in bankloans" :key="bankloans.id">
                            <td>{{ bankloans.id }}</td>
                            <td>{{ bankloans.title }}</td>
                            <td>{{bankloans.description}}</td>
                            <td>{{bankloans.link}}</td>
                            <td>{{bankloans.maintenance}}</td>
                            <td>{{bankloans.security}}</td>
                            <td>{{bankloans.access}}</td>
                            <td>{{bankloans.commission}}</td>
                            <td>{{bankloans.time}}</td>
                            <td>{{bankloans.money}}</td>
                            <td>{{bankloans.created_at | myDate}}</td>
                            <td>
                                <a href="#">
                                    <i class="fa fa-edit blue"></i>
                                </a>
                                /
                                <a href="#" @click="deletebankloans(bankloans.id)">
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
            bankloans : {},
            form: new Form({
                title: '',
                description: '',
                link: '',
                maintenance: '',
                security: '',
                access: '',
                commission: '',
                time: '',
                money: '',
                image: '',
            })
        }
    },
    methods: {
        deletebankloans(id){
            swal.fire({
                title: 'Вы уверены?',
                text: 'Вы не сможете вернуть данные',
                type: 'warning',
                showCanselButton: true,
                confirmButtonColor: '#3085d6',
                canselButtonColor: '#d33',
                confirmButtonText: 'Удалить'
            }).then((result)=>{
                this.form.delete('api/bankloans/'+id).then(()=>{
                    swal(
                        'Удалено'
                    )
                })
            }).catch(()=>{
                swal('Ошибка')
            })
        },
        loadbankloans(){
            axios.get('api/bankloans').then(({data}) =>(this.bankloans = data.data));
        },
        createbankloans(){
            this.$Progress.start();
            this.form.post('api/bankloans');
            this.$Progress.finish();
        }
    },
    created() {
        this.loadbankloans();
        setInterval(() => this.loadbankloans(), 3000);
    }
}
</script>

<style scoped>

</style>

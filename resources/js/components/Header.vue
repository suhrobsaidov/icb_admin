<script setup>

import ExampleComponent from "./ExampleComponent.vue";
</script>

<template>
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Шапка</h3>
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
                                    <form @submit.prevent="createHeader">


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
                                                <input type="text" v-model="form.sub_title" name="sub_title"
                                                       placeholder="подзаголовок"
                                                       class="form-control" :class="{'is_invalid': form.errors.has('sub_title')}">
                                                <has-error field="sub_title" :form="form"></has-error>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" v-model="form.sub_description" name="sub_description"
                                                       placeholder="подописание"
                                                       class="form-control" :class="{'is_invalid': form.errors.has('sub_description')}">
                                                <has-error field="sub_description" :form="form"></has-error>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" v-model="form.page" name="page"
                                                       placeholder="страница"
                                                       class="form-control" :class="{'is_invalid': form.errors.has('page')}">
                                                <has-error field="page" :form="form"></has-error>
                                            </div>
                                            <div class="form-group">
                                                <select name="language" id="language"  v-model="form.language">
                                                    <option value="Ru">Русский</option>
                                                    <option value="En">English</option>
                                                    <option value="Tj">Таджикский</option>
                                                </select>
                                                <has-error field="language" :form="form"></has-error>
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
                            <th>Подзаголовок</th>
                            <th>Подописание</th>
                            <th>Страница</th>
                            <th>Язык</th>
                            <th>Дата создания</th>
                            <th>Изменения</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="header in header" :key="header.id">
                            <td>{{ header.id }}</td>
                            <td>{{ header.title }}</td>
                            <td>{{header.description}}</td>
                            <td>{{header.link}}</td>
                            <td>{{header.sub_title}}</td>
                            <td>{{header.sub_description}}</td>
                            <td>{{header.page}}</td>
                            <td>{{header.language}}</td>
                            <td>{{header.created_at | myDate}}</td>
                            <td>
                                <a href="#">
                                    <i class="fa fa-edit blue"></i>
                                </a>
                                /
                                <a href="#" @click="deleteHeader(header.id)">
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
            header : {},
            form: new Form({
                title: '',
                description: '',
                link: '',
                sub_title: '',
                sub_description: '',
                page: '',
                language: '',
                image: '',
            })
        }
    },
    methods: {
        deleteHeader(id){
            swal.fire({
                title: 'Вы уверены?',
                text: 'Вы не сможете вернуть данные',
                type: 'warning',
                showCanselButton: true,
                confirmButtonColor: '#3085d6',
                canselButtonColor: '#d33',
                confirmButtonText: 'Удалить'
            }).then((result)=>{
                this.form.delete('api/header'+id).then(()=>{
                    if(result.value){
                        swal.fire(
                            'Удалено'
                        )
                    }
                })
            }).catch(()=>{
                swal('Ошибка')
            })
        },
        loadHeader(){
            axios.get('api/header').then(({data}) =>(this.header = data.data));
        },
        createHeader(){
            this.$Progress.start();
            this.form.post('api/header')
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
        this.loadHeader();
        Fire.$on('AfterCreate',() =>{
            this.loadHeader();
        })
        //setInterval(() => this.loadHeader(), 3000);
    }
}
</script>

<style scoped>

</style>

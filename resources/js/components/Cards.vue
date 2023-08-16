<script setup>

import ExampleComponent from "./ExampleComponent.vue";
</script>

<template>
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Карточки</h3>
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
                                    <form @submit.prevent="createcards">


                                        <div class="modal-body">
                                            <div class="form-group">
                                                <input type="text" v-model="form.title" name="title"
                                                       placeholder="заголовок"
                                                       class="form-control" :class="{'is_invalid': form.errors.has('title')}">
                                                <has-error field="title" :form="form"></has-error>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" v-model="form.link" name="link"
                                                       placeholder="ссылка"
                                                       class="form-control" :class="{'is_invalid': form.errors.has('link')}">
                                                <has-error field="link" :form="form"></has-error>
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
                            <th>Путь кнопки</th>
                            <th>Страница</th>
                            <th>Язык</th>
                            <th>Дата создания</th>
                            <th>Изменения</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="cards in cards" :key="cards.id">
                            <td>{{ cards.id }}</td>
                            <td>{{ cards.title }}</td>
                            <td>{{cards.link}}</td>
                            <td>{{cards.page}}</td>
                            <td>{{cards.language}}</td>
                            <td>{{cards.created_at | myDate}}</td>
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
            cards : {},
            form: new Form({
                title: '',
                link: '',
                image: '',
                page: '',
                language: '',
            })
        }
    },
    methods: {
        loadcards(){
            axios.get('api/cards').then(({data}) =>(this.cards = data.data));
        },
        createcards(){
            this.$Progress.start();
            this.form.post('api/cards');
            this.$Progress.finish();
        }
    },
    created() {
        this.loadcards();
        setInterval(() => this.loadcards(), 3000);
    }
}
</script>

<style scoped>

</style>

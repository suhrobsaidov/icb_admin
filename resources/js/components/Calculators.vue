<script setup>

import ExampleComponent from "./ExampleComponent.vue";
</script>

<template>
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Данные калькулятора</h3>
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
                                    <form @submit.prevent="editmode ? updatecalculators() : createcalculators()">


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
                            <th>Заголовок</th>
                            <th>Путь кнопки</th>
                            <th>Дата создания</th>
                            <th>Изменения</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="calculators in calculators" :key="calculators.id">
                            <td>{{ calculators.id }}</td>
                            <td>{{ calculators.title }}</td>
                            <td>{{calculators.link}}</td>
                            <td>{{calculators.created_at | myDate}}</td>
                            <td>
                                <a href="#"  @click="editModal(calculators)">
                                    <i class="fa fa-edit blue"></i>
                                </a>
                                /
                                <a href="#" @click="deletecalculators(calculators.id)">
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
            calculators : {},
            form: new Form({
                id: '',
                title: '',
                link: '',
                description:'',
                image: '',
            })
        }
    },
    methods: {
        updatecalculators(){
            this.$Progress.start();
            this.form.put('api/calculators/'+this.form.id)
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
        editModal(calculators){
            this.editmode = true;
            this.form.reset();
            $('#addNew').modal('show');
            this.form.fill(calculators);
        },
        newModal(){
            this.editmode = false;
            this.form.reset();
            $('#addNew').modal('show');
        },
        deletecalculators(id){
            swal.fire({
                title: 'Вы уверены?',
                text: 'Вы не сможете вернуть данные',
                type: 'warning',
                showCanselButton: true,
                confirmButtonColor: '#3085d6',
                canselButtonColor: '#d33',
                confirmButtonText: 'Удалить'
            }).then((result)=>{
                this.form.delete('api/calculators/'+id).then(()=>{
                    swal(
                        'Удалено'
                    )
                })
            }).catch(()=>{
                swal('Ошибка')
            })
        },
        loadcalculators(){
            axios.get('api/calculators').then(({data}) =>(this.calculators = data.data));
        },
        createcalculators(){
            this.$Progress.start();
            this.form.post('api/calculators')
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
        this.loadcalculators();
        setInterval(() => this.loadcalculators(), 3000);
    }
}
</script>

<style scoped>

</style>

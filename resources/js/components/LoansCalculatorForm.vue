<script setup>

import ExampleComponent from "./ExampleComponent.vue";
</script>

<template>
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Кредитный калькулятор</h3>
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
                                    <form @submit.prevent="createloanscalculatorform">


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
                                            <div class="form-group">
                                                <input type="text" v-model="form.loan_product" name="loan_product"
                                                       placeholder="Кредитный продукт"
                                                       class="form-control" :class="{'is_invalid': form.errors.has('loan_product')}">
                                                <has-error field="loan_product" :form="form"></has-error>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" v-model="form.loan_currency" name="loan_currency"
                                                       placeholder="Кредитная валюта"
                                                       class="form-control" :class="{'is_invalid': form.errors.has('loan_currency')}">
                                                <has-error field="loan_currency" :form="form"></has-error>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" v-model="form.loan_amount" name="loan_amount"
                                                       placeholder="величина займа"
                                                       class="form-control" :class="{'is_invalid': form.errors.has('loan_amount')}">
                                                <has-error field="loan_amount" :form="form"></has-error>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" v-model="form.loan_term" name="loan_term"
                                                       placeholder="срок кредита"
                                                       class="form-control" :class="{'is_invalid': form.errors.has('loan_term')}">
                                                <has-error field="loan_term" :form="form"></has-error>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" v-model="form.loan_purpose" name="loan_purpose"
                                                       placeholder="цель кредита"
                                                       class="form-control" :class="{'is_invalid': form.errors.has('loan_purpose')}">
                                                <has-error field="loan_purpose" :form="form"></has-error>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" v-model="form.occupation" name="occupation"
                                                       placeholder="Занятие"
                                                       class="form-control" :class="{'is_invalid': form.errors.has('occupation')}">
                                                <has-error field="occupation" :form="form"></has-error>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" v-model="form.city_district" name="city_district"
                                                       placeholder="город/район"
                                                       class="form-control" :class="{'is_invalid': form.errors.has('city_district')}">
                                                <has-error field="city_district" :form="form"></has-error>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" v-model="form.region" name="region"
                                                       placeholder="Регион"
                                                       class="form-control" :class="{'is_invalid': form.errors.has('region')}">
                                                <has-error field="region" :form="form"></has-error>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" v-model="form.address_where_registered" name="address_where_registered"
                                                       placeholder="Адрес прописки"
                                                       class="form-control" :class="{'is_invalid': form.errors.has('address_where_registered')}">
                                                <has-error field="address_where_registered" :form="form"></has-error>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" v-model="form.monthly_family_income" name="monthly_family_income"
                                                       placeholder="Ежемесячный доход семьи"
                                                       class="form-control" :class="{'is_invalid': form.errors.has('monthly_family_income')}">
                                                <has-error field="monthly_family_income" :form="form"></has-error>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" v-model="form.branch" name="branch"
                                                       placeholder="Отдел"
                                                       class="form-control" :class="{'is_invalid': form.errors.has('branch')}">
                                                <has-error field="branch" :form="form"></has-error>
                                            </div><div class="form-group">
                                            <input type="text" v-model="form.phone_number_for" name="phone_number_for"
                                                   placeholder="Номер для доп.инф"
                                                   class="form-control" :class="{'is_invalid': form.errors.has('phone_number_for')}">
                                            <has-error field="phone_number_for" :form="form"></has-error>
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
                            <th>Фамилия</th>
                            <th>Имя</th>
                            <th>Отечество</th>
                            <th>e-mail</th>
                            <th>Номер телефона</th>
                            <th>Дополнительный номер телефона</th>
                            <th>Кредитный продукт</th>
                            <th>Кредитная валюта</th>
                            <th>Срок кредита</th>
                            <th>Цель кредита</th>
                            <th>Величина займа</th>
                            <th>Занятие</th>
                            <th>Город/район </th>
                            <th>Регион</th>
                            <th>Адрес по прописке</th>
                            <th>Ежемесячный доход семьи</th>
                            <th>Ветвь</th>
                            <th>Номер для доп.инф</th>
                            <th>Время создания</th>
                            <th>Изменения</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="loanscalculatorform in loanscalculatorform" :key="loanscalculatorform.id">
                            <td>{{ loanscalculatorform.id }}</td>
                            <td>{{ loanscalculatorform.surname }}</td>
                            <td>{{loanscalculatorform.name}}</td>
                            <td>{{loanscalculatorform.middle_name}}</td>
                            <td>{{loanscalculatorform.e_mail}}</td>
                            <td>{{loanscalculatorform.phone_number}}</td>
                            <td>{{loanscalculatorform.additional_phone_number}}</td>
                            <td>{{loanscalculatorform.loan_product}}</td>
                            <td>{{loanscalculatorform.loan_currency}}</td>
                            <td>{{loanscalculatorform.loan_amount}}</td>
                            <td>{{loanscalculatorform.loan_term}}</td>
                            <td>{{loanscalculatorform.loan_purpose}}</td>
                            <td>{{loanscalculatorform.occupation}}</td>
                            <td>{{loanscalculatorform.city_district}}</td>
                            <td>{{loanscalculatorform.region}}</td>
                            <td>{{loanscalculatorform.address_where_registered}}</td>
                            <td>{{loanscalculatorform.monthly_family_income}}</td>
                            <td>{{loanscalculatorform.branch}}</td>
                            <td>{{loanscalculatorform.phone_number_for}}</td>
                            <td>{{loanscalculatorform.created_at | myDate}}</td>
                            <td>
                                <a href="#">
                                    <i class="fa fa-edit blue"></i>
                                </a>
                                /
                                <a href="#" @click="deleteloanscalculatorform(loanscalculatorform.id)">
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
            loanscalculatorform : {},
            form: new Form({
                surname: '',
                name: '',
                middle_name: '',
                e_mail: '',
                phone_number: '',
                additional_phone_number: '',
                loan_product: '',
                loan_currency: '',
                loan_amount: '',
                loan_term: '',
                loan_purpose: '',
                occupation: '',
                city_district: '',
                region: '',
                address_where_registered: '',
                monthly_family_income: '',
                branch: '',
                phone_number_for: '',
            })
        }
    },
    methods: {
        deleteloanscalculatorform(id){
            swal.fire({
                title: 'Вы уверены?',
                text: 'Вы не сможете вернуть данные',
                type: 'warning',
                showCanselButton: true,
                confirmButtonColor: '#3085d6',
                canselButtonColor: '#d33',
                confirmButtonText: 'Удалить'
            }).then((result)=>{
                this.form.delete('api/loanscalculatorform/'+id).then(()=>{
                    swal(
                        'Удалено'
                    )
                })
            }).catch(()=>{
                swal('Ошибка')
            })
        },
        loadloanscalculatorform(){
            axios.get('api/loanscalculatorform').then(({data}) =>(this.loanscalculatorform = data.data));
        },
        createloanscalculatorform(){
            this.$Progress.start();
            this.form.post('api/loanscalculatorform');
            this.$Progress.finish();
        }
    },
    created() {
        this.loadloanscalculatorform();
        setInterval(() => this.loadloanscalculatorform(), 3000);
    }
}
</script>

<style scoped>

</style>

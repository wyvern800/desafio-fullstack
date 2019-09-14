<template>
      <b-table striped hover outlined :busy.sync="isBusy" :items="persons" :fields="fields" :busy="isBusy" class="mt-3" :sort-by.sync="sortBy" :sort-desc.sync="sortDesc">
       <template v-slot:table-busy>
        <div class="text-center text-success my-2">
          <b-spinner class="align-middle"></b-spinner>
          <strong>Carregando...</strong>
        </div>
      </template>
      </b-table>
 </template>

<script>
  import axios from 'axios'

  export default {
  data () {
   return {
     isBusy: false,
     persons: [],
     fields: ['id', 'nome', 'email', 'data_modificacao'],
     sortBy: 'data_modificacao',
     sortDesc: false,
     errored: false
   }
 },
 mounted () {
   axios
     .get('http://localhost/exemplo/desafio-fullstack/public/pessoas')
     .then(response => (
       this.persons = response.data, this.isBusy = false
     ))
     .catch(error => {
        console.log(error)
        this.isBusy = true
      })
      .finally(() => this.loading = false)
 }
}
</script>

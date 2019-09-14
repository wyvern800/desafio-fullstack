<template>
    <section class="container">
    <div>

      <form action="http://localhost/exemplo/desafio-fullstack/public/pessoas/novo" method="POST">
      <input type="text" name="nome" v-model="nome" placeholder="Nome">
      <input type="date" name="data_nasc" v-model="data_nasc">
      <input type="email" name="email" v-model="email" placeholder="email">
      <input type="text" name="telefone" v-model="telefone" placeholder="telefone">
      <input type="text" name="sexo" v-model="sexo" placeholder="sexo">
      <input type="text" name="cep" v-model="cep" placeholder="cep">
      <input type="text" name="nome_pai" v-model="nome_pai" placeholder="nome pai">
      <input type="text" name="nome_mae" v-model="nome_mae" placeholder="nome mae">
      <input type="text" id ="dmfc" name="data_modificacao" v-model="data_modificacao">
      <button type="submit" @submit.prevent="false">Submit</button>
      <script>
      function action() {
        let str = (new Date()).toISOString().slice(0, 19).replace(/-/g, "/").replace("T", " ");
        document.getElementsByName("data_modificacao")[0].value=str;
        document.getElementById('dmfc').readOnly = true;
      }
      action()
      </script>
      </form>

    </div>
    </section>
</template>

<script>
import axios from 'axios'
export default {
    data(){
      return {
        nome: '',
        data_nasc: '',
        email: '',
        telefone: '',
        sexo: '',
        cep: '',
        nome_pai: '',
        nome_mae: '',
        data_modificacao: '',
      }
    },
    methods: {
      submit(){
         //if you want to send any data into server before redirection then you can do it here
         axios.post('http://localhost/exemplo/desafio-fullstack/public/pessoas/novo', nome: this.nome, data_nasc: this.data_nasc, email: this.email, telefone: this.telefone,
         sexo: this.sexo, cep: this.sexo, nome_pai: this.nome_pai, nome_mae: this.nome_mae, data_modificacao: Date.now();
           .then((Response) => {})
           .finally(
             console.log("toast");
           ))
           .catch((err) => {
             this.errors.push(err)
           })
      }
    }
  }


/*export default {
  data() {
    return {
      nome: '',
      data_nasc: '',
      email: '',
      telefone: '',
      sexo: '',
      cep: '',
      nome_pai: '',
      nome_mae: '',
      data_modificacao: '',
      errors: []
    }
  },
  methods: {
    submit() {
      axios.post('http://localhost/exemplo/desafio-fullstack/public/pessoas/add', nome: this.nome, data_nasc: this.data_nasc, email: this.email, telefone: this.telefone,
      sexo: this.sexo, cep: this.sexo, nome_pai: this.nome_pai, nome_mae: this.nome_mae, data_modificacao: Date.now()
        .then((Response) => {})
        .catch((err) => {
          this.errors.push(err)
        })
    }
  }
}*/

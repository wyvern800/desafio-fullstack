<template>
    <section class="container">
    <div>
      <div>
  <b-jumbotron header="Adicionar User" lead="Formulário de cadastro de pessoas">
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
    <hr />
    <button type="submit" @submit.prevent="false">Submit</button></form>
  </b-jumbotron>
</div>

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

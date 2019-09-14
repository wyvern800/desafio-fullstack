<template>
  <div class="container">
    <div>
<Navbar />
      <h1 class="title">
        Add User
      </h1>
      <RegisterComponent />
      <hr/>
      <Bottom />
    </div>
  </div>
</template>

<script>
import Navbar from '~/components/Navbar.vue'
import RegisterComponent from '~/components/RegisterComponent.vue'
import Bottom from '~/components/Bottom.vue'

export default {
  components: {
    Navbar, RegisterComponent, Bottom
  }
}
</script>

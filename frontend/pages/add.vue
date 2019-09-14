<template>
  <div class="container">
    <div>
<Navbar />
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

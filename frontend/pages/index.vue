<template>
  <div class="container">
    <div>
<Navbar />
      <UserList />
      <hr/>
      <Bottom />
    </div>
  </div>
</template>

<script>
import Navbar from '~/components/Navbar.vue'
import UserList from '~/components/UserList.vue'
import Bottom from '~/components/Bottom.vue'

export default {
  components: {
    Navbar, UserList, Bottom
  }
}
</script>

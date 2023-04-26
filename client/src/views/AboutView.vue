<script>
import AuthenticationService from '../services/AuthenticationService';
import axios from 'axios';

// const res = await AuthenticationService.register({
//   name: this.name
// })
// console.log(res.data)

export default {
  data() {
    return {
      name: "",
    }
  }, 
  methods: {
    async register() {
      AuthenticationService.register({
        name: this.name
      })
    }
  },
  watch: {

  }
}
</script>

<template>
  <div class="about">
      <input v-model="name" type="text" name="name">
      <button @click="register">Click!</button>
  </div>
</template>

<template>
  <div style="max-width: 600px;" class="card mt-3 mx-auto">
    <div class="card-header text-bg-primary">
      Rekisteröinti
    </div>
    <div class="card-body">  
      <form @submit.prevent="createUser">
        <h5>Täytä tietosi ole hyvä.</h5>
        <div class="form-group pb-1">

          <label for="name">Nimi</label><br>
          <input
            v-model="user.name"
            type="text"
            id="name"
            class="form-control"
          >
          <!-- <div class="invalid-feedback" v-for="err in errors.name">
            {{ err }}
          </div> -->
        </div>

        <div class="form-group pb-1">
          <label for="email">Sähköposti</label><br>
          <input
            v-model="user.email"
            type="email"
            id="email"
            class="form-control"
          >
          <!-- <div class="invalid-feedback" v-for="err in errors.email">
            {{ err }}
          </div> -->
        </div>

        <div class="form-group pb-1">
          <label for="password">Salasana</label><br>
          <input
            v-model="user.password"
            type="password"
            id="password"
            class="form-control"
          >
          <!-- <div class="invalid-feedback" v-for="err in errors.password">
            {{ err }}
          </div> -->
        </div>
       
        <div class="form-group pb-1">
          <label for="passwordAgain">Salasana uudestaan</label><br>
          <input
          v-model="user.passwordAgain"
            type="password"
            id="passwordAgain"
            class="form-control"
          >
          <!-- <div class="invalid-feedback" v-for="err in errors.passwordAgain">
            {{ err }}
          </div> -->
        </div>
        <div v-if="user.password !== user.passwordAgain">
          <p style="color: red">Salasanat eivät täsmää.</p>
        </div>
        <button 
          type="submit" 
          class="btn btn-primary"
          :disabled="!user.name || !user.email || !user.password || !user.passwordAgain || user.password !== user.passwordAgain"
        >
          Rekisteröidy
        </button>
      </form>
    </div>  
  </div>
</template>

<script setup>

  import { ref } from 'vue'
  import { useRouter, useRoute } from 'vue-router'
  import userapi from '../api/user.js'


  const route = useRoute()
  const router = useRouter()

  const user = ref({
    name: '',
    email: '',
    password: '',
    passwordAgain: '',
  });

  const errors = ref({});

  // async function handleSubmit() {
  //   // console.log('painettu: ', user.value);
  //   createUser()
  // }

  async function createUser() {
  // errors.value = {};
  try {
    const data = user.value
    await userapi.createUser(data);
    // console.log('tässä user: ', data);
    router.push('/');
  } catch (err) {
    console.error(err);
    // store.dispatch('createErrorToast', err);
    // if (err.response.status === 422) {
    //   errors.value = err.response.data.errors
    //   console.log('tämä: ', err.response.data.errors);
    // }
  }
}
</script>
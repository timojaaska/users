<template>
  <div style="max-width: 600px;" class="card mt-3 mx-auto">
    <div class="card-header text-bg-warning">
      Salasana unohtunut?
    </div>
    <div class="card-body">  
      <h5>Syötä käyttämäsi sähköposti.</h5>
      <form @submit.prevent="forgotPassword">
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

        <button type="submit" class="btn btn-warning">Resetoi salasana</button>
      </form>
    </div>  
  </div>
</template>

<script setup>
import userapi from '../api/user.js'
import { ref } from 'vue'

const user = ref({
    email: '',
  });
// async function handleSubmit() {
//   console.log('painettu');
// }

async function forgotPassword() {
  try {
    const data = user.value
    await userapi.forgotPassword(data);
    // console.log('tässä maili: ', data);
  } catch (err) {
    console.error(err);
  }
}
</script>
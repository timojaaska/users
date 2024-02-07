<template>
  <div class="card mt-3">
    <div class="card-header text-bg-primary">
      Rekisteröinti
    </div>
    <div class="card-body">  
      <form @submit.prevent="handleSubmit">
        <h5>Täytä tietosi ole hyvä.</h5>
        <div class="form-group pb-1">

          <label for="name">Nimi</label><br>
          <input
            
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
            type="password"
            id="passwordAgain"
            class="form-control"
          >
          <!-- <div class="invalid-feedback" v-for="err in errors.passwordAgain">
            {{ err }}
          </div> -->
        </div>

        <button type="submit" class="btn btn-primary">Rekisteröidy</button>
      </form>
    </div>  
  </div>
</template>

<script setup>

async function handleSubmit() {
  console.log('painettu: ');
}
</script>
<template>
  <div style="max-width: 600px;" class="card mt-3 mx-auto">
    <div class="card-header text-bg-info">
      Tervetuloa
    </div>
    <div class="card-body">  
      <h5>Kirjaudu sisään ole hyvä.</h5>
      <form @submit.prevent="handleSubmit">
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

        <button type="submit" class="btn btn-primary">Kirjaudu</button>
      </form>
    </div>  
  </div>
</template>

<script setup>
async function handleSubmit() {
  console.log('painettu');
}
</script>
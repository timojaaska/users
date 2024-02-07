<template>
  <div class="card mt-3">
    <div class="card-header text-bg-warning">
      Salasana unohtunut?
    </div>
    <div class="card-body">  
      <h5>Syötä käyttämäsi sähköposti.</h5>
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

        <button type="submit" class="btn btn-warning">Resetoi salasana</button>
      </form>
    </div>  
  </div>
</template>

<script setup>
async function handleSubmit() {
  console.log('painettu');
}
</script>
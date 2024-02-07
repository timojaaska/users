<template>
  <div class="container">
    <RouterLink to="/">Login</RouterLink> | 
    <RouterLink to="/register">Register</RouterLink> | 
    <RouterLink to="/forgotPassword">Forgotten password</RouterLink>
    <div class="col-md-8">
      <RouterView />
    </div>
  </div>
</template>

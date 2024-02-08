<template>
  <div class="container">
    <div style="max-width: 600px;" class="mx-auto">
      <RouterLink to="/">Login</RouterLink> | 
      <RouterLink to="/register">Register</RouterLink> | 
      <RouterLink to="/forgotPassword">Forgotten password</RouterLink>
    </div>
    <RouterView />
  </div>
</template>

<template>
  <div style="display:none;" id="nav">
    <router-link to="/">Home</router-link> |
    <router-link to="/Campaign">#weTogether</router-link>
    <router-link to="/Contact">Contacts</router-link>
  </div>
  <router-view></router-view>
  <Footer />
</template>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #292929;
}

#nav {
  padding: 30px;
}

#nav a {
  font-weight: bold;
  color: #292929;
}

#nav a.router-link-exact-active {
  color: #14274F;
}
</style>

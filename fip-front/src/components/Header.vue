<template>
    <header class="header">
                    <a class="logoLink" href="#">
                        <img src="@/assets/images/logo.png" alt="logo">
                    </a>
                <div>
                    <nav class="navbar">
                        <div id="nav">
                            <router-link class="navbarA" to="/">Home</router-link>
                            <router-link class="navbarA" to="/Campaign">#weTogether</router-link>
                            <router-link class="navbarA" to="/Contact">Contacts</router-link>
                        </div>
                        <router-view/>
                    </nav>
                </div>
    </header>
</template>

<script>
export default {
  name: 'Header',
};
</script>

<style lang="scss">
  @import "@/assets/sass/main.scss";
</style>

<template>
<Header />
  <div class="#weTogether">
    <h1>This is an about page</h1>
  </div>
<Footer />
</template>

<script>
// @ is an alias to /src
import Header from '@/components/Header.vue';
import Footer from '@/components/Footer.vue';

export default {
  name: 'Campaign',
  components: {
    Header,
    Footer,
  },
};
</script>

<style lang="scss">

</style>

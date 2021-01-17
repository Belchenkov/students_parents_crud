<template>
  <v-app>
    <app-bar />
    <v-main class="px-16 py-8">
      <router-view></router-view>
    </v-main>
  </v-app>
</template>

<script>
import Home from './views/Home';
import AppBar from './components/AppBar';

export default {
  name: 'App',
  components: {
    Home,
    AppBar
  },

  data: () => ({
    //
  }),
};
</script>

<style lang="scss">
@import url('https://fonts.googleapis.com/css2?family=Exo+2:wght@400;700;900&display=swap');

.v-application {
  font-family: 'Exo 2', sans-serif;
}
</style>
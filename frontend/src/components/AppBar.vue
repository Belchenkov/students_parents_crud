<template>
    <div>
      <v-app-bar
          dark
      >
        <v-app-bar-nav-icon @click="drawer = true"></v-app-bar-nav-icon>

        <v-toolbar-title>Students Parents</v-toolbar-title>
      </v-app-bar>

      <v-navigation-drawer
          v-model="drawer"
          absolute
          temporary
      >
        <v-list
            nav
            dense
        >
          <v-list-item-group
              v-model="group"
          >
            <v-list-item to="/">
              <v-list-item-icon>
                <v-icon>mdi-home </v-icon>
              </v-list-item-icon>
              <v-list-item-title>
                Главная
              </v-list-item-title>
            </v-list-item>
            <v-list-item to="/students">
              <v-list-item-icon>
                <v-icon>mdi-account-supervisor-circle </v-icon>
              </v-list-item-icon>
              <v-list-item-title>
                Ученики
              </v-list-item-title>
            </v-list-item>

            <v-list-item to="/parents">
              <v-list-item-icon>
                <v-icon>mdi-account-multiple</v-icon>
              </v-list-item-icon>
              <v-list-item-title>Родители</v-list-item-title>
            </v-list-item>
          </v-list-item-group>
        </v-list>
      </v-navigation-drawer>
    </div>

</template>

<script>
export default {
  name: "AppBar",
  data: () => ({
    drawer: false,
    group: null,
  }),
}
</script>

<style scoped>

</style>
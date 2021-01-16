<template>
  <div>
    <h1>Frontend Run</h1>
  </div>
</template>

<script>
// @ is an alias to /src
import HelloWorld from '@/components/HelloWorld.vue'

export default {
  name: 'Home',
  components: {
    HelloWorld
  },
  async created() {
    const users = await this.getUsers();
    console.log(users);
  },
  methods: {
    async getUsers() {
      const res = await fetch('http://localhost:8081', {
        method: 'GET',
        headers: {
          'Content-Type': 'application/json',
        }
      });

      return await res.json();
    }
  }
}
</script>

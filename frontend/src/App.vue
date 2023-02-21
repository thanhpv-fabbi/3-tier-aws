<template>
  <div id="app">
    <img alt="Vue logo" src="./assets/logo.png" />
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="item in data" :key="item.id">
          <th>{{ item.id }}</th>
          <th >{{ item.class_name }}</th>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  name: "App",
  components: {},

  data() {
    return {
      data: [],
    };
  },

  async created() {
    // GET request using fetch with async/await
    const response = await fetch(process.env.VUE_APP_API_ENDPOINT + '/class-rooms');
    const result = await response.json();
    this.data = result.data;
  },
};
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}

table {
  margin: 0px auto;
  text-align: left;
}
</style>

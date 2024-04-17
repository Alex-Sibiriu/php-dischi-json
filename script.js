const { createApp } = Vue;

createApp({
  data() {
    return {
      apiUrl: 'server.php',
      discs: []
    }
  },

  methods: {
    getApi() {
      axios.get(this.apiUrl)
      .then(result => {
        this.discs = result.data
        console.log(result.data);
      })
    }
  },

  mounted() {
    this.getApi()
  },

}).mount('#app')
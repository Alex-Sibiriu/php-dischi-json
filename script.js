const { createApp } = Vue;

createApp({
  data() {
    return {
      apiUrl: 'server.php',
      discs: [],
      activeDisc: {}
    }
  },

  methods: {
    getApi() {
      axios.get(this.apiUrl)
      .then(result => {
        this.discs = result.data
        console.log(result.data);
      })
    },

    switchDisc(disc) {
      this.activeDisc = disc
    }
  },

  mounted() {
    this.getApi()
  },

}).mount('#app')
const { createApp } = Vue;

createApp({
  data() {
    return {
      apiUrl: 'server.php',
      discs: [],
      activeDisc: {},
      newDisc: {
        title: '',
        author: '',
        year: '',
        poster: '',
        genre: '',
        description: '',
      }
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
      if (this.activeDisc === disc) {
        this.activeDisc = {}
      } else {
        this.activeDisc = disc
      }
    },

    addNewDisc() {
      const data = new FormData();
      data.append('newTitle', this.newDisc.title);
      data.append('newAuthor', this.newDisc.author);
      data.append('newYear', this.newDisc.year);
      data.append('newPoster', this.newDisc.poster);
      data.append('newGenre', this.newDisc.genre);
      data.append('newDescription', this.newDisc.description);

      axios.post(this.apiUrl, data)
      .then(response => {
        this.discs = response.data
      })
      this.newDisc = {
        title: '',
        author: '',
        year: '',
        poster: '',
        genre: '',
        description: '',
      }
    },

    removeDisc(index) {
      if (confirm('Sei sicuro di voler eliminare il disco dalla lista?')) {
        const data = new FormData();
        data.append('indexToRemove', index)
  
        axios.post(this.apiUrl, data)
        .then(response => {
          this.discs = response.data
        })
      }
    },

    toggleLike(index) {
      const data = new FormData();
      data.append('likeIndex', index)

      axios.post(this.apiUrl, data)
      .then(response => {
        this.discs = response.data
      })
    }
  },

  mounted() {
    this.getApi()
  },

}).mount('#app')
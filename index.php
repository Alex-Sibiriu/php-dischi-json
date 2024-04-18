<?php require_once __DIR__ . '/partials/head.php'; ?>

<body>
  <div id="app">

  <header>
    <div class="container h-100 d-flex align-items-center justify-content-between">
      <i class="fa-brands fa-spotify"></i>

      <button class="btn btn-light btn-outline-success fw-bold" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Aggiungi un disco</button>

      <div class="offcanvas offcanvas-end text-bg-dark fw-bold w-25" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasRightLabel">Inserisci le informazioni</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <div class="row">

            <div class="col-6 d-flex flex-column mb-4">
              <label for="title">Titolo *</label>
              <input v-model.trim="newDisc.title" type="text" placeholder="Inserisci il titolo" id="title" class=" w-100">
            </div>

            <div class="col-6 d-flex flex-column mb-4">
              <label for="author">Autore</label>
              <input v-model.trim="newDisc.author" type="text" placeholder="Inserisci l'autore" id="author" class="w-100">
            </div>

            <div class="col-6 d-flex flex-column mb-4">
              <label for="year">Anno d'uscita</label>
              <input v-model.trim="newDisc.year" type="text" placeholder="Inserisci l'anno" id="year" class="w-100">
            </div>

            <div class="col-6 d-flex flex-column mb-4">
              <label for="genre">Genere</label>
              <input v-model.trim="newDisc.genre" type="text" placeholder="Inserisci il genere" id="genre" class="w-100">
            </div>

            <div class="col-12 d-flex flex-column mb-4">
              <label for="poster">Cover</label>
              <input v-model.trim="newDisc.poster" type="text" placeholder="Inserisci l'iimagine di copertina" id="poster" class="w-100">
            </div>

            <div class="col-12 d-flex flex-column mb-4">
              <label for="description">Descrizione</label>
              <textarea v-model.trim="newDisc.description" placeholder="Inserisci una descrizione" id="description" class="w-100"></textarea>
            </div>

            <div class="col-12">
              <div @click.stop="addNewDisc()" class="btn btn-warning fw-bold" data-bs-dismiss="offcanvas">Invia</div>
            </div>

            <div class="col-12 mt-auto mt-5 pt-5">
              <p>* Campi Obbligatori</p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </header>

    <div class="container py-4">
      <div class="row row-cols-3">
  
        <div class="col text-center mb-2 d-flex justify-content-center" v-for="(disc, index) in discs" :key="disc.id">
          <div @click="switchDisc(disc)"  class="my-card w-100 px-2 py-4 text-white">

            <div :class="{'flip180' : disc === activeDisc }" class="inner-card w-100 h-100 position-relative">
              <div class="primary-card w-100 text-center rounded-3 d-flex align-items-center justify-content-center">
                <div class="w-100 position-relative">
                  <img v-if="disc.poster" class="mb-3 poster-img" :src="disc.poster" alt="disc.title">
                  <h5 class="fw-bold">{{ disc.title }}</h5>
                  <h6 v-if="disc.author" class="fw-bold">{{ disc.author }}</h6>
                  <p v-if="disc.year"><strong>Anno: </strong>{{ disc.year }}</p>
                  <p v-if="disc.genre"><strong>Genere: </strong>{{ disc.genre }}</p>
                  <i @click.stop="removeDisc(index)" class="fa-solid fa-trash-can position-absolute"></i>
                  <div class="like-icons position-absolute">
                    <i @click.stop="toggleLike(index)" v-if="!disc.like" class="fa-regular fa-heart"></i>
                    <i @click.stop="toggleLike(index)" v-if="disc.like" class="fa-solid fa-heart text-danger"></i>
                  </div>
                </div>
              </div>

            
              <div class="disc-details px-4 rounded-3 d-flex justify-content-center">
                <div >
                  <div v-if="disc.songs.length > 0" class="songs-list ps-2">
                    <h6 class="fw-bold py-3">Brani:</h6>
                    <ul class="list-unstyled">
                      <li v-for="(song, index) in disc.songs" :key="disc.id + index" class="mb-2 border-bottom border-white">{{ song }}</li>
                    </ul>
                  </div>
      
                  <div v-if="disc.description" class="description pb-2">
                    <h6 class="fw-bold py-3">Descrizione:</h6>
                    <p>{{ disc.description }}</p>
                  </div>

                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <script src="script.js"></script>

</body>
</html>
<?php require_once __DIR__ . '/partials/head.php'; ?>

<body>
  <div id="app">

  <header>
    <div class="container h-100 d-flex align-items-center">
      <i class="fa-brands fa-spotify"></i>
    </div>
  </header>

    <div class="container py-4">
      <div class="row row-cols-3">
  
        <div class="col text-center mb-2 d-flex justify-content-center" v-for="disc in discs" :key="disc.id">
          <div @click="switchDisc(disc)"  class="my-card w-100 px-2 py-4 text-white">

            <div :class="{'flip180' : disc === activeDisc }" class="inner-card w-100 h-100 position-relative">
              <div class="primary-card w-100 text-center rounded-3 d-flex align-items-center justify-content-center">
                <div>
                  <img class="mb-3" :src="disc.poster" alt="disc.title">
                  <h5 class="fw-bold">{{ disc.title }}</h5>
                  <h6 class="fw-bold">{{ disc.author }}</h6>
                  <p><strong>Anno: </strong>{{ disc.year }}</p>
                  <p><strong>Genere: </strong>{{ disc.genre }}</p>
                </div>
              </div>

            
              <div class="disc-details px-4 rounded-3 d-flex justify-content-center">
                <div>
                  <div class="songs-list ps-2">
                    <h6 class="fw-bold py-3">Brani:</h6>
                    <ul class="list-unstyled">
                      <li v-for="(song, index) in disc.songs" :key="disc.id + index" class="mb-2 border-bottom border-white">{{ song }}</li>
                    </ul>
                  </div>
      
                  <div class="description pb-2">
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
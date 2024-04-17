<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Dischi JSON</title>

  <!-- Axios  -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js' integrity='sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==' crossorigin='anonymous'></script>

  <!-- Vue  -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

  <!-- Bootstrap  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- CSS  -->
  <link rel="stylesheet" href="style.css">

</head>
<body class="bg-black">

  <div id="app">

    <div class="container py-4">
      <div class="row row-cols-3">
  
        <div class="col text-center mb-2 d-flex justify-content-center" v-for="disc in discs" :key="disc.id">
          <div @click="switchDisc(disc)" :class="{'active' : disc === activeDisc }" class="my-card position-relative px-2 py-4 rounded-top-3 text-white">

            <div class="primary-card w-100 text-center">
              <img class="mb-3" :src="disc.poster" alt="disc.title">
              <h5 class="fw-bold">{{ disc.title }}</h5>
              <h6 class="fw-bold">{{ disc.author }}</h6>
              <p><strong>Anno: </strong>{{ disc.year }}</p>
              <p><strong>Genere: </strong>{{ disc.genre }}</p>
            </div>

            <div class="disc-details position-absolute start-0 p-2 rounded-bottom-3">
              <div class="songs-list ps-2">
                <h6 class="fw-bold">Brani:</h6>
                <ul class="list-unstyled">
                  <li v-for="(song, index) in disc.songs" :key="disc.id + index">{{ song }}</li>
                </ul>
              </div>
  
              <div class="description">
                <h6 class="fw-bold">Descrizione:</h6>
                <p>{{ disc.description }}</p>
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
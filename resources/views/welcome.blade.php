<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Trekk & Food.it</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;200;300;400;500;600;700;800;900&family=Rubik:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/media.css">
</head>

<body>

  <!--NAVBAR-->
  <nav id="mainNavbar" class="navbar navbar-expand-lg border-bottom p-0">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="#"><i class="fa-solid fa-person-hiking flip"></i> Trekk & Food.it</a>
      <button class="navbar-toggler text-presto" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fa-solid fa-signs-post"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Chi siamo</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Itinerari
            </a>
            <ul class="dropdown-menu rounded-0 m-0">
              <li><a class="dropdown-item" href="#">Only Trekking</a></li>
              <li><a class="dropdown-item" href="#">Trekking and food </a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contatti</a>
          </li>
          <li class="nav-item">
            <div class="d-flex">
              <a href="#" class="nav-link nav-link-icon-presto ms-lg-0 ms-2"><i
                  class="fa-solid fa-magnifying-glass"></i></a><button class="btn btn-presto ms-lg-2 ms-4">Proposte del
                weekend</button>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!--CAROUSEL-->
  <section id="masthead">
    <div class="container-fluid">
      <div class="row">
        <div class="col p-0">
          <div id="carouselPresto" class="carousel slide carousel-fade">
            <div class="carousel-inner">
              <div class="carousel-item active overlay">
                <div
                  class="position-absolute top-50 start-50 translate-middle d-flex z-1 justify-content-center flex-column align-items-center text-white">
                  <span class="fs-4">ESPLORA</span>
                  <span class="display-1 fw-bolder mb-5">la natura</span>
                  <div class="d-flex justify-content-around w-100">
                    <button class="btn btn-big-presto">
                      Prossimo evento
                    </button>
                    <button class="btn btn-big-white-presto">
                      Contattaci
                    </button>
                  </div>
                </div>
                <img src="/immagini/slide2.jpg" class="d-block w-100" alt="immagine1">
              </div>
              <div class="carousel-item overlay">
                <div
                  class="position-absolute top-50 start-50 translate-middle z-1 d-flex justify-content-center flex-column align-items-center text-white">
                  <span class="fs-4">SCOPRI</span>
                  <span class="display-1 fw-bolder mb-5">luoghi unici</span>
                  <div class="d-flex justify-content-around w-100">
                    <button class="btn btn-big-presto">
                      Prossimo evento
                    </button>
                    <button class="btn btn-big-white-presto">
                      Contattaci
                    </button>
                  </div>
                </div>
                <img src="immagini/slide5.jpg" class="d-block w-100" alt="immagine2">
              </div>
              <div class="carousel-item overlay">
                <div
                  class="position-absolute top-50 start-50 translate-middle z-1 d-flex justify-content-center flex-column align-items-center text-white">
                  <span class="fs-4">VIVI</span>
                  <span class="display-1 fw-bolder mb-5 text-center">emozioni straordinarie</span>
                  <div class="d-flex justify-content-around w-100">
                    <button class="btn btn-big-presto">
                      Prossimo evento
                    </button>
                    <button class="btn btn-big-white-presto">
                      Contattaci
                    </button>
                  </div>
                </div>
                <img src="immagini/slide3.jpg" class="d-block w-100" alt="immagine3">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselPresto" data-bs-slide="prev">
              <i class="fa-solid fa-leaf fs-1"></i>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselPresto" data-bs-slide="next">
              <i class="fa-solid fa-leaf fs-1"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--INFO-->
  <section id="mainInfo" class="container">
    <div class="row info-presto py-lg-0 py-5 z-2">
      <div class="col-lg-4 col-12 px-5 py-3 bg-presto shadow-lg d-flex justify-content-center align-items-center">
        <div class="p-3 bg-white text-presto shadow me-3">
          <i class="fa-solid fa-person-hiking"></i>
        </div>
        <div class="d-flex flex-column text-white">
          <span class="h6">Esperienze effettuate</span>
          <span class="display-5">3.478</span>
        </div>

      </div>
      <div class="col-lg-4 col-12 px-5 py-3 bg-white shadow-lg d-flex justify-content-center align-items-center">
        <div class="p-3 bg-presto text-white shadow me-3">
          <i class="fa-solid fa-mountain-sun"></i>
        </div>
        <div class="d-flex flex-column text-presto">
          <span class="h6">Nuove esperienze attive</span>
          <span class="display-5 text-black">150</span>
        </div>

      </div>
      <div class="col-lg-4 col-12 px-5 py-3 bg-presto shadow-lg d-flex justify-content-center align-items-center">
        <div class="p-3 bg-white text-presto shadow me-3">
          <i class="fa-solid fa-earth-americas"></i>
        </div>
        <div class="d-flex flex-column text-white">
          <span class="h6">Luoghi visitati</span>
          <span class="display-5">246</span>
        </div>

      </div>
    </div>
  </section>
  <section style="height: 700px; background-color: white;"></section>

  <!--CATEGORIE-->
<section id="category" class="container">
  <div class="row">
    <div class="col-lg-6 col-12"></div>
    <div class="col-lg-6 col-12"></div>
  </div>
</section>

  <!--FORM REGISTRAZIONE-->
  <section id="signUp" class="container py-5">
    <div class="row">
      <div class="col-lg-7 col-12">
        <h3 class="text-presto">CONTATTACI</h3>
        <h2 class="display-5 fw-semibold title-effect">Scopri luoghi meravigliosi a prezzi davvero esclusivi</h2>
        <div class="d-flex justify-content-between py-4 pe-5">
          <div class="d-flex pe-2 align-items-center">
            <span><i class="fa-2x fa-solid fa-gauge-simple-high me-3 text-presto"></i></span>
            <span class="fs-5">Risposta entro 24h</span>
        </div>
        <div class="d-flex pe-2 align-items-center">
            <span><i class="fa-2x fa-solid fa-circle-check me-3 text-presto"></i></span>
            <span class="fs-5">Pagamenti sicuri</span>
        </div>
      </div>
        <p>Compila il form accanto con tutte le informazioni richieste e un nostro operatore ti ricontatterà al più presto.</p>
        <div class="d-flex pe-2 align-items-center mb-5">
          <i class="square fa-solid fa-circle fa-2x fa-shoe-prints text-white me-3"></i>
          <span class="fs-5">Cammina con noi!</span>
      </div>
      </div>
      <div class="col-lg-5 col-12 bg-presto p-4">
        <form action="">
          <input class="form-control input-presto my-3" type="text"  placeholder="Nome">
          <input class="form-control input-presto my-3" type="text"  placeholder="Cognome">
          <input class="form-control input-presto my-3" type="email"  placeholder="Email">
          <select class="form-select input-presto my-3" aria-label="Default select example">
            <option selected>Quale itinerario ti interessa?</option>
            <option value="1">Only Trekking</option>
            <option value="2">Trekking and Food</option>
          </select>
          <select class="form-select input-presto my-3" aria-label="Default select example">
          <option selected>Quante persone?</option>
            <option value="1">1-2</option>
            <option value="2">Gruppo da 3-5</option>
            <option value="2">Gruppo da 6-10</option>
            <option value="2">Gruppo da 11+</option>
          </select>
          <button type="submit" class="btn btn-big-alternative-presto w-100 mt-5">Invio richiesta</button>
        </form>
      </div>
    </div>
  </section>

  <!--FOOTER-->
  <footer id="mainFooter" class="bg-alternative-presto text-white">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 bg-presto py-5">
          <a class="navbar-brand fs-3 fw-bold d-block text-center mb-3" href="#"><i
              class="fa-solid fa-person-hiking"></i> Trekk & Food.it</a>
          <p class="fst-italic mb-3 px-3">
            “A chi mi chiede “Perchè vai in montagna?” rispondo: “Se me lo chiedi non lo saprai mai”
            <br>
            Ed Viesturs
          </p>
          <form action="" class="px-3">
            <div class="input-group mb-3">
              <input type="email" class="form-control input-presto" placeholder="Inserisci la tua email">
              <button class="btn btn-big-alternative-presto" type="submit">Iscriviti</button>
            </div>
          </form>

        </div>
        <div class="col-lg-9 col-md-6 col-12 p-5">
          <div class="row">
            <div class="col-lg-4 col-12">
              <h3 class="footer-effect">
                CONTATTI UTILI
              </h3>
              <div class="d-flex flex-column">
                <span><i class="fa-solid fa-location-dot me-2 mb-2 text-presto"></i>Via Giustino Fortunato 34, Bari (BA)</span>
                <span><i class="fa-solid fa-phone me-2 mb-2 text-presto"></i>+39 080 433 5678</span>
                <span><i class="fa-solid fa-at me-2 mb-3 text-presto"></i>trekk&food@info.it</span>
              </div>
              <div class="d-flex justify-content-around">
                <a href="" class="social nav-link fa-beat"><i class="fa-brands fa-instagram"></i></a>
                <a href="" class="social nav-link fa-beat"><i class="fa-brands fa-facebook"></i></a>
                <a href="" class="social nav-link fa-beat"><i class="fa-brands fa-twitter"></i></a>
                
              </div>
            </div>
            <div class="col-lg-4 col-12 ">
              <h3 class="footer-effect">
                LINK UTILI
              </h3>
              <ul class="nav flex-column footer-list">
                <li class="nav-item"><a href="#" class="nav-link"><i
                      class="fa-solid fa-feather-pointed me-2 text-presto"></i><span>Home</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="fa-solid fa-feather-pointed me-2 text-presto"></i><span>Chi
                    siamo</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i
                      class="fa-solid fa-feather-pointed me-2 text-presto"></i><span>Contatti</span></a></li>
              </ul>
            </div>
            <div class="col-lg-4 col-12 ">
              <h3 class="footer-effect">
                PACCHETTI TREKK & FOOD
              </h3>
              <ul class="nav flex-column footer-list">
                <li class="nav-item"><a href="#" class="nav-link"><i class="fa-solid fa-wheat-awn me-2 text-presto"></i><span>Pacchetti
                    Autunno</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="fa-solid fa-bugs me-2 text-presto"></i><span>Pacchetti
                    Primavera</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i
                      class="fa-solid fa-temperature-high me-2 text-presto"></i><span>Pacchetti Estate</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="fa-solid fa-mountain me-2 text-presto"></i><span>Pacchetti
                    Inverno</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
    </div>



  </footer>















  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
  <script src="/js/script.js"></script>
</body>

</html>
<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            overflow-x: hidden;
        }
        .classify {
            border-color: #63B0CD; 
            color: #63B0CD; 
            width: 165px;
        }
        .classify:hover {
            background-color: #63B0CD;
            color: #171738;
        }
    </style>
</head>
<body>
    @include('partials.navbar')

    <div class="text-center mx-auto" style="background-color: #F8F4A6; height: 30px; display: flex; justify-content: center; align-items:center;">Dapatkan diskon 20% untuk pembelian pertama Anda! Gunakan kode "<b> DREAMSUPPORT </b>" pada saat checkout.</div>
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('images/carousel1.png') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/carousel2.png') }}" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 270px; margin: 50px 0px 40px 0px;">
        <h1 style="margin-bottom: 20px; width: 80vw;">Kategori</h1>
        <div class="btn-group" role="group" aria-label="Basic outlined example">
          <button type="button" class="btn classify">
            <p style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
              <img src="{{ asset('images/dress.png') }}" style="width: 80px; height: 80px; object-fit: contain;"><br>Pakaian Wanita
            </p>
          </button>
          <button type="button" class="btn classify">
            <p style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
              <img src="{{ asset('images/earring.png') }}" style="width: 80px; height: 80px; object-fit: contain;"><br>Perhiasan dan Aksesoris
            </p>
          </button>
          <button type="button" class="btn classify">
            <p style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
              <img src="{{ asset('images/bowl.png') }}" style="width: 80px; height: 80px; object-fit: contain;"><br>Peralatan Rumah
            </p>
          </button>
          <button type="button" class="btn classify">
            <p style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
              <img src="{{ asset('images/chair.png') }}" style="width: 80px; height: 80px; object-fit: contain;"><br>Perabotan
            </p>
          </button>
          <button type="button" class="btn classify">
            <p style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
              <img src="{{ asset('images/shirt.png') }}" style="width: 80px; height: 80px; object-fit: contain;"><br>Pakaian Pria
            </p>
          </button>
          <button type="button" class="btn classify">
            <p style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
              <img src="{{ asset('images/guitar.png') }}" style="width: 80px; height: 80px; object-fit: contain;"><br>Hobi & Mainan
            </p>
          </button>
        </div>
      </div>
      <div class="text-center" style="width: 100vw; display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <b style="width: 80vw; border-radius: 15px; background-color:#63B0CD; height: 50px; display: flex; flex-direction: column; justify-content: center; align-items: center; font-size: 20px; color: white;">Rekomendasi</b>
      </div>

      <div class="container mt-4 px-3">
        <div class="row g-4">
            @foreach ($data as $item)
                <div class="col-lg-3 col-md-4 mb-4">
                    <a href="#" class="card-link" data-item='@json($item)' style="text-decoration: none;">
                        <div class="card h-100" style="background-color: white; border-color: #92374D;">
                            <img src="{{ asset('images/' . $item['image']) }}" class="card-img-top" alt="{{ $item['title'] }}" style="padding: 10px;">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $item['title'] }}</h5>
                                <p class="card-text" style="color: #92374D;">{{ $item['price'] }}</p>
                                <div class="d-flex justify-content-between mt-auto">
                                    <span><i class="bi bi-geo-alt-fill" style="color: #92374D;"></i> {{ $item['location'] }}</span>
                                    <span><i class="bi bi-star-fill" style="color: #63B0CD;"></i> {{ $item['rating'] }}</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <script>
      const synth = window.speechSynthesis;
      
      function speak(text) {
          const utterance = new SpeechSynthesisUtterance(text);
          utterance.lang = 'id-ID';
          synth.speak(utterance);
      }
      
      function stopSpeaking() {
          synth.cancel();
      }
      
      window.onload = function() {
          speak('Halaman Home');
      };
      
      document.querySelectorAll('.card-link').forEach(item => {
          item.addEventListener('mouseover', function() {
              const cardData = JSON.parse(this.getAttribute('data-item'));
              const textToSpeak = `${cardData.title}, ${cardData.price}, ${cardData.location}, Rating: ${cardData.rating}`;
              speak(textToSpeak);
          });
          item.addEventListener('mouseout', function() {
              stopSpeaking(); // Stop speaking when mouse leaves the card
          });
      });
      
      document.querySelectorAll('.navbar-nav a').forEach(item => {
          item.addEventListener('mouseover', function() {
              const textToSpeak = this.innerText;
              speak(textToSpeak);
          });
          item.addEventListener('mouseout', function() {
              stopSpeaking(); // Stop speaking when mouse leaves the navbar item
          });
      });
      
      document.querySelectorAll('.classify').forEach(item => {
          item.addEventListener('mouseover', function() {
              const textToSpeak = this.innerText;
              speak(textToSpeak);
          });
          item.addEventListener('mouseout', function() {
              stopSpeaking(); // Stop speaking when mouse leaves the classify button
          });
      });
      </script>
      

    @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

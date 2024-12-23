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
          speak('Halaman Explore');
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

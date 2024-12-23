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

        .curved-section {
            background-color: #80d1e6;
            height: 300px;
            border-bottom-left-radius: 50%;
            border-bottom-right-radius: 50%;
            padding-top: 75px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding-bottom: 100px;
        }

        .accordion-button::after {
            display: none; /* Hide the default icon */
        }

        .accordion-button.collapsed::before {
            content: "+";
            font-size: 1.5rem;
            color: #92374D;
            position: absolute;
            right: 12px;
        }

        .accordion-button:not(.collapsed)::before {
            content: "-";
            font-size: 2rem;
            color: #92374D;
            position: absolute;
            right: 15px;
        }

        .accordion-item:first-child {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        .accordion-item:last-child {
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
        }

        .accordion-item {
            margin-bottom: 15px;
            border-radius: 15px; 
            overflow: hidden;
            border: 1px solid #92374D;
        }

        .accordion-button {
            border-radius: 15px; 
            background-color: white; 
            color: #92374D; /* Set button text color */
            border: 1px solid #92374D; 
        }

        .accordion-button:not(.collapsed) {
            border-radius: 15px; 
        }

        /* Accordion header background and text color */
        .accordion-header {
            background-color: #92374D; /* Set background color for header */
        }

        .accordion-button.collapsed {
            background-color: white; 
            color: #92374D; /* Set button text color */
            border: 1px solid #92374D; 
        }

        /* Change button color when expanded */
        .accordion-button:not(.collapsed) {
            background-color: white; 
            color: #92374D; /* Set button text color */
            border: 1px solid #92374D; 
        }

        /* Accordion item body color */
        .accordion-body {
            background-color: #92374D;; /* Set background color for the body */
            color: white; /* Set text color for body */
        }
    </style>
</head>
<body>
    @include('partials.navbar')
    <div class="top" style="background-color: #F8F7D7">
        <div class="curved-section">
            <h1 style="padding-bottom: 75px;">Ada yang Bisa Kami Bantu?</h1>
            <form class="d-flex mx-auto" role="search" style="width: 50%; margin-top: -50px; margin-bottom: 50px;">
                <div class="input-group" style="border-radius: 50rem; overflow: hidden;">
                    <input class="form-control border-0" type="search" placeholder="   Search..." aria-label="Search" style="border-radius: 50rem; padding-left: 2.5rem;">
                    <span class="input-group-text bg-transparent border-0 position-absolute" style="left: 10px; top: 50%; transform: translateY(-50%);">
                        <i class="bi bi-search" style="font-size: 1.2rem;"></i>
                    </span>
                </div>
            </form>
        </div>
        <div class="text-center" style="margin-top: 50px;">   
            <h2><b>Frequently Asked Question</b></h2>
        </div>
        <div class="container mt-4" style="padding: 30px 0px;">
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="accordion" id="accordionLeft">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneLeft" aria-expanded="false" aria-controls="collapseOneLeft">
                                    Apa itu KaYa?
                                </button>
                            </h2>
                            <div id="collapseOneLeft" class="accordion-collapse collapse show" data-bs-parent="#accordionLeft">
                                <div class="accordion-body">
                                    <strong>KaYa (Kawan Berkarya) adalah platform marketplace yang dirancang untuk memberdayakan komunitas disabilitas, memungkinkan mereka untuk berkarya dan berkontribusi dalam ekonomi kreatif.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoLeft" aria-expanded="false" aria-controls="collapseTwoLeft">
                                    Siapa yang dapat bergabung dengan KaYa?
                                </button>
                            </h2>
                            <div id="collapseTwoLeft" class="accordion-collapse collapse" data-bs-parent="#accordionLeft">
                                <div class="accordion-body">
                                    <strong>Teman teman yang berkebutuhan khusus dan disabilitas diundang untuk berkarya di ladang ini.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeLeft" aria-expanded="false" aria-controls="collapseThreeLeft">
                                    Bagaimana cara mendaftar sebagai penjual di KaYa?
                                </button>
                            </h2>
                            <div id="collapseThreeLeft" class="accordion-collapse collapse" data-bs-parent="#accordionLeft">
                                <div class="accordion-body">
                                    <strong>Semua yang sudah memiliki aku dapat langsung berjualan di KaYa.</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="accordion" id="accordionRight">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneRight" aria-expanded="false" aria-controls="collapseOneRight">
                                    Apakah dana pembelian produk langsung disalurkan ke penjual?
                                </button>
                            </h2>
                            <div id="collapseOneRight" class="accordion-collapse collapse show" data-bs-parent="#accordionRight">
                                <div class="accordion-body">
                                    <strong>Ya, dana pembelian produk akan disalurkan ke penjual dengan potongan beberapa persen yang dikirim ke pihak KaYa.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoRight" aria-expanded="false" aria-controls="collapseTwoRight">
                                    Apakah semua karya/produk yang dijual berasal dari penjual disabilitas?
                                </button>
                            </h2>
                            <div id="collapseTwoRight" class="accordion-collapse collapse" data-bs-parent="#accordionRight">
                                <div class="accordion-body">
                                    <strong>Ya, produk yang dijual adalah produk yang diunggah oleh para pengguna KaYa</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeRight" aria-expanded="false" aria-controls="collapseThreeRight">
                                    Apakah orang yang tidak mempunyai disabilitas bisa menjual produk di KaYa?
                                </button>
                            </h2>
                            <div id="collapseThreeRight" class="accordion-collapse collapse" data-bs-parent="#accordionRight">
                                <div class="accordion-body">
                                    <strong>Tidak, halaman ini dikhususkan untuk orang yang memiliki disabilitas.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourRight" aria-expanded="false" aria-controls="collapseFourRight">
                                    Apa yang dimaksud dengan sistem donasi berbasis pembelian?
                                </button>
                            </h2>
                            <div id="collapseFourRight" class="accordion-collapse collapse" data-bs-parent="#accordionRight">
                                <div class="accordion-body">
                                    <strong>Pembelian ini oleh dan untuk teman teman yang bekebutuhan khusus.</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
    </div>
    <div class="container mt-4" style="padding: 30px 0px;">
        <div class="row">
            <div class="col-sm-12 col-lg-6 d-flex flex-column justify-content-center align-items-center">
                <div class="p-3">
                    <h2><b>Tidak Menemukan Jawaban Atas Pertanyaanmu?</b></h2>
                    <p>
                        <h4 style="text-align: center;">
                            Atau punya keluhan, saran, atau masukan? <br> Hubungi kami melalui
                        </h4>
                    </p>
                    <div class="d-flex justify-content-center gap-3 mt-3">
                        <button class="btn" style="background-color: #92374D; color: white; padding: 15px 25px; font-size: 15px; border-radius: 12px;">
                            <i class="bi bi-envelope-arrow-up"></i> Kirim Email
                        </button>
                        <button class="btn" style="background-color: white; color: #92374D; padding: 15px 25px; font-size: 15px; border-radius: 12px; border-color:#92374D;">
                            <i class="bi bi-telephone-outbound"></i> Customer Service
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="p-3 text-center">
                    <img src="{{ asset('images/logoblue.png') }}" alt="Logo" style="height: 200px;">
                </div>
            </div>
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
            speak('Halaman Help');
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
        </script>
    @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

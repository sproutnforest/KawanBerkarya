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
            padding-top: 50px;
            height: 210px;
            border-bottom-left-radius: 50%;
            border-bottom-right-radius: 50%;
        }

        .curved-section2 {
            background-color: #F8F4A6;
            min-height: 450px;
            padding-top: 50px;
            border-bottom-left-radius: 50%;
            border-bottom-right-radius: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start; 
            padding: 50px 15px;
            width: 100vw;
        }

        .curved-section h1 {
            font-size: 3rem; 
            font-weight: bold;
            color: #023047;
            text-align: center;
            margin: 0;
        }

        .curved-section-top {
            background-color: #F8F4A6;
            border-top-left-radius: 50%;
            border-top-right-radius: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            width: 100vw;
        }

    </style>
</head>
<body>
    @include('partials.navbar')
    
    <div class="curved-section">
        <h1 style="padding-bottom: 75px;">ABOUT US</h1>
    </div>

    <div class="container mt-4" style="padding: 30px 0px;">
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <div class="p-3">
                    <h3>Apa itu <b>KaYa</b>?</h3>
                    <p><h5>Selamat datang di KaYa (Kawan Berkarya), sebuah inisiatif yang didirikan pada tahun 2024 dengan semangat untuk memberdayakan komunitas disabilitas. Kami percaya bahwa <b>"Inclusion Inspires Creation"</b> – inklusi adalah sumber inspirasi untuk menciptakan karya-karya yang luar biasa.</h5></p>

                    <p><h5>Di KaYa, kami percaya bahwa kolaborasi dan dukungan adalah kunci untuk menciptakan lingkungan yang inklusif dan memberdayakan. Bergabunglah dengan kami dalam perjalanan ini untuk menciptakan dunia yang lebih baik bagi semua. Mari berkarya bersama!</h5></p>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="p-3 text-center"><img src="{{ asset('images/logoblue.png') }}" alt="Logo" style="height: 200px;"></div>
            </div>
        </div>
    </div>

    <hr style="background-color:#92374D; width: 90vw; margin: 0 auto;border: 3px solid #92374D;">

    <div class="container mt-4" style="padding: 25px 0px;">
        <h1 class="text-start"><b>OUR <br> VISION</b></h1>
        <br><h5>Kami berkomitmen untuk memberdayakan komunitas disabilitas agar dapat berkarya dan berkontribusi secara aktif dalam ekonomi kreatif. Kami percaya bahwa setiap individu, terlepas dari keterbatasan fisik atau mental, memiliki potensi yang luar biasa untuk menciptakan dan berinovasi.
        </h5>
    </div>

    <div class="container mt-4" style="padding: 25px 0px;">
        <h1 class="text-start"><b>OUR MISSION</b></h1>
        <div class="row">
            <div class="col-sm-12 col-lg-4">
                <div class="p-3">
                    <h3><b>Inclusion</b></h3>
                    <p><h5>Kami menciptakan platform marketplace yang dirancang khusus untuk memenuhi kebutuhan dan kenyamanan para penyandang disabilitas, sehingga mereka dapat menjual produk dan jasa mereka dengan mudah.</h5></p>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4">
                <h3><b>Inspire</b></h3>
                <p><h5>Kami mengembangkan sistem yang memungkinkan setiap pembelian yang dilakukan di marketplace kami turut berkontribusi pada program-program pemberdayaan bagi komunitas disabilitas. Di setiap transaksi, pembeli tidak hanya mendapatkan produk berkualitas, tetapi juga berkontribusi pada perubahan yang lebih besar.</h5></p>
            </div>
            <div class="col-sm-12 col-lg-4">
                <h3><b>Creation</b></h3>
                <p><h5>Kami berkomitmen untuk memastikan bahwa teknologi yang kami tawarkan dapat diakses oleh semua penjual disabilitas dan memberikan dukungan yang diperlukan untuk mendukung inovasi dan pengembangan usaha mereka.</h5></p>
            </div>
        </div>
    </div>
    <div class="bottom" style="background-color: #023047; display: flex; flex-direction: column; justify-content: flex-start; align-items: center;">
        <div class="curved-section2">
            <h1 style="width: 70vw; text-align: center; padding-top: 25px;">Ini adalah Dukungan Anda untuk Mewujudkan Impian Mereka.</h1>
            <br><h5 style="text-align: center; width: 85vw;">Dengan membeli karya seni atau produk unik ini, Anda tidak hanya mendapatkan barang, tapi juga memberikan kesempatan bagi penyandang disabilitas untuk berbagi kisah melalui talenta mereka. Setiap produk adalah hasil dedikasi dan kerja keras mereka, membuktikan bahwa keterbatasan bukan penghalang untuk berkarya.</h5>
            <br><a href="/" class="btn" style="background-color: #92374D; color: white; padding: 15px 15px; font-size: 20px;">Explore Karya</a>
        </div>
        <div class="mid" style="color: white; padding: 120px 0px; display: flex; flex-direction: column; justify-content: center; align-items: flex-start;">
            <h3 style="width: 80vw; padding-bottom: 20px;">Berdasarkan data berjalan 2020 dari Biro Pusat Statistik (BPS), jumlah penyandang disabilitas di Indonesia mencapai 22,5 juta warga. </h4>
            <h4 style="width: 50vw; padding-top: 20px;">Sementara itu, berdasarkan Survei Angkatan Kerja Nasional (Sakernas) 2020, hanya 9% dari 8 juta angkatan kerja penyandang disabilitas yang terserap sebagai tenaga kerja.</h5>
        </div>
        <div class="curved-section-top">
            <h1 style="width: 70vw; text-align: center; padding: 150px 0px 70px 0px;">Mengapa Peran Anda Penting?</h1>
        </div>
        <div class="mid2" style="background-image: linear-gradient(to bottom, #F8F4A6, white);">
            <div class="row justify-content-center g-4">
                <div class="col-sm-10 col-lg-3" style="background-color: #FFFBF0; margin: 25px;">
                    <div class="p-3">
                        <h5><b>Mendukung Kreativitas Tanpa Batas</b></h5>
                        <p><h6>Setiap karya merupakan hasil usaha tanpa henti, memberikan kesempatan bagi mereka untuk berkembang dan menunjukkan potensi mereka.</h6></p>
                    </div>
                </div>
                <div class="col-sm-10 col-lg-3" style="background-color: #FFFBF0; margin: 25px;">
                    <div class="p-3">
                        <h5><b>Kualitas yang Tak Kalah Baik</b></h5>
                        <p><h6>Dari kerajinan tangan hingga seni rupa, semua produk dibuat dengan penuh cinta dan perhatian. Anda tak hanya membeli, tapi juga mendukung mereka untuk mencapai cita-citanya.</h6></p>
                    </div>
                </div>
                <div class="col-sm-10 col-lg-3" style="background-color: #FFFBF0; margin: 25px;">
                    <div class="p-3">
                        <h5><b>Setiap Pembelian Berarti</b></h5>
                        <p><h6>Dengan setiap produk yang Anda beli, Anda membantu menciptakan masa depan yang lebih cerah bagi mereka. Setiap karya adalah bentuk pemberdayaan dan perubahan.</h6></p>
                    </div>
                </div>
            </div>
            <h1 style="width: 70vw; text-align: center; padding: 60px 0px 50px 0px;">Mari Kita Wujudkan Impian Mereka!</h1>
            <div class="row justify-content-center g-4">
                <div class="col-sm-12 col-lg-3">
                    <img src="{{ asset('images/about1.png') }}" alt="about1" style="height: 75%;">
                </div>
                <div class="col-sm-12 col-lg-3">
                    <img src="{{ asset('images/about2.png') }}" alt="about2" style="height: 75%;">
                </div>
                <div class="col-sm-12 col-lg-3" style="padding-left: 75px;">
                    <img src="{{ asset('images/about3.png') }}" alt="about3" style="height: 75%;">
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
            speak('Halaman About Us');
        };
        
        document.querySelectorAll('.card-link').forEach(item => {
            item.addEventListener('mouseover', function() {
                const cardData = JSON.parse(this.getAttribute('data-item'));
                const textToSpeak = `${cardData.title}, ${cardData.price}, ${cardData.location}, Rating: ${cardData.rating}`;
                speak(textToSpeak);
            });
            item.addEventListener('mouseout', function() {
                stopSpeaking();
            });
        });
        
        document.querySelectorAll('.navbar-nav a').forEach(item => {
            item.addEventListener('mouseover', function() {
                const textToSpeak = this.innerText;
                speak(textToSpeak);
            });
            item.addEventListener('mouseout', function() {
                stopSpeaking(); 
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

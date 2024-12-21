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

        .form-control {
            border-color: #92374D;
        }
    </style>
</head>
<body>
    @include('partials.navbar')

    <div class="container mt-4" style="padding: 30px 0px;">
        <div class="row align-items-center">
            <div class="col-sm-12 col-lg-6">
                <div class="container d-flex justify-content-center align-items-center">
                    <div class="card p-4 shadow" style="width: 30rem; border-color:#92374D;">
                      <h2 class="text-center mb-4">Register</h2>
                      <form>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" placeholder="Ajeng" required>
                            <label for="name">Nama Lengkap</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="loc" placeholder="Kelapa Gading" required>
                            <label for="loc">Location</label>
                        </div>
                        <div class="form-floating mb-3">
                          <input type="tel" class="form-control" id="handphone" placeholder="0815XXXXXXXX" required>
                          <label for="handphone">No. Handphone</label>
                        </div>
                        <div class="form-floating mb-3">
                          <input type="password" class="form-control" id="password" placeholder="Password" required>
                          <label for="password">Password</label>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3" style="gap: 10px;">
                            <div class="form-check" style="padding: 0px;">
                              <label class="form-check-label" for="rememberMe">Masukkan Tanggal Lahir</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="day" placeholder="01" required>
                                <label for="day">DD</label>
                            </div>
                            <p> / </p>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="month" placeholder="01" required>
                                <label for="month">MM</label>
                            </div>
                            <p> / </p>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="year" placeholder="2024" required>
                                <label for="year">YYYY</label>
                            </div>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="policy">
                            <label class="form-check-label" for="policy">Saya setuju dengan <a href=#>Privacy Policy</a> dan <a href=#>Terms & Conditions</a></label>
                        </div>
                        <div class="d-grid">
                          <button type="submit" class="btn" style="background-color: #92374D; color: white; margin-top: 15px;">Daftar</button>
                        </div>
                      </form>
                      <p class="text-center mt-3">
                        Belum punya akun? <a href="#" class="text-decoration-none">Daftar</a>
                      </p>
                    </div>
                  </div>                
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="p-3 text-center">
                    <img src="{{ asset('images/logoblue.png') }}" alt="Logo" style="height: 200px;"> 
                    <p style="padding-top: 25px;"> Mari kita dukung impian mereka! Dengan membeli, Anda telah berperan besar dalam hidup mereka. </p>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

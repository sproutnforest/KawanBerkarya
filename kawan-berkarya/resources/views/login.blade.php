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
    </style>
</head>
<body>
    @include('partials.navbar')

    <div class="container mt-4" style="padding: 30px 0px;">
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <div class="container d-flex justify-content-center align-items-center">
                    <div class="card p-4 shadow" style="width: 22rem;">
                      <h2 class="text-center mb-4">Login</h2>
                      <form>
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control" id="username" placeholder="name@example.com" required>
                          <label for="username"><i class="bi bi-person"></i> No. Handphone/Username/Email</label>
                        </div>
                        <div class="form-floating mb-3">
                          <input type="password" class="form-control" id="password" placeholder="Password" required>
                          <label for="password"><i class="bi bi-lock-fill me-2"></i>Password</label>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="rememberMe">
                              <label class="form-check-label" for="rememberMe">Remember Me</label>
                            </div>
                            <a href="#" class="text-decoration-none">Forgot Password?</a>
                          </div>
                        <div class="d-grid">
                          <button type="submit" class="btn" style="background-color: #92374D; color: white;"><i class="bi bi-box-arrow-in-right me-2"></i>Log In</button>
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

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Libero</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons --> 
  <link href="assets/img/libero.png" rel="icon">
  <link href="assets/img/libero.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="http://fonts.cdnfonts.com/css/brandon-grotesque-regular" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/plugins/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Scripts here -->
  <script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
  <script src="assets/js/jquery-3.6.0.min.js"></script>
</head>

<body>

  <main>
    <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
  
              <div class="d-flex justify-content-center py-4">
                <a href="/" class="logo d-flex align-items-center w-auto">
                  <span class="d-none d-lg-block">LIBERO</span>
                </a>
              </div>

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-2 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your credentials to login</p>
                  </div>

                  <form class="row g-3" id="login-form" method="POST">
                    <div class="col-12">
                      <label for="username" class="form-label">Username</label>
                      <div class="input-group">
                        <input type="text" name="username" class="form-control" id="username" required>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password" required>
                    </div>

                    <div class="col-12">
                      <button class="btn w-100 mt-3" type="submit" id="login-btn" style="background-color: #0a233d; color: white;">Login</button>
                    </div>

                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="/register">Create an account</a></p>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="btn-group-fab" role="group" aria-label="FAB Menu">
      <div>
        <a href="/">
          <button type="button" class="btn btn-main btn-primary has-tooltip" data-placement="left" title="Back to Homepage"><i class="bi bi-box-arrow-in-left" style="font-size: 25px;"></i></button>
        </a>
      </div>
    </div>
  </main><!-- End #main -->
  <!-- Template Main JS File -->
  <script type="module" src="assets/js/login.js?v=1.0"></script>
  
</body>

</html>
<style>
  .btn-group-fab {
  position: fixed;
  width: 50px;
  height: auto;
  right: 20px; bottom: 20px;
}
.btn-group-fab div {
  position: relative; width: 100%;
  height: auto;
}
.btn-group-fab .btn {
  position: absolute;
  bottom: 0;
  border-radius: 50%;
  display: block;
  margin-bottom: 4px;
  width: 40px; height: 40px;
  margin: 4px auto;
}
.btn-group-fab .btn-main {
  width: 60px; height: 60px;
  right: 50%; margin-right: -25px;
  z-index: 9;
}
</style>
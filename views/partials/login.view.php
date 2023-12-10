<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title>EverythingHere</title>

  <!-- ===============================================-->
  <!--    Favicons-->
  <!-- ===============================================-->
  <link rel="apple-touch-icon" sizes="180x180" href="views/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="views/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="views/img/favicons/favicon-16x16.png">
  <link rel="shortcut icon" type="image/x-icon" href="views/img/favicons/favicon.ico">
  <link rel="manifest" href="views/img/favicons/manifest.json">
  <meta name="msapplication-TileImage" content="views/img/favicons/mstile-150x150.png">
  <meta name="theme-color" content="#ffffff">
  <script src="views/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="views/vendors/simplebar/simplebar.min.js"></script>
  <script src="views/js/config.js"></script>

  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
  <link href="views/vendors/simplebar/simplebar.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  <link href="views/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
  <link href="views/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
  <link href="views/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
  <link href="views/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
  <script>
    var phoenixIsRTL = window.config.config.phoenixIsRTL;
    if (phoenixIsRTL) {
      var linkDefault = document.getElementById('style-default');
      var userLinkDefault = document.getElementById('user-style-default');
      linkDefault.setAttribute('disabled', true);
      userLinkDefault.setAttribute('disabled', true);
      document.querySelector('html').setAttribute('dir', 'rtl');
    } else {
      var linkRTL = document.getElementById('style-rtl');
      var userLinkRTL = document.getElementById('user-style-rtl');
      linkRTL.setAttribute('disabled', true);
      userLinkRTL.setAttribute('disabled', true);
    }
  </script>
</head>

<body>
  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <main class="main" id="top">
    <div class="container">
      <div class="row flex-center min-vh-100 py-5">
        <div class="col-sm-10 col-md-8 col-lg-5 col-xl-5 col-xxl-3">
          <form action="LoginController" method="post">
            <a class="d-flex flex-center text-decoration-none mb-4" href="index-2.html">
              <div class="d-flex align-items-center fw-bolder fs-5 d-inline-block"><img src="views/img/icons/logoETE.png" alt="phoenix" width="100" /></div>
            </a>
            <div class="text-center mb-7">
              <h3 class="text-1000">Loguear</h3>
              <p class="text-700">Accede a tu cuenta</p>
            </div>
            <button class="btn btn-phoenix-secondary w-100 mb-3"><span class="fab fa-google text-danger me-2 fs--1"></span>Loguea con Google</button>
            <button class="btn btn-phoenix-secondary w-100"><span class="fab fa-facebook text-primary me-2 fs--1"></span>Loguea con Facebook</button>
            <div class="position-relative">
              <hr class="bg-200 mt-5 mb-4" />
              <div class="divider-content-center">o usa tu correo</div>
            </div>
            <div class="mb-3 text-start">
              <label class="form-label" for="email">Correo electrónico</label>
              <div class="form-icon-container">
                <input class="form-control form-icon-input" id="email" name="correo" type="email" autocomplete="email" placeholder="nombre@ejemplo.com" />
                <span class="fas fa-user text-900 fs--1 form-icon"></span>
              </div>
            </div>
            <div class="mb-3 text-start">
              <label class="form-label" for="password">Contraseña</label>
              <div class="form-icon-container">
                <input class="form-control form-icon-input" id="password" name="contrasena" type="password" placeholder="Contraseña" />
                <span class="fas fa-key text-900 fs--1 form-icon"></span>
              </div>
            </div>
            <div class="row flex-between-center mb-7">
              <div class="col-auto">
                <div class="form-check mb-0"><input class="form-check-input" id="basic-checkbox" name="recordar" type="checkbox" checked="checked" /><label class="form-check-label mb-0" for="basic-checkbox">Recordar</label></div>
              </div>
              <div class="col-auto"><a class="fs--1 fw-semi-bold" href="olvidar-contrasena">¿Olvidaste tu contraseña?</a></div>
            </div>
            <button class="btn btn-primary w-100 mb-3" type="submit">Entrar</button>
            <div class="text-center"><a class="fs--1 fw-bold" href="sign-up">Crear una cuenta</a></div>
          </form>
        </div>
      </div>
    </div>
  </main>
  <!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->

  <!-- ===============================================-->
  <!--    JavaScripts-->
  <!-- ===============================================-->
  <script src="views/vendors/popper/popper.min.js"></script>
  <script src="views/vendors/bootstrap/bootstrap.min.js"></script>
  <script src="views/vendors/anchorjs/anchor.min.js"></script>
  <script src="views/vendors/is/is.min.js"></script>
  <script src="views/vendors/fontawesome/all.min.js"></script>
  <script src="views/vendors/lodash/lodash.min.js"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
  <script src="views/vendors/list.js/list.min.js"></script>
  <script src="views/vendors/feather-icons/feather.min.js"></script>
  <script src="views/vendors/dayjs/dayjs.min.js"></script>
  <script src="views/js/phoenix.js"></script>
  <script>
    document.addEventListener("keyup", function(event) {
      if (event.keyCode === 13) {
        validaLogin();
      }
    });
  </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title>Phoenix</title>

  <!-- ===============================================-->
  <!--    Favicons-->
  <!-- ===============================================-->
  <link rel="apple-touch-icon" sizes="180x180" href="views/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="views/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="views/img/favicons/favicon-16x16.png">
  <link rel="shortcut icon" type="image/x-icon" href="views/img/favicons/favicon.ico">
  <link rel="manifest" href="./img/favicons/manifest.json">
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
        <div class="col-sm-10 col-md-8 col-lg-5 col-xxl-4"><a class="d-flex flex-center text-decoration-none mb-4" href="index-2.html">
            <div class="d-flex align-items-center fw-bolder fs-5 d-inline-block"><img src="views/img/icons/logo.png" alt="phoenix" width="58" /></div>
          </a>
          <div class="px-xxl-5">
            <div class="text-center mb-6">
              <h4 class="text-1000">¿Olvidaste tu contraseña?</h4>
              <p class="text-700 mb-5">Introduce tu correo y te enviaremos <br class="d-sm-none" />el enlaces para resetearla</p>
              <form class="d-flex align-items-center mb-5"><input class="form-control flex-1" id="email" type="email" placeholder="Correo" /><button class="btn btn-primary ms-2">Enviar<span class="fas fa-chevron-right ms-2"></span></button></form><a class="fs--1 fw-bold" href="#!">¿Sigues teniendo problemas?</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="support-chat-container">
      <div class="container-fluid support-chat">
        <div class="card bg-white">
          <div class="card-header d-flex flex-between-center px-4 py-3 border-bottom">
            <h5 class="mb-0 d-flex align-items-center gap-2">Demo widget<span class="fa-solid fa-circle text-success fs--3"></span></h5>
            <div class="btn-reveal-trigger"><button class="btn btn-link p-0 dropdown-toggle dropdown-caret-none transition-none d-flex" type="button" id="support-chat-dropdown" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h text-900"></span></button>
              <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="support-chat-dropdown"><a class="dropdown-item" href="#!">Request a callback</a><a class="dropdown-item" href="#!">Search in chat</a><a class="dropdown-item" href="#!">Show history</a><a class="dropdown-item" href="#!">Report to Admin</a><a class="dropdown-item btn-support-chat" href="#!">Close Support</a></div>
            </div>
          </div>
          <div class="card-body chat p-0">
            <div class="d-flex flex-column-reverse scrollbar h-100 p-3">
              <div class="text-end mt-6"><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                  <p class="mb-0 fw-semi-bold fs--1">I need help with something</p><span class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
                </a><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                  <p class="mb-0 fw-semi-bold fs--1">I can’t reorder a product I previously ordered</p><span class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
                </a><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                  <p class="mb-0 fw-semi-bold fs--1">How do I place an order?</p><span class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
                </a><a class="false d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                  <p class="mb-0 fw-semi-bold fs--1">My payment method not working</p><span class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
                </a></div>
              <div class="text-center mt-auto">
                <div class="avatar avatar-3xl status-online"><img class="rounded-circle border border-3 border-white" src="ProyectoPHP/assets/img/team/30.webp" alt="" /></div>
                <h5 class="mt-2 mb-3">Eric</h5>
                <p class="text-center text-black mb-0">Ask us anything – we’ll get back to you here or by email within 24 hours.</p>
              </div>
            </div>
          </div>
          <div class="card-footer d-flex align-items-center gap-2 border-top ps-3 pe-4 py-3">
            <div class="d-flex align-items-center flex-1 gap-3 border rounded-pill px-4"><input class="form-control outline-none border-0 flex-1 fs--1 px-0" type="text" placeholder="Write message" /><label class="btn btn-link d-flex p-0 text-500 fs--1 border-0" for="supportChatPhotos"><span class="fa-solid fa-image"></span></label><input class="d-none" type="file" accept="image/*" id="supportChatPhotos" /><label class="btn btn-link d-flex p-0 text-500 fs--1 border-0" for="supportChatAttachment"> <span class="fa-solid fa-paperclip"></span></label><input class="d-none" type="file" id="supportChatAttachment" /></div><button class="btn p-0 border-0 send-btn"><span class="fa-solid fa-paper-plane fs--1"></span></button>
          </div>
        </div>
      </div><button class="btn p-0 border border-200 btn-support-chat"><span class="fs-0 btn-text text-primary text-nowrap">Chat demo</span><span class="fa-solid fa-circle text-success fs--1 ms-2"></span><span class="fa-solid fa-chevron-down text-primary fs-1"></span></button>
    </div>
  </main><!-- ===============================================-->
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
</body>

</html>
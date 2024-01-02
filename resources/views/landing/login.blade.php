<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
  />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="{{ url('public') }}/assets/config/mobiriseicons/24/mobirise/style.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <link rel="stylesheet" href="{{ url('public') }}/assets/config/output.css">
      @vite('resources/css/app.css')

</head>
<body class="login-screen">
    

    <section class="login-box">
        <div class="login-header">
            <img src="{{ url('public') }}/assets/config/images/logo/logos.png" alt="" class="w-[60px]">
            <h2 class="text-blue-500 font-bold text-2xl mt-3">MANGROVE CENTER</h2>
        </div>
        <form action="{{ url('/login') }}" method="POST">
            @csrf
            <div class="form-group">
                <div class="input-icons">
                    <i class="material-icons">email</i>
                </div>
                <input type="email" name="email" class="form-control" id="email" placeholder="Masukan email ....">
            </div>
            <div class="form-group">
                <div class="input-icons">
                    <i class="material-icons">lock</i>
                </div>
                <input type="password" name="password" class="form-control" id="password" placeholder="Masukan password ....">
                <span class="password-show">
                    <i class="material-icons">visibility_off</i>
                </span>
            </div>
            <div class="input-remember">
                <div class="form-remember">
                    <input type="checkbox" name="" id="">
                    <span class="ck"></span>
                    <span class="tx">Ingatkan Saya !</span>
                </div>
                <a href="#" class="forgot-btn">Lupa password ?</a>
            </div>
            <button class="btn-login">SIGN-IN</button>
        </form>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
  // Optional parameters
        direction: 'horizontal',
        loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.slide-next',
    prevEl: '.slide-prev',
  },

  // And if we need scrollbar
  scrollbar: false,
});

AOS.init();
    </script>
</body>
</html>
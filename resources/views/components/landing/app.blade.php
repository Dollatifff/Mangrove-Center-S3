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
    {{-- @vite('resources/css/app.css') --}}

</head>
<body id="home">
    
    <nav class="navbar">
        <div class="navbar-left">
            <span class="brand">MANGROVE CENTER</span>
            <button class="nav-button-toggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        <div class="navbar-right">
            <ul class="nav-component">
                <li>
                    <a href="#home">
                        <span>BERANDA</span>
                    </a>
                </li>
                <li>
                    <a href="#feature">
                        <span>TENTANG KAMI</span>
                    </a>
                </li>
                <li>
                    <a href="#berita">
                        <span>KATALOG POHON</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span>EVENT</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('login') }}">
                        <span>LOGIN</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    {{ $slot }}

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
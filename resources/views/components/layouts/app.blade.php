<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mangrove Center</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="{{ url('public') }}/admin_assets/datepicker/dist/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{ url('public') }}/admin_assets/css/custom.css">
    
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <style>
        .leaflet-control-attribution.leaflet-control{
            display: none !important;
        }
    </style>
</head>
<body class="app">
    
    <x-layouts.sidebar />
    <section class="content">
        
        <x-layouts.navbar />
        <section class="content-container">
           {{  $slot }}
        </section>
    </section>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{ url('public') }}/admin_assets/datepicker/dist/js/bootstrap-datepicker.js"></script>
    <script>
        $('.btn-coolapse').on('click', function(){
            $('.app').toggleClass('closes')
        })
        
        const width = $(window).innerWidth();

        if(width < 400) {
            $('.app').addClass('closes')
    } else {
        $('.app').removeClass('closes')
    }


    $('.dataTables').DataTable( {
        responsive: true
    } );

    $('#datepicker').datepicker({
        format: 'DD/MM/YYYY HH:mm'
    });
    </script>
</body>
</html>
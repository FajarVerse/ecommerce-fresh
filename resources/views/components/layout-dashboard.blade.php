@props(['title'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <title>Argon Dashboard 3 by Creative Tim</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <!-- Nucleo Icons -->
    <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- CSS Files -->
    {{-- <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.1.0" rel="stylesheet" /> --}}
    @vite('resources/css/dashboard/argon-dashboard.css?v=2.1.0')
</head>

<body class="g-sidenav-show bg-gray-100">
    <div class="min-height-300 bg-dark position-absolute w-100"></div>

    <x-sidebar-dashboard></x-sidebar-dashboard>

    <!-- buatComponent Layout Dashboard (ambil tag main nya aja) -->
    <main class="main-content position-relative border-radius-lg">
        <x-nav-dashboard title="{{ $title }}"></x-nav-dashboard>
        {{ $slot }}
    </main>

    <!--   Core JS Files   -->
    {{-- <script src="../assets/js/core/popper.min.js"></script>
      <script src="../assets/js/core/bootstrap.min.js"></script>
      <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
      <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script> --}}
    <script>
        var win = navigator.platform.indexOf("Win") > -1;
        if (win && document.querySelector("#sidenav-scrollbar")) {
            var options = {
                damping: "0.5",
            };
            Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
        }
    </script>
    @vite('resources/js/dashboard/core/popper.min.js')
    @vite('resources/js/dashboard/core/bootstrap.min.js')
    @vite('resources/js/dashboard/plugins/perfect-scrollbar.min.js')
    @vite('resources/js/dashboard/plugins/smooth-scrollbar.min.js')

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    {{-- <script src="../assets/js/argon-dashboard.min.js?v=2.1.0"></script> --}}
    @vite('resources/js/dashboard/argon-dashboard.min.js?v=2.1.0')
</body>


</html>

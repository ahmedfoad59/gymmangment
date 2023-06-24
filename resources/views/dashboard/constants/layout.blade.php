
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href={{asset("admin/images/dashboard/favicon.png")}} type="image/x-icon">
    <link rel="shortcut icon" href={{asset("admin/images/dashboard/favicon.png")}} type="image/x-icon">
    <title>Admin Gym </title>

    <!-- Google font-->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,500;1,600;1,700;1,800;1,900&display=swap">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
<!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href={{asset("admin/css/vendors/font-awesome.css")}}>

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href={{asset("admin/css/vendors/flag-icon.css")}}>

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href={{asset("admin/css/vendors/icofont.css")}}>

    <!-- Prism css-->
    <link rel="stylesheet" type="text/css" href={{asset("admin/css/vendors/prism.css")}}>

    <!-- Chartist css -->
    <link rel="stylesheet" type="text/css" href={{asset("admin/css/vendors/chartist.css")}}>

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href={{asset("admin/css/vendors/bootstrap.css")}}>

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href={{asset("admin/css/style.css")}}>
</head>

<body>

    <!-- page-wrapper Start-->
    <div class="page-wrapper">


        <!-- Page Body Start-->
        <div class="page-body-wrapper">

            <!--    -->
            @include('dashboard.constants.sidebar')
            @include('dashboard.constants.header')
            <!--    -->


            <div class="page-body">
            @yield('content')
            </div>

            @include('dashboard.constants.footer')

        </div>
    </div>

    <!-- latest jquery-->
    <script src={{asset("admin/js/jquery-3.3.1.min.js")}}></script>

    <!-- Bootstrap js-->
    <script src={{asset("admin/js/bootstrap.bundle.min.js")}}></script>

    <!-- feather icon js-->
    <script src={{asset("admin/js/icons/feather-icon/feather.min.js")}}></script>
    <script src={{asset("admin/js/icons/feather-icon/feather-icon.js")}}></script>

    <!-- Sidebar jquery-->
    <script src={{asset("admin/js/sidebar-menu.js")}}></script>

    <!--chartist js-->
    <script src={{asset("admin/js/chart/chartist/chartist.js")}}></script>

    <!--chartjs js-->
    <script src={{asset("admin/js/chart/chartjs/chart.min.js")}}></script>

    <!-- lazyload js-->
    <script src={{asset("admin/js/lazysizes.min.js")}}></script>

    <!--copycode js-->
    <script src={{asset("admin/js/prism/prism.min.js")}}></script>
    <script src={{asset("admin/js/clipboard/clipboard.min.js")}}></script>
    <script src={{asset("admin/js/custom-card/custom-card.js")}}></script>

    <!--counter js-->
    <script src={{asset("admin/js/counter/jquery.waypoints.min.js")}}></script>
    <script src={{asset("admin/js/counter/jquery.counterup.min.js")}}></script>
    <script src={{asset("admin/js/counter/counter-custom.js")}}></script>

    <!--peity chart js-->
    <script src={{asset("admin/js/chart/peity-chart/peity.jquery.js")}}></script>

    <!-- Apex Chart Js -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <!--sparkline chart js-->
    <script src={{asset("admin/js/chart/sparkline/sparkline.js")}}></script>

    <!--Customizer admin-->
    <!-- <script src="assets/js/admin-customizer.js"></script> -->

    <!--dashboard custom js-->
    <script src={{asset("admin/js/dashboard/default.js")}}></script>

    <!--right sidebar js-->
    <script src={{asset("admin/js/chat-menu.js")}}></script>

    <!--height equal js-->
    <script src={{asset("admin/js/height-equal.js")}}></script>

    <!-- lazyload js-->
    <script src={{asset("admin/js/lazysizes.min.js")}}></script>

    <!--script admin-->
    <script src={{asset("admin/js/admin-script.js")}}></script>
</body>

</html>

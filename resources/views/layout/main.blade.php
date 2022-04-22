<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ $title }}</title>
    <link rel="shortcut icon" href="/img/pmii.png">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="/assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="/assets/modules/datatables/datatables.min.css">
    <link rel="stylesheet" href="/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">

    <link rel="stylesheet" href="/assets/modules/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="/assets/modules/codemirror/lib/codemirror.css">
    <link rel="stylesheet" href="/assets/modules/codemirror/theme/duotone-dark.css">
    <link rel="stylesheet" href="/assets/modules/jquery-selectric/selectric.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');

    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">

            @include('layout.navbar')
            @include('layout.sidebar')
            @yield('section')

            <footer class="main-footer text-center">
                Copyright &copy; PMII CABANG CIPUTAT {{ date('Y',time()) }}
                <P>Developer by <a href="https://instagram.com/wicaksanabimaarya">Programmer Sarungan</a></P>
                <div class="footer-left text-center">

                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="/assets/modules/jquery.min.js"></script>
    <script src="/assets/modules/popper.js"></script>
    <script src="/assets/modules/tooltip.js"></script>
    <script src="/assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="/assets/modules/moment.min.js"></script>
    <script src="/assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="/assets/modules/datatables/datatables.min.js"></script>
    <script src="/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
    <script src="/assets/modules/jquery-ui/jquery-ui.min.js"></script>

    <script src="/assets/modules/summernote/summernote-bs4.js"></script>
    <script src="/assets/modules/codemirror/lib/codemirror.js"></script>
    <script src="/assets/modules/codemirror/mode/javascript/javascript.js"></script>
    <script src="/assets/modules/jquery-selectric/jquery.selectric.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="/assets/js/page/modules-datatables.js"></script>

    <!-- Template JS File -->
    <script src="/assets/js/scripts.js"></script>
    <script src="/assets/js/custom.js"></script>
    <script src="/js/myscript.js"></script>
</body>

</html>
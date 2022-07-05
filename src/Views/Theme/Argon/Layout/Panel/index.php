<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Codeigniter 4 &amp; App Theme">
    <meta name="author" content="MrFrost">
    <meta name="keywords" content="codeigniter, bootstrap, bootstrap 5, theme, responsive, ui kit, web">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <title>Panel</title>
    <!-- Assets -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="<?= base_url('assets/argon') ?>/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?= base_url('assets/argon') ?>/css/nucleo-svg.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="<?= base_url('assets/argon') ?>/css/nucleo-svg.css" rel="stylesheet" />
    <link id="pagestyle" href="<?= base_url('assets/argon') ?>/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <aside
        class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
        id="sidenav-main">
        <?= view($config->theme['panel'] . 'sidebar') ?>
    </aside>
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
            data-scroll="false">
            <div class="container-fluid py-1 px-3">
                <?= view($config->theme['panel'] . 'navbar') ?>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <?= $this->renderSection('main') ?>
            <footer class="footer pt-3">
                <div class="container-fluid">
                    <?= view($config->theme['panel'] . 'footer') ?>
                </div>
            </footer>
        </div>
    </main>

    <!-- Assets -->
    <script src="<?= base_url('assets/argon') ?>/js/core/popper.min.js"></script>
    <script src="<?= base_url('assets/argon') ?>/js/core/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/argon') ?>/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url('assets/argon') ?>/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="<?= base_url('assets/argon') ?>/js/plugins/chartjs.min.js"></script>
    <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    </script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="<?= base_url('assets/argon') ?>/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>
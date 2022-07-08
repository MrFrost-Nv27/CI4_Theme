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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chartist/0.11.4/chartist.min.css"
        integrity="sha512-V0+DPzYyLzIiMiWCg3nNdY+NyIiK9bED/T1xNBj08CaIUyK3sXRpB26OUCIzujMevxY9TRJFHQIxTwgzb0jVLg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/c3/0.7.20/c3.min.css"
        integrity="sha512-cznfNokevSG7QPA5dZepud8taylLdvgr0lDqw/FEZIhluFsSwyvS81CMnRdrNSKwbsmc43LtRd2/WMQV+Z85AQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="<?= base_url('assets/materialpro') ?>/css/style.min.css" rel="stylesheet">
</head>

<body>
    <?= view($config->theme['panel'] . 'preloader') ?>
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin1"
        data-sidebartype="mini-sidebar" data-sidebar-position="fixed" data-header-position="fixed"
        data-boxed-layout="full" class="mini-sidebar">
        <header class="topbar" data-navbarbg="skin1">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <?= view($config->theme['panel'] . 'navbar') ?>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <?= view($config->theme['panel'] . 'sidebar') ?>
        </aside>
        <div class="page-wrapper" style="display: block;">
            <?= $this->renderSection('main') ?>
            <footer class="footer">
                <?= view($config->theme['panel'] . 'footer') ?>
            </footer>
        </div>
    </div>
    <div class="chat-windows hide-chat"></div>

    <!-- Assets -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="<?= base_url('assets/materialpro') ?>/js/app.min.js"></script>
    <script src="<?= base_url('assets/materialpro') ?>/js/app.init.js"></script>
    <script src="<?= base_url('assets/materialpro') ?>/js/app-style-switcher.js"></script>
    <script src="<?= base_url('assets/materialpro') ?>/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?= base_url('assets/materialpro') ?>/js/sparkline.js"></script>
    <script src="<?= base_url('assets/materialpro') ?>/js/waves.js"></script>
    <script src="<?= base_url('assets/materialpro') ?>/js/sidebarmenu.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartist/0.11.4/chartist.min.js"
        integrity="sha512-9rxMbTkN9JcgG5euudGbdIbhFZ7KGyAuVomdQDI9qXfPply9BJh0iqA7E/moLCatH2JD4xBGHwV6ezBkCpnjRQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/7.6.1/d3.min.js"
        integrity="sha512-MefNfAGJ/pEy89xLOFs3V6pYPs6AmUhXJrRlydI/9wZuGrqxmrdQ80zKHUcyadAcpH67teDZcBeS6oMJLPtTqw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/c3/0.7.20/c3.min.js"
        integrity="sha512-+IpCthlNahOuERYUSnKFjzjdKXIbJ/7Dd6xvUp+7bEw0Jp2dg6tluyxLs+zq9BMzZgrLv8886T4cBSqnKiVgUw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?= base_url('assets/materialpro') ?>/js/feather.min.js"></script>
    <script src="<?= base_url('assets/materialpro') ?>/js/custom.min.js"></script>
    <script src="<?= base_url('assets/materialpro') ?>/js/apexcharts.min.js"></script>
</body>

</html>
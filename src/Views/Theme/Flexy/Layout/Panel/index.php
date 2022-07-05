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
    <link href="<?= base_url('assets/flexy') ?>/css/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="<?= base_url('assets/flexy') ?>/css/style.min.css" rel="stylesheet">
</head>

<body>
    <?= view($config->theme['panel'] . 'preloader') ?>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <?= view($config->theme['panel'] . 'navbar') ?>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <?= view($config->theme['panel'] . 'sidebar') ?>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <?= $this->renderSection('main') ?>
            <footer class="footer text-center">
                <?= view($config->theme['panel'] . 'footer') ?>
            </footer>
        </div>
    </div>
    <!-- Assets -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="<?= base_url('assets/flexy') ?>/js/app-style-switcher.js"></script>
    <script src="<?= base_url('assets/flexy') ?>/js/waves.js"></script>
    <script src="<?= base_url('assets/flexy') ?>/js/sidebarmenu.js"></script>
    <script src="<?= base_url('assets/flexy') ?>/js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartist/0.11.4/chartist.min.js"
        integrity="sha512-9rxMbTkN9JcgG5euudGbdIbhFZ7KGyAuVomdQDI9qXfPply9BJh0iqA7E/moLCatH2JD4xBGHwV6ezBkCpnjRQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
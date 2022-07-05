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
    <link href="<?= base_url('assets/adminkit') ?>/css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>

    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <?= view($config->theme['panel'] . 'sidebar') ?>
            </div>
        </nav>
        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <?= view($config->theme['panel'] . 'navbar') ?>
            </nav>
            <main class="content">
                <div class="container-fluid p-0">
                    <?= $this->renderSection('main') ?>
                </div>
            </main>
            <footer class="footer">
                <div class="container-fluid">
                    <?= view($config->theme['panel'] . 'footer') ?>
                </div>
            </footer>
        </div>
    </div>

    <!-- Assets -->
    <script src="<?= base_url('assets/adminkit') ?>/js/app.js"></script>
</body>

</html>
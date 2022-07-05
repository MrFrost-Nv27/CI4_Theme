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
    <script defer src="<?= base_url('assets/architect') ?>/scripts/main.js"></script>
    <script defer src="<?= base_url('assets/architect') ?>/scripts/demo.js"></script>
    <script defer src="<?= base_url('assets/architect') ?>/scripts/toastr.js"></script>
    <script defer src="<?= base_url('assets/architect') ?>/scripts/scrollbar.js"></script>
    <script defer src="<?= base_url('assets/architect') ?>/scripts/chart_js.js"></script>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <?= view($config->theme['panel'] . 'header') ?>
        </div>
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <?= view($config->theme['panel'] . 'navbar') ?>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <?= view($config->theme['panel'] . 'sidebar') ?>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <?= $this->renderSection('main') ?>
                </div>
                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="app-footer__inner">
                            <?= view($config->theme['panel'] . 'footer') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Assets -->

</body>

</html>
<ul class="nav">
    <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
            <div class="nav-profile-image">
                <img src="<?= base_url('assets/purple') ?>/images/faces/face1.jpg" alt="profile">
                <span class="login-status online"></span>
                <!--change to offline or busy as needed-->
            </div>
            <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2">Nova Adi Saputra</span>
                <span class="text-secondary text-small">Project Manager</span>
            </div>
            <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#!">
            <span class="menu-title">Dashboard</span>
            <i class="mdi mdi-home menu-icon"></i>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false"
            aria-controls="general-pages">
            <span class="menu-title">Pages</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-medical-bag menu-icon"></i>
        </a>
        <div class="collapse" id="general-pages">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#!"> Login </a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="#!"> Register </a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item sidebar-actions">
        <span class="nav-link text-center">
            <a href="#!" class="btn btn-block btn-lg btn-gradient-primary mt-4" role="button">Logout</a>
        </span>
    </li>
</ul>
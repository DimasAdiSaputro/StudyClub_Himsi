<!-- Awal navbar -->
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
        <div class="row">
            <!-- Brand -->
            <a class="navbar-brand" href="#">Study Club</a>
    
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url(); ?>">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('auth/logout') ?>">Log Out</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</nav>
<!-- Akhir navbar -->
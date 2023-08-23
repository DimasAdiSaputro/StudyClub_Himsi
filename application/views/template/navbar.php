<!-- Awal Navbar -->
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
        <div class="row">
            <!-- Brand -->
            <a class="navbar-brand" href="<?= base_url('welcome') ?>">Home</a>
    
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('login') ?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('register') ?>">Register</a>
                    </li>
                </ul>
            </div>
            
        </div>
    </div>
</nav>
<!--Akhir navbar  -->
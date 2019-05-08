<?php
function Nav($ket){
?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        
        <a class="navbar-brand" href="#">Dashboard</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?php if($ket=="beranda"){ echo "active";} ?> ">
                        <a class="nav-link" href="index.php">Beranda </a>
                    </li>
                    <li class="nav-item <?php if($ket=="tentang"){ echo "active"; } ?>">
                        <a class="nav-link" href="index.php#tentang">Tentang </a>
                    </li>
                    <li class="nav-item <?php if($ket=="donasi"){ echo "active"; } ?>">
                        <a class="nav-link" href="index.php#donasi">Donasi </a>
                    </li>
                    <li class="nav-item <?php if($ket=="daftarbuku"){ echo "active"; } ?>">
                        <a class="nav-link" href="index.php#list">Daftar Buku </a>
                    </li>
                    <li class="nav-item <?php if($ket=="kontak"){ echo "active"; } ?>">
                        <a class="nav-link" href="index.php#kontak">Kontak </a>
                    </li>
                </ul>

                <div class="my-2 my-lg-0">
                    <a href="admin/index.php" class="btn btn-outline-success my-2 my-sm-0" style="color:aliceblue;">Login</a>
                </div>

        </div>
    </nav>

<?php
} ?>
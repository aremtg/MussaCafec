<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="./css/header.css">

<!-- CABEZERA -->
<header class="header">
    <div class="cabecera">
        <div class="logos">
            <img src="img/logoSena.svg" alt="">
            <span class="separa-logos"></span>
            <a href="index.php">Mussa Cafec</a>
        </div>
    <!-- espacio para menu hamburguesa -->
    <i class='bx bx-menu' id="btn"></i>
    </div>
    <div class="buscador">
        <i class='bx bx-search' ></i>
        <input type="text" placeholder="Buscar">
    </div>
    <ul class="nav">
        <li>
            <a href="index.php">
                <i class='bx bxs-home'></i>
               <span class="link_a">Inicio</span>
            </a>
            <span class="tooltip">Inicio</span>
        </li>
        <li id="dropdown">
                <a id="dropdown-trigger">
                    <i class='bx bxs-hand'></i>
                    <span class="link_a">Participa</span>
                    <img id="icon-dropdown" src="./img/row-bottom.png" alt="">
                </a>
            <ul id="dropdown-content">
                <li><a href="<?=base_url?>informacion">Informacion</a></li>
                <li><a href="<?=base_url?>semilleros">Semilleros</a></li>
                <li><a href="<?=base_url?>registrarme">Registrarme</a></li>
            </ul>
            <span class="tooltip">Participa</span>
        </li>
        <li class="">
            <a href="<?=base_url?>galeria">
                <i class='bx bxs-photo-album'></i>
                <span class="link_a">Galeria</span>
            </a>
            <span class="tooltip">Galeria</span>
        </li>
        <li>
            <a href="<?=base_url?>nosotros">
                <i class='bx bxs-info-circle'></i>
                <span class="link_a">Nosotros</span>
            </a>
            <span class="tooltip">Nosotros</span>
        </li>
        <li>
            <a href="<?=base_url?>admin">
                <i class='bx bx-task'></i>
                <span class="link_a">Admin</span>
            </a>
            <span class="tooltip">Admin</span>
        </li>
    </ul>
    <div class="box-perfil">
        <a href="<?=base_url?>perfil">
            <img class="user-icon" src="img/usuario.svg" alt="">
        </a>
        <span class="tooltip">Perfil</span>
    </div>
</header>
<script src="./js/navbar.js"></script>
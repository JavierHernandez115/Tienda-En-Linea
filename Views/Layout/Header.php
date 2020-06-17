<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Tienda de Camiseta</title>
        <link rel="stylesheet" href="<?= BaseUrl ?>assets/css/styles.css"/>
    </head>
    <body>
        <div id="Container">
            <!--Cabecera-->
            <header id="Header">
                <div id="Logo">
                    <img src="<?= BaseUrl ?>assets/img/camiseta.png" alt="Camiseta Logo">
                    <a href="<?= BaseUrl ?>">
                        Tienda de camiseta
                    </a>
                </div>
            </header>

            <!--Menu-->
            <nav id="Menu">
                <ul>
                    <li>
                        <a href="<?= BaseUrl ?>">Inicio</a>
                    </li>

                    <?php
                    $Categoria = Utils::ShowCategorias();
                    while ($Cat = $Categoria->fetch_object()):
                        ?>
                        <li>
                            <a href="<?= BaseUrl?>Categoria/Ver&Id=<?=$Cat->Id?>"><?=$Cat->Nombre?></a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </nav>
            <div id="Content">

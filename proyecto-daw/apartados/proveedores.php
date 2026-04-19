<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proveedores</title>
    <link rel="icon" href="../img/ferreteria.png">
    <link href="../bootstrap-5.3.8-dist/bootstrap-5.3.8-dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <style>
        .contenedor {
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php require_once '../php/header.php';?>
    <main class="contenedor my-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <section class="contenido-proveedores shadow-sm">
                    <h1>Esta es nuestra lista de proveedores:</h1>
                    <p>En Ferretería García, nos importa tu seguridad y la calidad de nuestros productos.</p>
                    <p>Por eso seleccionamos cuidadosamente a nuestros colaboradores. A continuación, te presentamos a las marcas que nos proveen y nos garantizan la excelencia en cada herramienta.</p>
                </section>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="../img/fogosur.png" class="card-img-top" alt="Fogosur">
                    <div class="card-body text-center">
                        <details>
                            <summary>Más información acerca de Fogosur:</summary>
                                <p>Historia y especialidad:</p>
                                <br>
                                <p>Compromiso de calidad:</p>
                        </details>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="../img/ktl.png" class="card-img-top" alt="Ktl">
                    <div class="card-body text-center">
                        <details>
                            <summary>Más información acerca de KTL:</summary>
                                <p>Historia y especialidad:</p>
                                <br>
                                <p>Compromiso de calidad:</p>
                        </details>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="../img/supra.png" class="card-img-top" alt="Supra">
                    <div class="card-body text-center">
                        <details>
                            <summary>Más información acerca de Supra:</summary>
                                <p>Historia y especialidad:</p>
                                <br>
                                <p>Compromiso de calidad:</p>
                        </details>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="../img/elefante.png" class="card-img-top" alt="Elefante">
                    <div class="card-body text-center">
                        <details>
                            <summary>Más información acerca de Simon Rack:</summary>
                                <p>Historia y especialidad:</p>
                                <br>
                                <p>Compromiso de calidad:</p>
                        </details>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="../img/imprex.png" class="card-img-top" alt="Imprex">
                    <div class="card-body text-center">
                       <details>
                            <summary>Más información acerca de Imprex:</summary>
                                <p>Historia y especialidad:</p>
                                <br>
                                <p>Compromiso de calidad:</p>
                        </details>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require_once '../php/footer.php'; ?>
    </body>
</html>


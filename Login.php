



<!doctype html>
<html lang="es">

<head>
    <title>WhatsApp2</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <link rel="stylesheet" href="css/styles_Login.css">
   
    <a href="index.php" class="btn btn-outline-warning btn-darkgit btn-lg px-4 me-md-2" role="button" id="Back_button">Volver</a>
</head>

<body class="text-center" >

   <main>   
    <div class="container"></div>
   </main>
    
    
    <body class="text-center" id="hero">
        
    
        <div class="container">
            <div class="row">
                
                <div class="col">
                    <div class="form-signin bg-dark">
                        <form method="post">
                            <img class="Form-Scrip mb-4 rounded-circle" src="img/WhatsApp2_logo.png" alt="" width="72">
                            <h1 class="h1 mb-2 fw-large">Inicia sesión</h1>
                            <?php
                                include("app/controlador_login.php");
                            ?>
                            <div class="form-floating" id="Usuario">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                                <label for="floatingInput">Correo</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                                <label for="floatingPassword">Contraseña</label>
                            </div>
                
                           
                            <button class="w-100 btn btn-lg btn-dark" type="submit" name="enviar">Inicia</button>
                            <p class="mt-5 mb-3 text-muted">&copy; 2023 UNET</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>
</body>

</html>
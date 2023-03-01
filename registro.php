<!doctype html>
<html lang="es">

<head>
    <title>PageTitle</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- Convert this to an external style sheet -->
    <link rel="stylesheet" href="css/Styles_registro.css">
    <!--Validacion de JAVASRIPT--->
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>

    <script src="js/validacion.js" defer></script>


     <nav class="navbar navbar-expand-md navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img  class="Logotipo rounded-circle" src="img/WhatsApp2_logo.png" alt="Logo">

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">HomeX</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Inform.html">Información</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registro.php">Registrate</a>
                    </li>
                  
                </ul>
            </div>
        </div>
    </nav>
    
</head>

<body>
   
    <!-- ======= Hero Section ======= -->
   
    
        <main id="hero">
            <div class="container col-xxl-8 px-4 py-5">
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                    <div class="col-10 col-sm-8 col-lg-6">
                        <img src="img/Registro_web.png"
                            class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500"
                            loading="lazy">
                    </div>
                    <div class="col-lg-6">
                        <h1 class="display-5 fw-bold lh-1 mb-3">Registrese</h1>
                        <p class="lead"> Para poder continuar es necesario que te registre
                        </p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                            
                        </div>
                    </div>
                </div>
            </div>
        </main>
       
     
            <div class="container" id="Lmao">
                <form class="row g3-mt-3" action="app/controlador_registro_usuario.php" method="post" id="registro" novalidate>
               
                
                <div class="form-registro bg-dark">
                    <div class="col-12">
                        <label for="emailInput" class="form-label">Email</label>
                        <input type="email" class="form-control" id="emailImput" name="email" id="email">
                    </div>
    
                    <div class="col-12">
                        <label for="inputPass" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="passwordInput" name="password" id="password">
                    </div>
    
                    <div class="col-12">
                        <label for="tex" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombreInput" name="nombre" id="nombre">
                    </div>
    
                    <div class="col-12">
                        <div class="form-check">   
                            <input type="checkbox" class="form-check-input" id="checkTermns">
                            <label for="checkTermns">Acepto los terminos y condiciones</label>
    
                        </div>
                     
                    </div>
    
                    <div class="col-12">
                        <input class="button" type="submit"  name="registro">
                        
                        </div>
                   
                 
                        </div>
                  
                </form>
            </div>
           
            


        
    
            <footer>
      
      
      <div class="container">
        <div class="row altura-a-b">
          <div class="col-12 col-sm-3">
            <img class="Logotipo" src="img/UNET.png" alt="Bombilla">  
          </div>
          <div class="col-12 col-sm-3">
            <p>Universidad Experimental Nacional del Táchira</p>
          </div>
          <div class="col-12 col-sm-3">
           
          </div>
        </div>
      </div>
    
    </footer>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>

</html>
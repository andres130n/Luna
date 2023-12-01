<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Bienvenido a su portal Laboratorio B & T.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Theme Config Js -->
    <script src="js/config.js"></script>

    <!-- App css -->
    <link href="css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="authentication-bg pb-0">

    <div class="auth-fluid">
        <!--Auth fluid left content -->
        <div class="auth-fluid-form-box">
            <div class="card-body d-flex flex-column h-100 gap-3">

                <!-- Logo -->
                <div class="auth-brand text-center text-lg-start">
                    <a href="#" class="logo-dark">
                        <span><img src="webroot/img/logo.png" alt="dark logo" height="22"></span>
                    </a>
                    <a href="#" class="logo-light">
                        <span><img src="webroot/img/logo.png" alt="logo" height="22"></span>
                    </a>
                </div>

                <div class="my-auto">
                    <!-- title-->
                    <h4 class="mt-0">Bienvenido:</h4>
                    <p class="text-muted mb-4">Presentamos una solución de calidad, flexible y escalable para su negocio, independiente al sistema informatico que utiliza.</p>

                    <p class="text-muted mb-4">Se trata de una propuesta creativa para consultar sus comprobantes electronicos, preservando la naturaleza,  disminuyendo el consumo de los recursos de su negocio.</p>
                    <!-- form -->
                    <form action="php/login.php" method = "post">
                        <div class="mb-3">
                            
                            <input class="form-control" type="text" id="username" name="username" required="" placeholder="Usuario y/o Correo">
                        </div>
                        <div class="mb-3">
                           
                           
                            <input class="form-control" type="password" required="" id="password" name="password" placeholder="Clave">
                        </div>
                        
                        <div class="d-grid mb-0 text-center">
                            <button class="btn btn-primary" type="submit"> Ingresar </button>
                        </div>
                        <!-- social-->
                       
                    </form>
                    <!-- end form-->
                </div>

                <!-- Footer-->
                <footer class="footer footer-alt">
                    <p class="text-muted">Aun no tienes Usuario? <a href="pages-register-2.html" class="text-muted ms-1"><b>Registrate</b></a></p>
                </footer>

            </div> <!-- end .card-body -->
        </div>
        <!-- end auth-fluid-form-box-->

        <!-- Auth fluid right content -->
        <div class="auth-fluid-right text-center">
            <div class="auth-user-testimonial">
                <h2 class="mb-3">Laboratorio B & T.</h2>
                <p class="lead">Información disponible 24 horas/ 7 días a la semana. 
                </p>
                <p>
                    
                </p>
            </div> <!-- end auth-user-testimonial-->
        </div>
        <!-- end Auth fluid right content -->
    </div>
    <!-- end auth-fluid-->
    <!-- Vendor js -->
    <script src="vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>
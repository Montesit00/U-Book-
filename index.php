<?php
    session_start();

    if(isset($_SESSION['logueado'])){
       header('Location: html/central.php'); 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U-Book</title>
    <!--Icono de pestaña-->
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" href="galeria/uBook_Icon3.png">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>

    <div class="container w-75 bg-primary mt-5 rounded shadow">
        <div class="row align-items-stretch">
            
            <div class="col bg-white p-5 rounded-end">
                <!--icono--> 
                <div class="text-center">
                    <img src="/galeria/uBook_Icon3.png"  alt="" class="img-fluid">
                </div>

                <h2 class="fw-bold text-center py-5">Bienvenido</h2>
                <!--Formulario-->
                <div class="row">
                    <div class="col-12 d-none d-lg-block col-md-6 rounded">
                        <img src="./galeria/principal.jpeg" alt="" class="img-fluid">
                    </div>


                    <form action="php/login.php" method="POST" class="col-12 col-lg-6">
                        <div class="mb-4  ">
                            <label for="email" class="form-label">Correo Electronico</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="mb-4 form-check">
                            <input type="checkbox" name="connected" class="form-check-input" >
                            <label for="connected" class="form-check-label">Mantenerme Conectado</label>
                        </div>
                        <div class="d-grid">
                            
                            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                        
                        </div>
                    </form>
                    
                        <div class="my-3">
                            <span>No tiene cuenta? <a class="nav-link active" aria-current="page" id="registro" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Regístrate</a></span>
                         <!--InicioModalRegistro-->
                           
                              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header" id="modalHeader">  
                                      <h4 class="modal-title" style="text-align:center;"  id="staticBackdropLabel">Registrarte</h4>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    
                                    <div class="modal-body containerRegistro" >
                                      <form  class="row col-12 col-lg-6" id="formularioRegistro" action="php/registro.php" method="post">
                                              <!--prueba de formulario--> 
                                                <!--Apellido y Nombre-->
                                                <div class="col-12">
                                                    <label for="usuarioInput" class="form-label">Apellido y Nombre</label>
                                                    <input type="text" name="nombre" class="form-control" id="usuario" placeholder="Ingrese su Apellido">
                                                </div>
                                                <!--Correo-->
                                                <div class="col-12">
                                                    <label for="emailInput" class="form-label">Correo</label>
                                                    <input type="email" name="email" class="form-control" id="email" placeholder="Ingrese su correo">
                                                </div>
                                                <!--Contraseña-->
                                                <div class="col-12">
                                                    <label for="passwordInput" class="form-label">Contraseña</label>
                                                    <input type="password" name="password" class="form-control" id="password" placeholder="Ingrese su contraseña">
                                                </div>
                                                <!--ConfirmarContraseña-->
                                                <div class="col-12">
                                                    <label for="passwordInput" class="form-label">Confirma tu Contraseña</label>
                                                    <input type="password" name="confirPassword" class="form-control" id="confirPassword" placeholder="Ingrese de nuevo contraseña">
                                                </div>
                                                <!--BotondeCondicioes-->
                                                <div class="col-12">
                                                    <div class="form-check">
                                                        <input type="checkbox" id="checkTerminos" class="form-check-input">
                                                        <label for="checkTerminos" class="form-check-label">Acepto los terminos y condiciones</label>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary" id="registrarse">Registrarse</button>
                                                </div>
                                            <!--Alerta-->
                                           
                                            <div class="alert alert-success" name="alertregis" id="alertregis" role="alert" hidden>Usted se ha registrado exitosamente.</div>
                                      </form>
                                      <!--PHPREGISTRO-->
                                
                                    </div>
                                    <div class="modal-footer" id="modalFooter">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--FinModalRegistro-->

                        </div>
                    </form>
                
                    <!--Login de redes--->
                </div>
                

                <div class="container w-100 my-5">
                    <div class="row text-center">
                        <div class="col-12">Iniciar Sesión</div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-outline-primary w-100 my-1">
                                <div class="row align-items-center">
                                    <div class="col-2 d-none d-md-block">
                                        <i class="bi bi-facebook"></i>
                                    </div>
                                    <div class="col-12 col-md-10 text-center">
                                        Facebook
                                    </div>
                                </div>
                            </button>
                        </div>
                        <div class="col">
                            <button class="btn btn-outline-danger w-100 my-1">
                                <div class="row align-items-center">
                                    <div class="col-2 d-none d-md-block">
                                        <i class="bi bi-google"></i>
                                    </div>
                                    <div class="col-12 col-md-10 text-center">
                                        Google
                                    </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



<!--JSextras-->
<script src="/js/registro.js"></script>
<script src="/js/login.js"></script> 
<script src="/js/regist.js"></script>   
<!--UUID-->
<script src="vendor/script/uuid.min.js"></script>
<!--JSBoostrap-->
    <script src="bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/index.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2d587aad81.js" crossorigin="anonymous"></script>
    <title>PRINCIPAL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
</head>
<body>
  <div id="Encabezado">
    <div class="titulo">
    <h1>LOGIN</h1>
    </div>
      <section class="home">
          <div class="in-flex">
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="imagenes/Aceites.jpg" class="d-block w-100" alt="..."width="100%" height="100%">
                      </div>
                      <div class="carousel-item">
                        <img src="imagenes/aseo.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                          <img src="imagenes/Carnes.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="imagenes/Condimentos.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        
                        <img src="imagenes/dulceria.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        
                        <img src="imagenes/Embutidos.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                      
                        <img src="imagenes/enlatados.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        
                        <img src="imagenes/Fruta.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        
                        <img src="imagenes/gaseosas.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        
                        <img src="imagenes/Carnes.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        
                        <img src="imagenes/granos.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        
                        <img src="imagenes/lacteos.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                  </div>
                
                  <!--fin de carrusel-->
            </div>
            <div class="in-flex2">
                <!--formulario-->
                <div class="tamaño-form">
                    <form class="tamaño" id="formulario">
                      <div class="mb-3" id="id__grupo-usuario">
                        <label for="exampleInputEmail1" class="form-label">Usuario/Email</label>
                        <div class="grupo__input-icon">
                          <input type="text" class="form-input" id="exampleInputEmail1" name="usuario" placeholder="user123/user@user.com" aria-describedby="emailHelp">
                          <i class="validacion-estado fas fa-circle-xmark"></i>
                        </div>
                          <p class="mensaje-error">*El usuario debe tener de 4-30 digitos. <br> *El usuario no puede contener espacios. <br> *El usuario solo puede contener los siguientes simbolos: . | - | _ | @</p>
                        </div>
                      <div class="mb-3" id="id__grupo-contraseña">
                        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                        <div class="grupo__input-icon">
                          <input type="password" class="form-input" id="exampleInputPassword1" name="contraseña">
                          <i class="validacion-estado fas fa-circle-xmark"></i>
                        </div>
                        <p class="mensaje-error">La contraseña debe tener de 4 a 16 digitos.</p>
                      </div>
                      <div class="mb-3-form-check">
                        <a href="asdf">Olvide la contraseña</a>
                        <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
                        <!-- <label class="form-check-label" for="exampleCheck1">Olvide contraseña</label> -->
                      </div>
                      <div class="error-enviar" id="error-enviar">
                        <p><i class="fas fa-triangle-exclamation"></i><b>Error: </b>Por favor completar los campos correctamente.</p>
                      </div>
                      <button type="submit" class="color3 ">Ingresar</button>
                    </form>
                </div> 
                <div class="tamaño-logo">
                    <img id="logo" src="imagenes/logo.png">
                    <h3>Minimarket Las Delicias</h3>
                </div>
            </div>
        </section>
            
        <footer class="tamaño-footer">Gran variedad y el mejor servicio </footer>
            
    </div>
    
    <script src="form-login.js"></script>
    <script src="js/jquery-3.6.0.min.js" > </script>
    <!--<script src="bootstrap"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>


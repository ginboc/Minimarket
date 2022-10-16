<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/clientes.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRINCIPAL</title>
</head>
<body>
    <header>
        <h1>CLIENTES</h1>
    </header>
    <div id="navegacion">
        <nav>
          <ul>
            <li class="INVENTARIO"><a href="Inventario.html">INVENTARIO</a></li>
            <li class="PROVEEDORES"><a href="Proveedores.html">PROVEEDORES</a></li>
            <li class="FACTURAS"><a href="Facturas.html">FACTURAS</a></li>
            <li class="CLIENTES"><a href="">CLIENTES</a></li>
              <li class="INICIO"><a href="inicio.html">INICIO</a></li>
          </ul>
        </nav>
    <div id="cuerpo">
      <div id="ingresod">
        <form action="/my-handling-form-page" method="post">
          <br>

  </div>
            <div id="tablad">
                <div class="box01">
                    
                <table class="tabladat">


                        <thead>
                      
                          <tr>
                            
                            <th>TIPO DE DOCUMENTO <class="dropdown-center">
                              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Seleccionar</button></th>
                            
                            
                      
                          </tr>
                          </thead>
                      
                          <tbody>
                          <tr>
                      
                            <th ><input type="text" name="Docuemnto" placeholder="Docuemnto"></th>
                      

                            <th><input type="text" name="correo" placeholder="Correo"></th>
                            <th><input type="text" name="Barrio" placeholder="Barrio"></th>
                      
                            

                          </tr>
                          <tr>
                      
                            <th ><input type="text" name="Nombres" placeholder="Nombres"></th>
                          
                            <th><input type="text" name="Celular" placeholder="Celular"></th>
                      
                            

                          </tr>
                          <tr>
                      
                            <th ><input type="text" name="Apellidos" placeholder="Apellidos"></th>
                      
                            <th><input type="text" name="Telefono Fijo" placeholder="Telefono Fijo"></th>
                      
                           

                          </tr>
                          
                        </tbody>
                </table> <br>
              
                  <br>
                  <th><input type="submit" value="ingresar Cliente" ></th>

                
                  <th><input type="submit" value="Eliminar Cliente" ></th> 
            </div>
         </div>      
    </div>
   
</body>

</html>
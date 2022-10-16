<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/inicio.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
</head>
<body>
   
    <div id="navegacion">
      <h1>INICIO</h1>
        <nav>
          <ul>
              <li class="INVENTARIO"><a href="Inventario.html">INVENTARIO</a></li>
              <li class="PROVEEDORES"><a href="Proveedores.html">PROVEEDORES</a></li>
              <li class="FACTURAS"><a href="Facturas.html">FACTURAS</a></li>
              <li class="CLIENTES"><a href="clientes.html">CLIENTES</a></li>
              <li class="INICIO"><a href="">INICIO</a></li>
          </ul>
        </nav>
    <div id="cuerpo">
            <div id="ingresod">
                  <form action="/my-handling-form-page" method="post">
                    <br>
                    <div id="fomuarlariousuario">
                        <a>INGRESAR CODIGO</a>
                       <label for="codigo"></label>
                       <input type="text" id="codigo" name="code" value="CODIGO">
                       <br>
                       <br>
                       <a>INGRESAR CANTIDAD</a>
                       <label for="cantidad"></label>
                       <input type="text" id="contraseña" name="" value="CANTIDAD">
                       <br>
                       <br>
                       <label for="enviar"></label>
                       <input type="submit" id="enviar_co" name="" value="Facturar">
                    </div>
            </div>
            <div id="tablad">
                <div class="box01">
                    
                <table class="tabladat">


                        <thead>
                      
                          <tr>
                      
                            <th>PRODUCTO</th>
                      
                            <th>DESCRIPCION</th>
                      
                            <th>VALOR</th>
                      
                          </tr>
                          </thead>
                      
                          <tbody>
                          <tr>
                      
                            <th ><input type="text" name="Tipo" placeholder="Pruducto 1"></th>
                      
                            <th><input type="text" name="cantidad" placeholder="Descripcion 1"></th>
                      
                            <th><input type="text" name="Valor real" placeholder="$"></th>

                          </tr>
                          <tr>
                      
                            <th ><input type="text" name="Tipo" placeholder="Pruducto 2"></th>
                      
                            <th><input type="text" name="cantidad" placeholder="Descripcion 2"></th>
                      
                            <th><input type="text" name="Valor real" placeholder="$"></th>

                          </tr>
                          <tr>
                      
                            <th ><input type="text" name="Tipo" placeholder="Pruducto 3"></th>
                      
                            <th><input type="text" name="cantidad" placeholder="Descripcion 3"></th>
                      
                            <th><input type="text" name="Valor real" placeholder="$"></th>

                          </tr>
                        </tbody>
                        
                </table>
              
      
                  <h3>Minimarket las Delicias</h3>
            </div>
         </div>      
    
    
</body>
</html>
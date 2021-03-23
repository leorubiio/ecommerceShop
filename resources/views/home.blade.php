@extends('layouts.app')

require('../css/app.css');


@section('content')
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Importando CSS & JS de Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
    integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
    integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
    crossorigin="anonymous"></script>

  <!-- Importando Hoja de CSS -->
  <link rel="stylesheet" href="../css/app.css">

  <!-- Importando archivo JS -->
  <script src="assets/js/funciones2.js"></script>

  <title>Apuestas</title>
</head>

<body>

  
  <div class="container-fluid " id="hero">

    

    <h1 class="text-center">
    Oswaldo estuvo aqui Hola Mundo
    </h1>


    <div class="container" >

      <nav class="navbar navbar-expand-lg fixed-top " id="navbar">
        <div class="container-fluid" id="contenido-navbar">


          <a class="navbar-brand " href="#"><img src="assets/img/logo-balon.png" alt="logo" title="Logo Elerubio"
              id="logo">
          </a>



          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                viewBox="0 0 24 24">
                <path d="M4 6H20V8H4zM4 11H20V13H4zM4 16H20V18H4z" />
              </svg></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>

            </ul>

          </div>
        </div>
      </nav>
    </div>
    
    <div class="container" id="tabla">

      <div class="table-responsive" style="width:100%; height:220px; overflow:auto;">
          <?php require("conexion.php");
                              $resultado = mysqli_query($mysqli, "SELECT * FROM picks");
          
                              while($prueba =  mysqli_fetch_array($resultado) ){
          ?>
            <table  class="table table-dark table-bordered table-hover " id="tabla-apuestas">

              <thead >
                <tr>
                  <th scope="col"class="text-center">Dia</th>
                  <th scope="col"class="text-center">Dinero Metido</th>
                  <th scope="col"class="text-center">Dinero Ganado</th>
                  <th scope="col"class="text-center">Dinero Perdido</th>
                  <th scope="col" colspan="2" class="text-center">¿Terminaste?</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="" class="text-center"><input type="date" value="<?php echo $prueba['dia'];?>"></th>
                  <td class="text-center"><label>$</label><input type="number"  min="0.00" max="10000.00" step="0.01" value="<?php echo $prueba['dinero_metido'];?>" /></td>
                  <td class="text-center"><label>$</label><input type="number"  min="0.00" max="10000.00" step="0.01" value="<?php echo $prueba['dinero_ganado'];?>"/></td>
                  <td class="text-center"><label>$</label><input type="number"  min="0.00" max="10000.00" step="0.01" value="<?php echo $prueba['dinero_perdido'];?>" /></td>
                  <td class="text-center"><button  class="bg-warning text-white"> <b>Editar</b> </button></td>
                  <td class="text-center"><button  class="bg-success text-white"> <b>Guardar</b> </button></td>
                </tr>

                <tr>
                  <th scope="" class="text-center"><input type="date"></th>
                  <td class="text-center"><label>$</label><input type="number"  min="0.00" max="10000.00" step="0.01" /></td>
                  <td class="text-center"><label>$</label><input type="number"  min="0.00" max="10000.00" step="0.01" /></td>
                  <td class="text-center"><label>$</label><input type="number"  min="0.00" max="10000.00" step="0.01" /></td>
                  <td class="text-center"><button  class="bg-warning text-white"> <b>Editar</b> </button></td>
                  <td class="text-center"><button  class="bg-success text-white"> <b>Guardar</b> </button></td>
                </tr>

                <tr>
                  <th scope="" class="text-center"><input type="date"></th>
                  <td class="text-center"><label>$</label><input type="number"  min="0.00" max="10000.00" step="0.01" /></td>
                  <td class="text-center"><label>$</label><input type="number"  min="0.00" max="10000.00" step="0.01" /></td>
                  <td class="text-center"><label>$</label><input type="number"  min="0.00" max="10000.00" step="0.01" /></td>
                  <td class="text-center"><button  class="bg-warning text-white"> <b>Editar</b> </button></td>
                  <td class="text-center"><button  class="bg-success text-white"> <b>Guardar</b> </button></td>
                </tr>

              </tbody>
              <?php } ?>
              
            </table>
          
        



      </div>

      <div class="container justify-content-center form-group" id="botones-tabla">
        <button id="btn-cards" type="button" class="btn btn-primary " onclick="agregarFila()">Agregar Fila</button>
        <button id="btn-cards" type="button" class="btn btn-danger" onclick="eliminarFila()">Eliminar Fila</button>
      </div>

      


        <div class="container-fluid" id="footer">

          <div class="container" >
              <div class="row justify-content-center  row-cols-1 row-cols-md-3 g-4">
  
                  <div class="col mb-4" id="col-footer">
                      <div class="card" id="img-footer-1">
                          <div class="container" id="contenido-cards">
                              <img src="assets/img/perdida.png" style="width: 45px; height: 45px; margin-top: 2rem;" alt="">
                              <h3>Perdidas Totales</h3>
                              <p><h3>$180.00</h3></p>

                          </div>
                          
                      </div>
                  </div>

                  <div class="col mb-4" id="col-footer">
                    <div class="card" id="img-footer-2">
                        <div class="container " id="contenido-cards">
                            <img src="assets/img/ganancias.png" style="width: 45px; height: 45px; margin-top: 2rem;" alt="">
                            <h3>Ganancias Totales</h3>
                            <p><h3>$1200.00</h3></p>

                        </div>
                        
                    </div>
                </div>
  
                  <div class="col mb-4" id="col-footer">
                      <div class="card" id="img-footer-3">
                          <div class="container" id="contenido-cards">
                              <img src="assets/img/global.png" style="width: 45px; height: 45px; margin-top: 2rem;" alt="">
                              <h3>Balance Global</h3>
                              <p><h3>$845.00</h3></p>

                          </div>
                      </div>
                  </div>
  
              </div>
          </div>
  
      </div>
   
  </div>




    
    


    






</body>



</html>
@endsection

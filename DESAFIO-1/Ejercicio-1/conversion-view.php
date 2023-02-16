<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MiConversor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  </head>
  <body>
    <div class="container">
      <div class="row py-5">
        <div class="col col-md-6 offset-md-3 p-5 bg-light border rounded-3">
          <header class="mb-3">
            <h2 class="text-primary text-center">MiConversor<i class="bi bi-calculator"></i></h2>
          </header>
          <form action="proceso.php" method="post" class="">
            <div class="mb-3">
              
              <input type="number" name="cantidad" min="0" class="form-control" id="cantidad" required>
            </div>
            <div class="mb-3 p-2 bg-light border rounded-3">
              <div class="row">
                <div class="col-2">
                  <img id="img1" src="" alt="" height="40">
                </div>
                <div class="col-10">
                  <select class="form-select" id="select1" name="select1" aria-label="Default select example" required  onchange="SE1(this.value)">
                    <option value="USD" selected>Dolares Americanos</option>
                    <option value="EUR">Euros</option>
                    <option value="JPY">Yen Japones</option>
                    <option value="GBP">Libra Esterlina</option>
                  </select>
                </div>
              </div>
             
            </div>
            <div class="mb-3 text-center">
              <button type="button" id="cambio" class="btn btn-primary"><i class="bi bi-arrow-down-up"></i></button>
            </div>
            <div class="mb-3 p-2 bg-light border rounded-3">
            <div class="row">
                <div class="col-2">
                  <img id="img2" src="" alt="" height="40">
                </div>
                <div class="col-10">
                  <select class="form-select" id="select2" name="select2"  aria-label="Default select example" required  onchange="SE2(this.value)">
                    <option value="USD">Dolares Americanos</option>
                    <option value="EUR" selected>Euros</option>
                    <option value="JPY">Yen Japones</option>
                    <option value="GBP">Libra Esterlina</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="mb-3 text-center">
              <button type="submit" name="enviar"  class="btn btn-primary">Convertir</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>
      function SE1(o) {
        document.getElementById("img1").src = "img/" + o + ".png";
      }
      function SE2(o) {
        document.getElementById("img2").src = "img/" + o + ".png";
      }
      if(document.getElementById("select1").value != "" && document.getElementById("select2").value != ""){
        //code here
        document.getElementById("img1").src = "img/"+ document.getElementById("select1").value +".png";
        document.getElementById("img2").src = "img/"+ document.getElementById("select2").value +".png";
      }else{
        document.getElementById("img1").src = "img/USD.png";
        document.getElementById("img2").src = "img/EUR.png";
      }
      
    </script>
</html>
<div class="container p-4">
   <div class="row">
      <div class="col-md-4">
         <div class="card card-body">
            <form action="airports_controller.php" method="POST">
               <h5 class="mb-4">Busqueda de aeropuertos</h5>
               <div class="form-group mb-2">
                  <input type="text" name="aeropuerto" class="form-control" placeholder="Ingrese aeropuerto" autofocus>
               </div>
               <div class="form-group mb-2">
                  <input type="text" name="ciudad" class="form-control" placeholder="Ingrese ciudad" autofocus>
               </div>
               <div class="form-group mb-3">
                  <input type="text" name="pais" class="form-control" placeholder="Ingrese pais" autofocus>
               </div>
               <input type="submit" class="btn btn-success btn-block" value="Buscar registro">
            </form>
         </div>
      </div>
      <div class="col-md-8 mt-4 mt-md-0">
         <?php
         foreach ($matriz_airports as $registro) {
            echo "<div class='row border border-1 border-secondary'>
                  <p>" . $registro["aeropuerto"] . "</p>
                  </div>";
         }
         ?>
      </div>
   </div>
</div>
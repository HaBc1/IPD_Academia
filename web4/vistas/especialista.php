<?php
require 'header.php';
?>
 
      <div class="content-wrapper">        
       
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                     <h1 class="box-title">Registrar Especialista  <button class="btn btn-success"  id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle">
                    </i>Agregar</button></h1>
                    <div class="box-tools pull-right">
                    </div>  
                  </div>
                 
              <div class="panel-body table-responsive"  id="listadoregistros">
              <table id ="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                  <th>Opciones</th>
                  <th>DNI</th>
                  <th>ESPECIALISTA</th>
                  <th>TELEFONO</th>
                   <th>DIRECCION</th>
                    <th>FECHA CREACION</th>
                </thead>
                <tbody>
                  
                  </tfoot>
                </tbody>
              </table>
            </div>
                   <div class="panel-body" style="height: 400px;" id="formularioregistros">
              <form name="formulario" id="formulario" method="POST">
                <div class="form-group col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <label>NOMBRE ESPECIALISTA(*):</label>
                            <input type="hidden" name="id_especialista" id="id_especialista">
                            <select id="id_persona" name="id_persona" class="form-control selectpicker" data-live-search="true" required>
                              
                            </select>
                          </div>
                        <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <label>Telefono:</label>
                            <input type="number" class="form-control" name="telefono" id="telefono" maxlength="9" placeholder="Descripción">
                          </div>
                           <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <label>Direccion:</label>
                            <input type="text" class="form-control" name="direccion" id="direccion" maxlength="30" placeholder="Descripción">
                          </div>  
                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <button class="btn btn-primary" type="submit" id="btnGuardar"> <i class="fa fa-save"></i>   Guardar </button>
                  <button class="btn btn-danger" onclick="cancelarform()"> <i class="fa fa-arrow-circle-left"></i>   Cancelar </button>                 
                </div>
              </form>
            </div>
                  </div> 
              </div> 
          </div> 
      </section> 

    </div> 
   
<?php
require 'footer.php';
?>
<script type="text/javascript" src="scripts/especialista.js"></script>
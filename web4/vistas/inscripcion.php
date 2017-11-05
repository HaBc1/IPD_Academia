<?php
require 'header.php';
?>
 
      <div class="content-wrapper">        
       
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                     <h1 class="box-title">Registrar Inscripcion <button class="btn btn-success"  id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle">
                    </i>Agregar</button></h1>
                    <div class="box-tools pull-right">
                    </div>  
                  </div>
                 
              <div class="panel-body table-responsive"  id="listadoregistros">
              <table id ="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                 <th>Opciones</th>
                  <th>Apoderado</th>
                  <th>telefono</th>
                  <th>Beneficiario</th>
                  <th>direccion</th>
                  <th>Talla</th>
                  <th>Peso</th>
                  <th>Foto</th>
                  <th>fec_creacion</th>
                </thead>
                <tbody>
                  
                  </tfoot>
                </tbody>
              </table>
            </div>
                 <div class="panel-body" style="height: 400px;" id="formularioregistros">
                  <form name="formulario" id="formulario" method="POST">
                <div class="form-group col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <label>NOMBRE APODERADO(*):</label>
                            <input type="hidden" name="id_inscripcion" id="id_inscripcion">
                            <select id="id_apoderado" name="id_apoderado" class="form-control selectpicker" data-live-search="true" required>
                              
                            </select>
                          </div>
                           <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <label>Telefono:</label>
                            <input type="number" class="form-control" name="telefono" id="telefono" maxlength="9" placeholder="Descripción">
                          </div>
                           <div class="form-group col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <label>NOMBRE BENEFICIARIO(*):</label>
                         
                            <select id="id_beneficiario" name="id_beneficiario" class="form-control selectpicker" data-live-search="true" required>
                              
                            </select>
                          </div>
                       
                           <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <label>Direccion:</label>
                            <input type="text" class="form-control" name="direccion" id="direccion" maxlength="30" placeholder="Descripción">
                          </div>  
  

                          <div class="form-group col-lg-3 col-md-3 col-sm-4 col-xs-12">
                            <label>Talla:</label>
                            <input type="text" class="form-control" name="btalla" id="btalla" maxlength="30" placeholder="Descripción">
                          </div> 

                          <div class="form-group col-lg-3 col-md-3 col-sm-4 col-xs-12">
                            <label>Peso:</label>
                            <input type="text" class="form-control" name="bpeso" id="bpeso" maxlength="30" placeholder="Descripción">
                          </div> 

                           <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Imagen:</label>
                            <input type="file" class="form-control" name="imagen" id="imagen">
                            <input type="hidden" name="imagenactual" id="imagenactual">
                            <img src="" width="150px" height="120px" id="imagenmuestra">
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
<script type="text/javascript" src="scripts/inscripcion.js"></script>
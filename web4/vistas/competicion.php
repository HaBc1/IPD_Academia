<?php

require 'header.php';
?>
 
      <div class="content-wrapper">        
       
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                     <h1 class="box-title">Registrar Compentencia  <button class="btn btn-success"  id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle">
                    </i>Agregar</button></h1>
                    <div class="box-tools pull-right">
                    </div>  
                  </div>
                 
              <div class="panel-body table-responsive"  id="listadoregistros">
              <table id ="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                  <th>Opciones</th>
                  <th>COMPETENCIA</th>
                  <th>FECHA COMPETENCIA</th>
                  <th>FECHA FINAL</th>
                   <th>FECHA REGISTRO</th>
                  <th>UBIGEO</th>
                  <th>DIRECCION</th>
                </thead>
                <tbody>
                  
                  </tfoot>
                </tbody>
              </table>
            </div>
                   <div class="panel-body" style="height: 400px;" id="formularioregistros">
              <form name="formulario" id="formulario" method="POST">
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label>Nombres:</label>
                  <input type="hidden" name="id_competicion" id="id_competicion">
                  <input type="text" name="nom_competicion" class="form-control" id ="nom_competicion" maxlength="50" placeholder="Nombres" required>

                </div>


                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label>Fecha Competicion:</label>
                  <input type="date" name="fec_competicion" class="form-control" id ="fec_competicion" maxlength="50"">
                </div>

                 <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label>Fecha Fin:</label>
                  <input type="date" name="fecha_fin" class="form-control" id ="fecha_fin" maxlength="50"">
                </div>

                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label>Ubigeo:</label>
                  <input type="number" name="ubigeo" class="form-control" id ="ubigeo" maxlength="50"">
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label>Direccion:</label>
                  <input type="text" name="direccion" class="form-control" id ="direccion" maxlength="50"">
                </div>
                 
                      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-4">
                     <button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Verificar su Ubigeo</button>
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-body">
                             <iframe src="https://www.reniec.gob.pe/Adherentes/jsp/ListaUbigeos.jsp" name="" width="900" height="500" framedorber="1">
                             </iframe>
                              <button type="button" class="btn btn-warning" data-dismiss="modal">Regresar</button>
                            </div>
        
                          </div>
                        </div>
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
<script type="text/javascript" src="scripts/competicion.js"></script>
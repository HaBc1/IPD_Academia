<?php
require 'header.php';
?>
 
      <div class="content-wrapper">        
       
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                     <h1 class="box-title">Registrar Test  <button class="btn btn-success"  id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle">
                    </i>Agregar</button></h1>
                    <div class="box-tools pull-right">
                    </div>  
                  </div>
                 
              <div class="panel-body table-responsive"  id="listadoregistros">
              <table id ="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                 <th>Opciones</th>
                  <th>DESCRIPCION</th>
                  <th>ESPECIALISTA</th>
                  <th>RESULTADO</th>
                  <th>BENEFICIARIO</th>
                  <th>Fec_Registro</th>
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
                            <input type="hidden" name="id_test" id="id_test">
                            <select id="id_especialista" name="id_especialista" class="form-control selectpicker" data-live-search="true" required>
                              
                            </select>
                          </div>
                 <div class="form-group col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <label>NOMBRE BENEFICIARIO(*):</label>
                            
                            <select id="id_inscripcion" name="id_inscripcion" class="form-control selectpicker" data-live-search="true" required>
                              
                            </select>
                          </div>

                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label>DESCRIPCION DEL TEST:</label> 
                  <input type="text" name="descripcion_test" class="form-control" id ="descripcion_test" maxlength="256" placeholder="Beneficiario">
                </div>


                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label>RESULTADO</label>
                  <input type="number" name="resultado" class="form-control" id ="resultado" maxlength="256" placeholder="">
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
<script type="text/javascript" src="scripts/test.js"></script>
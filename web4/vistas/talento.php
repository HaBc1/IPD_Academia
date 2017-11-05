<?php
require 'header.php';
?>
 
      <div class="content-wrapper">        
       
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                     <h1 class="box-title">Registrar Talento  <button class="btn btn-success"  id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle">
                    </i>Agregar</button></h1>
                    <div class="box-tools pull-right">
                    </div>  
                  </div>
                 
              <div class="panel-body table-responsive"  id="listadoregistros">
              <table id ="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                  <th>Opciones</th>
                  <th>BENEFICIARIO</th>
                  <th>DISCIPLINA</th>
                  <th>FECHA REGISTRO</th>
                </thead>
                <tbody>
                  
                  </tfoot>
                </tbody>
              </table>
            </div>
                   <div class="panel-body" style="height: 400px;" id="formularioregistros">
              <form name="formulario" id="formulario" method="POST">
               <div class="form-group col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <label>NOMBRE BENEFICIARIO(*):</label>
                            <input type="hidden" name="id_talento" id="id_talento">
                            <select id="id_inscripcion" name="id_inscripcion" class="form-control selectpicker" data-live-search="true" required>
                              
                            </select>
                          </div>

                <div class="form-group col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <label>DISCIPLINA(*):</label>
                           
                            <select id="id_disciplina" name="id_disciplina" class="form-control selectpicker" data-live-search="true" required>
                              
                            </select>
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
<script type="text/javascript" src="scripts/talento.js"></script>
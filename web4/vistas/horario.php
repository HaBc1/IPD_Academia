<?php
require 'header.php';
?>
 
      <div class="content-wrapper">        
       
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                     <h1 class="box-title">Registrar Horario  <button class="btn btn-success"  id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle">
                    </i>Agregar</button></h1>
                    <div class="box-tools pull-right">
                    </div>  
                  </div>
                 
              <div class="panel-body table-responsive"  id="listadoregistros">
              <table id ="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                  <th>Opciones</th>
                  <th>COMPLEJO </th>
                  <th>DISCIPLINA</th>
                  <th>DIAS</th>
                   <th>HORA DE INICIO</th>
                  <th>HORA DE FIN</th>
                  <th>FECHA Y HORA</th>
                </thead>
                <tbody>
                  
                  </tfoot>
                </tbody>
              </table>
            </div>
                   <div class="panel-body" style="height: 400px;" id="formularioregistros">
              <form name="formulario" id="formulario" method="POST">
                <div class="form-group col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <label>NOMBRE COMPLEJO(*):</label>
                            <input type="hidden" name="id_horario" id="id_horario">
                            <select id="id_complejo" name="id_complejo" class="form-control selectpicker" data-live-search="true" required>
                              
                            </select>
                </div>


               

                  <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
                   <label>DIA</label>
                <select class="form-control select-picker" name="dia"  id="dia" required> 
                      <option value="Lunes">LUNES</option>
                      <option value="Martes">MARTES</option>  
                      <option value="Miercoles">MIERCOLES</option>
                      <option value="Jueves">JUEVES</option>
                      <option value="Viernes">VIERNES</option> 
                    
                   </select>
                  </div>

              <div class="form-group col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <label>NOMBRE DISCIPLINA(*):</label>
                            <select id="id_coddisciplina" name="id_coddisciplina" class="form-control selectpicker" data-live-search="true" required>
                              
                            </select>
                </div>

                 
            <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-12">
                  <label> HORA DE INICIO:</label>
                  <input type="time" name="hora_inicio" class="form-control"  id ="hora_inicio">
                  
                </div>

                 <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-12">
                  <label> HORA DE FIN:</label>
                  <input type="time" name="hora_fin" class="form-control"  id ="hora_fin">
                  
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
<script type="text/javascript" src="scripts/horario.js"></script>
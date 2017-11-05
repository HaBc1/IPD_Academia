<?php
require 'header.php';
?>
 
      <div class="content-wrapper">        
       
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                     <h1 class="box-title">Registrar Persona  <button class="btn btn-success"  id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle">
                    </i>Agregar</button></h1>
                    <div class="box-tools pull-right">
                    </div>  
                  </div>
                 
              <div class="panel-body table-responsive"  id="listadoregistros">
              <table id ="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                  <th>Opciones</th>
                  <th>DNI</th>
                  <th>Apellido Paterno</th>
                  <th>Apellido Materno</th>
                   <th>Nombre</th>
                  <th>Sexo</th>
                  <th>Estado Civil</th>
                  <th>Fecha Nacimiento</th> 
                  <th>Fecha Cracion</th>
                  <th>Email</th>
                  
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
                  <input type="hidden" name="id_persona" id="id_persona">
                  <input type="text" name="vnombres" class="form-control" id ="vnombres" maxlength="50" placeholder="Nombres" required>

                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label>Apellido Paterno:</label>
                  <input type="text" name="vapepaterno" class="form-control" id ="vapepaterno" maxlength="50" placeholder="Apellido Paterno">
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label>Apellido Materno:</label>
                  <input type="text" name="vapematerno" class="form-control" id ="vapematerno" maxlength="50" placeholder="Apellido Materno">
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label>Documento de Identidad</label>
                  <input type="text" name="dnipersona" class="form-control" id ="dnipersona" maxlength="8" placeholder="Numero De DNI">
                </div>

          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                   <label>Sexo</label>
                <select class="form-control select-picker" name="sexo"  id="sexo" required> 
                      <option value="M">Masculino</option>
                      <option value="F">Femenino</option>   
                    
                   </select>
                  </div>
               <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                   <label>Estado Civil</label>
                <select class="form-control select-picker" name="estadocivil"  id="estadocivil" required> 
                      <option value="S">Soltero</option>
                      <option value="C">Casado</option>   
                      <option value="D">Divorsiado</option>   
                      <option value="V">Viudo</option>     
                   </select>
                  </div>
              
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label> Correo Electronico:</label>
                  <input type="text" name="email" class="form-control"  id ="email" maxlength="50" placeholder="Correo Electronico">
                  
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label> Fecha Nacimiento:</label>
                  <input type="date" name="fec_nacimiento" class="form-control"  id ="fec_nacimiento"   >
                  
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
<script type="text/javascript" src="scripts/persona.js"></script>
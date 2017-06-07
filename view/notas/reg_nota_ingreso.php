
<section class="content-header cabecera">
      <h1>
        Nota de Ingreso
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Registro</a></li>
        <li class="active">Nota de ingreso</li>
      </ol>

</section>

    <!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
            <!--  <h3 class="box-title">Datos del Producto</h3>-->
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" id="formulario_producto">
              <div class="box-body">
                <!--Mensaje de registro-->
                <div class="" id="msj_res_producto">
                </div>
                <!--Mensaje de registro-->
                <div class="form-group">
                <label class="col-sm-1 control-label">Orden de compra</label>
                  <div class="col-sm-3">
                    <input type="hidden" onkeypress="return solo_letras(event);" class="form-control validacion" name="autor_tesis" id="autor_tesis">
                    <input type="text" onkeypress="return solo_letras(event);" class="form-control validacion" name="autor_tesis_2" disabled="" id="autor_tesis_2" maxlength="170" size="170" placeholder="Autor">
                  </div>
                  <div class="col-sm-2">
                  <button type="button" name="buscar" id="buscar" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal_buscar_alumno">Buscar <span class="glyphicon glyphicon-search"></span></button>
                  </div>
                  <label class="col-sm-1 control-label">Titulo</label>
                  <div class="col-sm-4">
                    
                    <input type="text" name="nombre_tesis" class="form-control validacion" id="nombre_tesis" placeholder="Titulo">
                  </div>
                  
                </div>

                <div class="form-group">
                  <label  class="col-sm-1 control-label">Tipo de Prod.</label>
                  <div class="col-sm-4">
                    <select name="marca" id="" class="form-control">
                      <option value="marca1">tipo 1</option>
                      <option value="marca1">tipo 2</option>
                      
                    </select>
                  </div>
                  <label  class="col-sm-2 control-label">Categoria</label>

                  <div class="col-sm-4">
                    <select name="marca" id="" class="form-control">
                      <option value="marca1">cat 1</option>
                      <option value="marca1">cat 2</option>
                      
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label  class="col-sm-2 control-label">Presentacion</label>

                  <div class="col-sm-4">
                    <select name="presentacion" id="" class="form-control">
                      <option value="marca1">pre 1</option>
                      <option value="marca1">pre 2</option>
                      
                    </select>
                  </div>
                  <label  class="col-sm-2 control-label">Proveedor</label>

                  <div class="col-sm-2">
                    <input type="text" name="" onkeypress="return solo_letras(event);" class="form-control validacion" value="" maxlength="40" id="" placeholder="proveedor">
                  </div>
                  <button type="button" name="buscar" id="buscar" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal_buscar_alumno">Buscar <span class="glyphicon glyphicon-search"></span></button>
                </div>
                <div class="form-group">
                <label  class="col-sm-2 control-label">Cantidad</label>
                  <div class="col-sm-4">
                    <input type="email" name="" class="form-control validacion"  value="" id="" placeholder="email" maxlength="50">
                    <small class="mail_incorrecto"></small>
                  </div>
                  <label  class="col-sm-2 control-label">Cod. Lote</label>
                  <div class="col-sm-4">
                    <input type="text" name="" onkeypress="return solo_numeros(event);" class="form-control validacion" value="" id="" placeholder="" maxlength="10">
                  </div>
                </div>

                <div class="form-group">
                <label  class="col-sm-2 control-label">N° Regla Sanit.</label>
                  <div class="col-sm-4">
                    <input type="text" name="" class="form-control validacion"  value="" id="" placeholder="" maxlength="50">
                    
                  </div>
                  <label  class="col-sm-2 control-label">Fecha venc.</label>
                  <div class="col-sm-4">
                    <input type="text" name="" onkeypress="return solo_numeros(event);" class="form-control validacion" value="" id="" placeholder="" maxlength="10">
                  </div>
                </div>

                <div class="form-group">
                  <label  class="col-sm-2 control-label">Unidad Med.</label>

                  <div class="col-sm-4">
                    <select name="" class="form-control" id="">
                      <option value="">ml</option>
                    </select>
                  </div>
                  <label  class="col-sm-2 control-label">Imagen Prod.</label>
                  <div class="col-sm-4">
                    <input type="file" data-target="preview_image" class="file-input" id="imagen_producto" accept="image/*"  name="imagen_producto" tabindex="-1" style="position: absolute; clip: rect(0px 0px 0px 0px);" />
                      <div class="bootstrap-filestyle input-group" data-toggle="tooltip" data-placement="right" title="No obligatorio" ><span class="group-span-filestyle " tabindex="0"><label for="imagen_producto" class="btn btn-primary "><span class="glyphicon glyphicon-folder-open "></span>&ensp;Escoger Imágen</label>
                      </span>
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Stock Min.</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control">
                    </div>
                    <label  class="col-sm-2 control-label">Precio comp.</label>
                    <div class="col-sm-4">
                     <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Stock Max.</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control">
                    </div>
                    <label  class="col-sm-2 control-label">Precio vent.</label>
                    <div class="col-sm-4">
                     <input type="text" class="form-control">
                    </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer text-center">
                <button type="button" onclick="reg_alumno()" class="btn btn-success btn-lg"><i class="fa fa-floppy-o" aria-hidden="true"></i>&ensp;   Registrar</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          <!-- /.box -->
        </div>
         
    </div><!--row-->

</section>
    <!-- /.content -->


<script src="html/javascript/reg_producto.js"></script>
<script>
  $('.file-input').on('change', function() {
    previewImage(this);
});





</script>
<?php 

/*
session_name('misesion');
session_register('contador');
echo '<a href="'.$PHP_SELF.'?'.SID.'">Contador vale: '.++$_SESSION['contador'].'</a><br>';
echo 'Ahora el nombre es '.session_name().' y la sesión '.$misesion.'<br>';

*/


 ?>

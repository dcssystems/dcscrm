<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading panel-heading-divider">Registro de personas
                <span class="panel-subtitle">Esta interfaz permite registar, una persona en el sistema.</span>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form id="formUploadFile" method="POST" name="formUploadFile" enctype="multipart/form-data">  <!-- method="POST" action="<?php //echo URL::base(); ?>ajax/uploadfile"-->                        
                                <div class="form-group row">
                                    <label class="col-3 col-form-label text-right">Cargar archivo de personas:</label>
                                    <div class="col-6">
                                        <input type="file" name="filePersons" id="filePersons" class="inputfile">
                                        <label for="filePersons" class="btn btn-primary"> <i class="icon s7-upload"></i><span>Archivo ...</span></label>
                                        <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
                                    </div>
                                    <div class="col-3">
                                        <button type="button" name="uploadFile" id="uploadFile" class="btn btn-primary">Cargar</button>
                                    </div>                                    
                                </div>                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <form name="formPersons" id="formPersons" action="">
                    <!-- nombre -->
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label text-right">Nombres</label>
                        <div class="col-sm-6">
                            <input name="name" id="name" type="text" required placeholder="Nombre" class="form-control">
                        </div>
                    </div>
                    <!-- apellido -->
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label text-right">Apellidos</label>
                        <div class="col-sm-6">
                            <input name="lastname" id="lastname" type="text" required placeholder="Apellidos" class="form-control">
                        </div>
                    </div>
                    <!-- tipo de documento -->
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label text-right">Tipo de documento</label>
                        <div class="col-sm-6">
                            <select name="typedoc" id="typedoc" class="form-control custom-select">
                                <option value="" selected>Seleccione documento</option>
                                <option value="1">D.N.I.</option>
                                <option value="2">R.U.C.</option>
                                <option value="3">Carnet de extranjeria</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label text-right">Documento</label>
                        <div class="col-sm-6">
                            <input name="document" id="document" type="text" required placeholder="" class="form-control">
                        </div>
                    </div>
                    <!-- direccion -->
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label text-right">Dirección</label>
                        <div class="col-sm-6">
                            <input name="address" id="address" type="text" required placeholder="Dirección" class="form-control">
                        </div>
                    </div>
                    <!-- departamento -->
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label text-right">Departamento</label>
                        <div class="col-sm-6">
                            <select name="department" id="department" class="form-control custom-select">
                                <option value="" selected>SELECCIONE DEPARTAMENTO</option>
                                <?php foreach($department as $dpto): ?>
                                <option value="<?php echo $dpto->idDpto;?>"><?php echo $dpto->varDescripcion;?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                    </div>
                    <!-- province -->
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label text-right">Provincia</label>
                        <div class="col-sm-6">
                            <select name="province" id="province" class="form-control custom-select">
                                <option value="" selected>SELECCIONE PROVINCIA</option>
                            </select>
                        </div>
                    </div>
                    <!-- district -->
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label text-right">Distirto</label>
                        <div class="col-sm-6">
                            <select name="district" id="district" class="form-control custom-select">
                                <option value="" selected>SELECCIONE DISTRITO</option>
                            </select>
                        </div>
                    </div>
                    <!-- correo -->
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label text-right">Email</label>
                        <div class="col-sm-6">
                            <input name="email" id="email" type="text" required placeholder="Email" class="form-control">
                        </div>
                    </div>
                    <!-- referencia -->
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label text-right">Referencia</label>
                        <div class="col-sm-6">
                            <textarea name="reference" id="reference" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-space btn-primary">Submit</button>
                            <button class="btn btn-space btn-secondary">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--Modal Okey-->
<div id="mod-primary" tabindex="-1" role="dialog" style="" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="s7-close"></span></button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <div class="text-primary"><span class="modal-main-icon s7-check"></span></div>
                    <h3 class="mb-4">Correcto!</h3>
                    <p id="msgOkey"></p>
                    <div class="mt-6">
                        <button type="button" data-dismiss="modal" class="btn btn-sm btn-space btn-secondary">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Modal Danger-->
<div id="mod-danger" tabindex="-1" role="dialog" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="s7-close"></span></button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <div class="text-danger"><span class="modal-main-icon s7-close-circle"></span></div>
                    <h3 class="mb-4">Error!</h3>
                    <p id="msgError"></p>
                    <div class="mt-6">
                        <button type="button" data-dismiss="modal" class="btn btn-sm btn-space btn-secondary">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- loanding -->
<div id="mod-info" tabindex="-1" role="dialog" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="s7-close"></span></button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <div class="text-info"><span class="modal-main-icon s7-info"></span></div>
                    <h3 class="mb-4">Información!</h3>
                    <p>Espere hasta poder terminar con la carga de su archivo.</p>
                    <div class="mt-6">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
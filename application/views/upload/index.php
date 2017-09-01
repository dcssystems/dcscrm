<div class="main-content container">
    <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading panel-heading-divider">Cargar Archivos<span class="panel-subtitle">En esta interfaz se cargarán los arcihvos para generar las campañas a los clientes</span></div>
            <div class="panel-body">
                <form id="formUploadFile" method="POST" name="formUploadFile" enctype="multipart/form-data">                        
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label text-right">Cliente</label>
                        <div class="col-sm-6">
                            <select name="cliente" id="cliente" class="form-control custom-select">
                                <option value="">SELECCIONE CLIENTE</option>
                                <option value="1">B.B.V.A.</option>
                                <option value="2">Freno S.A.</option>
                            </select>
                        </div>
                    </div>                
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
</div>
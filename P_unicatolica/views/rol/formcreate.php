<div id="modalRol" class="modal" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">     
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Nuevo Rol</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>  
    </div>  
    <div class="modal-content">
        <form id="form_rol">
        <div class="row">
        <div class="col-md-2"></div>         
                <div class="input-field col s8">
                    <input type="text" name="name" required>
                    <label class="active" for="name">
                        Nuevo Rol
                    </label>
                </div>
                
            </div> 
        </form>
    </div> 
        <div class="row">
                <div class="buttoncenter">
                    <div class="buttoncitos">
                        <button type="submit" class="btn waves-effect" onclick="SaveData(); return false;"><i class="material-icons left">save</i>Guardar</button>
                    </div>
                    <div class="buttoncitos">
                        <button class="btn waves-effect " data-dismiss="modal"><i class="material-icons left">cancel</i>Cerrar</button>
                    </div>
                </div>
            </div>
    </div>
   </div>
</div>

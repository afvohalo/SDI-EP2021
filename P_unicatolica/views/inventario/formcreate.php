<div id="modalInventario" class="modal" tabindex="-1" role="dialog">
    <div class="modal-content">
        <h4 class="center">Nuevo inventario</h4>
        <form id="form_inventario">
          
                
                <div class="input-field">
                    <input type="text" name="name" required>
                    <label class="active" for="name">
                        Nombre del articulo
                    </label>
                </div>
                
                <div class="input-field">
                    <input type="text" name="cantidad" required>
                    <label class="active" for="cantidad">
                        Cantidad del articulo
                    </label>
                </div>

                <div class="input-field">
                    <input type="text" name="cantidad" required>
                    <label class="active" for="cantidad">
                        Estado del articulo
                    </label>
                </div>                

            </div>
        </form>
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

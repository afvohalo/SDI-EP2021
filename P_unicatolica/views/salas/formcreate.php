<div id="modalSalas" class="modal" tabindex="-1" role="dialog">
    <div class="modal-content">
        <h4 class="center">Nuevo Salas</h4>
        <form id="form_salas">
          
                
                <div class="input-field">
                    <input type="text" name="name" required>
                    <label class="active" for="name">
                        Nombre de la sala
                    </label>
                </div>
                
                <div class="input-field">
                    <input type="text" name="cantidad" required>
                    <label class="active" for="cantidad">
                        Cantidad de equipos en la sala
                    </label>
                </div>

                <div class="input-field">
                    <label for="VB"> VideoBeam en la sala: </label>
                    <input type="radio" name="VB" value="1">
                    <label class="active" for="VB"> Si </label>

                    <input type="radio" name="VB" value="0">
                    <label class="active" for="VB"> No </label>

                </div>

                <div class="input-field">
                    <label for="TL"> Telon en la sala: </label>
                    <input type="radio" name="TL" value="1">
                    <label class="active" for="TL"> Si </label>

                    <input type="radio" name="TL" value="0">
                    <label class="active" for="TL"> No </label>
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

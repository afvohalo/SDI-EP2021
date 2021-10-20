<div id="modalEquipos" class="modal" tabindex="-1" role="dialog">
    <div class="modal-content">
        <h4 class="center">Nuevo equipo</h4>
        <form id="form_equipos">
          
                
                <div class="input-field">
                    <input type="text" name="nombre" required>
                    <label class="active" for="nombre">
                        Nombre del equipo
                    </label>
                </div>
                
                <div class="input-field">
                    <input type="text" name="detalles" required>
                    <label class="active" for="detalles">
                        Detalles del equipo
                    </label>
                </div>

                <div class="input-field">
                    <input type="radio" name="teclado" value="1">
                    <label class="active" for="teclado"> Si </label>

                    <input type="radio" name="teclado" value="0">
                    <label class="active" for="teclado"> No </label>

                    <label for="teclado"> El equipo tiene teclado?: </label>
                </div>

                <div class="input-field">
                    <input type="radio" name="mouse" value="1">
                    <label class="active" for="mouse"> Si </label>

                    <input type="radio" name="mouse" value="0">
                    <label class="active" for="mouse"> No </label>

                    <label for="mouse"> El equipo tiene mouse?: </label>
                </div>

                <div class="input-field">
                    <input type="radio" name="guaya" value="1">
                    <label class="active" for="guaya"> Si </label>

                    <input type="radio" name="guaya" value="0">
                    <label class="active" for="guaya"> No </label>

                    <label for="guaya"> El equipo tiene guaya?: </label>
                </div>

                <div class="input-field">
                    <input type="radio" name="candado" value="1">
                    <label class="active" for="candado"> Si </label>

                    <input type="radio" name="candado" value="0">
                    <label class="active" for="candado"> No </label>

                    <label for="candado"> El equipo tiene candado?: </label>
                </div>

                <div class="input-field">
                        <select name="THerramienta">
                            <option value="">Seleccione...</option>

                            <?php foreach ($this->d->select_tipoherramienta as $value) {
                            ?> <option value="<?php echo $value['tip_her_id']; ?>"><?php echo $value['tip_her_nombre']; ?></option>

                            <?php } ?>
                        </select>
                        <label for="TMaterial">
                            Tipo de Herramienta
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

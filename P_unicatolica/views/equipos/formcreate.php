<div id="modalEquipos" class="modal" tabindex="-1" role="dialog">
    <div class="modal-content">
        <h4 class="center">Nuevo equipo</h4>
        <form id="form_equipos">
          
                
                <div class="input-field">
                    <input type="text" name="nombreequipos">
                    <label class="active" for="nombreequipos">
                        Nombre del equipo
                    </label>
                </div>
                
                <div class="input-field">
                    <input type="text" name="detalleequipos">
                    <label class="active" for="detallesequipos">
                        Detalles del equipo
                    </label>
                </div>

                <div class="input-field">
                    <input type="radio" name="tecladoequipos" value="1">
                    <label class="active" for="tecladoequipos"> Si </label>

                    <input type="radio" name="tecladoequipos" value="0">
                    <label class="active" for="tecladoequipos"> No </label>

                    <label for="tecladoequipos"> El equipo tiene teclado?: </label>
                </div>

                <div class="input-field">
                    <input type="radio" name="mouseequipos" value="1">
                    <label class="active" for="mouseequipos"> Si </label>

                    <input type="radio" name="mouseequipos" value="0">
                    <label class="active" for="mouseequipos"> No </label>

                    <label for="mouseequipos"> El equipo tiene mouse?: </label>
                </div>

                <div class="input-field">
                    <input type="radio" name="guayaequipos" value="1">
                    <label class="active" for="guayaequipos"> Si </label>

                    <input type="radio" name="guayaequipos" value="0">
                    <label class="active" for="guayaequipos"> No </label>

                    <label for="guayaequipos"> El equipo tiene guaya?: </label>
                </div>

                <div class="input-field">
                    <input type="radio" name="candadoequipos" value="1">
                    <label class="active" for="candadoequipos"> Si </label>

                    <input type="radio" name="candadoequipos" value="0">
                    <label class="active" for="candadoequipos"> No </label>

                    <label for="candadoequipos"> El equipo tiene candado?: </label>
                </div>

                <div class="input-field">
                        <select name="estadoequipos">
                            <option value="">Seleccione...</option>

                            <?php foreach ($this->d->select_estadoequipos as $value) {
                            ?> <option value="<?php echo $value['Est_equipos_id']; ?>"><?php echo $value['Est_equipos_nombre']; ?></option>

                            <?php } ?>
                        </select>
                        <label for="estadoequipos">
                            Estado del equipo
                        </label>
                </div>

                <div class="input-field">
                        <select name="salaequipos">
                            <option value="">Seleccione...</option>

                            <?php foreach ($this->d->select_salaequipos as $value) {
                            ?> <option value="<?php echo $value['Sal_id']; ?>"><?php echo $value['Sal_nombre']; ?></option>

                            <?php } ?>
                        </select>
                        <label for="salaequipos">
                            Sala del equipo
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


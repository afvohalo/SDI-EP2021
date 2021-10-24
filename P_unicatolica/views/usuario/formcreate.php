<div id="modalUsuario" class="modal" tabindex="-1" role="dialog">
    <div class="modal-content">
        <h4 class="center">Nuevo Usuario</h4>
        <form id="form_Usuario">

                <div class="input-field">
                    <input type="text" name="name1" required>
                    <label class="active" for="name">
                        nombre 1
                    </label>
                </div>

                <div class="input-field">
                    <input type="text" name="name2" required>
                    <label class="active" for="name">
                        nombre 2
                    </label>
                </div>

                <div class="input-field">
                    <input type="text" name="apellido1" required>
                    <label class="active" for="name">
                        apellido 1
                    </label>
                </div>

                <div class="input-field">
                    <input type="text" name="apellido2" required>
                    <label class="active" for="name">
                        apellido 2
                    </label>
                </div>

                <div class="input-field">
                    <input type="email" name="correo" required>
                    <label class="active" for="name">
                        correo
                    </label>
                </div>

                <div class="input-field">
                    <input type="password" name="contrasena" required>
                    <label class="active" for="name">
                        contraseña
                    </label>
                </div>

                <div class="input-field">
                    <input type="number" name="telefono" required>
                    <label class="active" for="name">
                        telefono
                    </label>
                </div>


                <div class="input-field">
                    <input type="text" name="name" required>
                    <label class="active" for="name">
                        Numero de documento
                    </label>
                </div>



                <div class="input-field">
                        <select name="TDocumento">
                            <option value="" disabled selected>Seleccione...</option>
                            <?php

foreach ($this->d->selectTipo as $value) {
    ?>
                                <option value="<?php echo $value['tip_doc_id']; ?>"><?php echo $value['Tip_doc_nombre']; ?></option>
                        <?php }?>
                    </select>
                    <label for="TDocumento">Tipo Documento</label>
                </div>

                <div class="input-field">
                        <select name="TDocumento">
                            <option value="" disabled selected>Seleccione...</option>
                            <?php

foreach ($this->d->selectEestado as $value) {
    ?>
                                <option value="<?php echo $value['Est_id']; ?>"><?php echo $value['Est_nombre']; ?></option>
                        <?php }?>
                    </select>
                    <label for="TDocumento">Estado</label>
                </div>

                <div class="input-field">
                        <select name="TDocumento">
                            <option value="" disabled selected>Seleccione...</option>
                            <?php

foreach ($this->d->selectRol as $value) {
    ?>
                                <option value="<?php echo $value['Rol_id']; ?>"><?php echo $value['Rol_nombre']; ?></option>
                        <?php }?>
                    </select>
                    <label for="TDocumento">Rol</label>
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

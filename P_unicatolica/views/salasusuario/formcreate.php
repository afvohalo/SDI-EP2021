<div id="modalSalasUsuario" class="modal" tabindex="-1" role="dialog">
    <div class="modal-content">
        <h4 class="center">Nuevo Usuario</h4>
        <form id="form_salasUsuario">

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
                    <input type="text" name="name" required>
                    <label class="active" for="name">
                        tipo de documento
                    </label>
                </div>


                <div class="input-field">
                    <input type="text" name="name" required>
                    <label class="active" for="name">
                        estado
                    </label>
                </div>


                <div class="input-field">
                    <input type="text" name="name" required>
                    <label class="active" for="name">
                        rol
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

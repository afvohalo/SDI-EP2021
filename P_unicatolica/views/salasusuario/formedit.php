 <form id="form_salasUsuario_edit">
    <div class="row">
        <div class="col s2"></div>
        <div class="input-field col s8">
            <input type="text" name="name" value="<?php echo $this->d[0]['Usu_nombre1'] ?>" required>
            <label class="active" for="name">
            <input type="text" name="name" value="<?php echo $this->d[0]['Usu_nombre2'] ?>" required>
            <label class="active" for="name">
            <input type="text" name="name" value="<?php echo $this->d[0]['Usu_apellido1'] ?>" required>
            <label class="active" for="name">
            <input type="text" name="name" value="<?php echo $this->d[0]['Usu_apellido2'] ?>" required>
            <label class="active" for="name">
            <input type="text" name="name" value="<?php echo $this->d[0]['Usu_correo'] ?>" required>
            <label class="active" for="name">
            <input type="text" name="name" value="<?php echo $this->d[0]['Usu_contraseña'] ?>" required>
            <label class="active" for="name">
            <input type="text" name="name" value="<?php echo $this->d[0]['Usu_telefono'] ?>" required>
            <label class="active" for="name">
            <input type="text" name="name" value="<?php echo $this->d[0]['Usu_documento'] ?>" required>
            <label class="active" for="name">
            <input type="text" name="name" value="<?php echo $this->d[0]['Tbltipo_documento_Tip_doc_id'] ?>" required>
            <label class="active" for="name">
            <input type="text" name="name" value="<?php echo $this->d[0]['Tblestado_est_id'] ?>" required>
            <label class="active" for="name">
            <input type="text" name="name" value="<?php echo $this->d[0]['Tblrol_id'] ?>" required>
            <label class="active" for="name">
                Nuevo Usuario
            </label>
        </div>

        <div class="col s2"></div>
    </div>

</form>
<div class="row">
    <div class="buttoncenter">
        <div class="buttoncitos">
            <button type="submit" class="btn waves-effect" onclick="UpdateData(<?php echo $this->d[0]['Usu_id'] ?>); return false;"><i class="material-icons left">save</i>Editar</button>
        </div>
        <div class="buttoncitos">
            <button class="modal-close btn waves-effect buttonsApp"><i class="material-icons left">cancel</i>Cerrar</button>
        </div>
    </div>
</div>
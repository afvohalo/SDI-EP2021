<<<<<<< HEAD:P_unicatolica/views/salasusuario/formedit.php
 <form id="form_salasUsuario_edit">
    <div class="row">
        <div class="col s2"></div>
        <div class="input-field col s8">
            <input type="text" name="name" value="<?php echo $this->d[0]['Tblusuarios_Usu_id'] ?>" required>
            <label class="active" for="name">
            <label class="active" for="name">
                usuario
            </label>
            <input type="text" name="name" value="<?php echo $this->d[0]['Tblsalas_Sal_id'] ?>" required>
            <label class="active" for="name">
                sala
=======

<form id="form_estadoInventario_edit">
    <div class="row">
        <div class="col s2"></div>
        <div class="input-field col s8 ">
            <input type="text" name="name" value="<?php echo $this->d[0]['Est_inv_nombre'] ?>" required>
            <label class="active" for="name">
                Nuevo Estado Inventario
>>>>>>> isaac-1.3:P_unicatolica/views/estado_inventario/formedit.php
            </label>
        </div>

        <div class="col s2"></div>
    </div>

</form>
<div class="row">
    <div class="buttoncenter">
        <div class="buttoncitos">
<<<<<<< HEAD:P_unicatolica/views/salasusuario/formedit.php
            <button type="submit" class="btn waves-effect" onclick="UpdateData(<?php echo $this->d[0]['Sal_usu_id'] ?>); return false;"><i class="material-icons left">save</i>Editar</button>
=======
            <button type="submit" class="btn waves-effect" onclick="UpdateData(<?php echo $this->d[0]['Est_inv_id'] ?>); return false;"><i class="material-icons left">save</i>Editar</button>
>>>>>>> isaac-1.3:P_unicatolica/views/estado_inventario/formedit.php
        </div>
        <div class="buttoncitos">
            <button class="modal-close btn waves-effect buttonsApp" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons left">cancel</i>Cerrar</button>
        </div>
    </div>
</div>
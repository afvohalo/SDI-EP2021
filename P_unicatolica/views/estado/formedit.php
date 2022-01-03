  
<form id="form_estado_edit">
    <div class="row">
        <div class="col s2"></div>
        <div class="input-field col s8 ">
            <input type="text" name="name" value="<?php echo $this->d[0]['Est_nombre'] ?>" required>
            <label class="active" for="name">
                Nuevo Estado
            </label>
        </div>

        <div class="col s2"></div>
    </div>

</form>
<div class="row">
    <div class="buttoncenter">
        <div class="buttoncitos">
            <button type="submit" class="btn waves-effect" onclick="UpdateData(<?php echo $this->d[0]['Est_id'] ?>); return false;"><i class="material-icons left">save</i>Editar</button>
        </div>
        <div class="buttoncitos">
            <button class="modal-close btn waves-effect buttonsApp" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons left">cancel</i>Cerrar</button>
        </div>
    </div>
</div>
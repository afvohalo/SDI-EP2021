  
<form id="form_salas_edit">
    <div class="row">
        <div class="col s2"></div>
        <div class="input-field col s8 ">
            <input type="text" name="name" value="<?php echo $this->d[0]['Sal_nombre'] ?>" required>
            <label class="active" for="name">
                Nombre de la sala
            </label>
        </div>

        <div class="col s2"></div>
        <div class="input-field col s8 ">
            <input type="text" name="cantidad" value="<?php echo $this->d[0]['Sal_cantidad_equipo'] ?>" required>
            <label class="active" for="cantidad">
                Cantidad de quipos en la sala
            </label>
        </div>

        <div class="col s2"></div>
        <div class="input-field col s8 ">
            <input type="check" name="VB" value="<?php echo $this->d[0]['Sal_videobeam'] ?>" required>
            <label class="active" for="VB">
                Nombre de la sala
            </label>
        </div>
    </div>

</form>
<div class="row">
    <div class="buttoncenter">
        <div class="buttoncitos">
            <button type="submit" class="btn waves-effect" onclick="UpdateData(<?php echo $this->d[0]['Sal_id'] ?>); return false;"><i class="material-icons left">save</i>Editar</button>
        </div>
        <div class="buttoncitos">
            <button class="modal-close btn waves-effect buttonsApp"><i class="material-icons left">cancel</i>Cerrar</button>
        </div>
    </div>
</div>
  
<form id="form_inventario_edit">
    <div class="row">
        <div class="col s2"></div>
        <div class="input-field col s8 ">
            <input type="text" name="name" value="<?php echo $this->d[0]['Inv_nombre'] ?>" required>
            <label class="active" for="name">
                Nombre de la sala
            </label>
        </div>

        <div class="col s2"></div>
        <div class="input-field col s8 ">
            <input type="text" name="cantidad" value="<?php echo $this->d[0]['Inv_cantidad'] ?>" required>
            <label class="active" for="cantidad">
                Cantidad de quipos en la sala
            </label>
        </div>

        <div class="col s2"></div>

        <div class="input-field col s8 ">
            <input type="radio" name="VB" value="1"<?php echo $this->d[0]['Tblestado_inventario__Est_inv_id'] =="1" ? "checked" : ""; ?>>
                <label class="active" for="VB"> Si </label>

            <label for="VB"> Estado del articulo </label>
            
        </div>
    </form>
<div class="row">
    <div class="buttoncenter">
        <div class="buttoncitos">
            <button type="submit" class="btn waves-effect" onclick="UpdateData(<?php echo $this->d[0]['Inv_id'] ?>); return false;"><i class="material-icons left">save</i>Editar</button>
        </div>
        <div class="buttoncitos">
            <button class="modal-close btn waves-effect buttonsApp"><i class="material-icons left">cancel</i>Cerrar</button>
        </div>
    </div>
</div>
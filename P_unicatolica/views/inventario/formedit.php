  
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
        
        <div class="input-field col s8">
                        <select name="estadoinventario">
                            <option value="">Seleccione...</option>

                            <?php foreach ($this->d->select_estadoinventario as $value) {
                             if($value['Est_inv_id'] == $this->d->data[0]['Tblestado_inventario__Est_inv_id']){?>
                             <option value="<?php echo $value['Est_inv_id']; ?>"selected><?php echo $value['Est_inv_nombre']; ?></option><?php }
                            else {?>
                             <option value="<?php echo $value['Est_inv_id']; ?>"><?php echo $value['Est_inv_nombre']; ?></option>
                             <?php } }?>
                        </select>
                        <label for="estadoinventario">
                            Estado del articulo
                        </label>
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
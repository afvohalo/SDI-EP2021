  
<form id="form_salas_edit">
    <div class="row">
        <div class="col s2"></div>
        <div class="input-field col s8 ">
            <input type="text" name="name" value="<?php echo $this->d[0]['Equ_nombre'] ?>" required>
            <label class="active" for="name">
                Nombre del equipo
            </label>
        </div>

        <div class="col s2"></div>
        <div class="input-field col s8 ">
            <input type="text" name="cantidad" value="<?php echo $this->d[0]['Equ_detalles'] ?>" required>
            <label class="active" for="cantidad">
                Detalles del equipo
            </label>
        </div>

        <div class="col s2"></div>

        <div class="input-field col s8 ">
            <input type="radio" name="teclado" value="1"<?php echo $this->d[0]['Equ_teclado'] =="1" ? "checked" : ""; ?>>
                <label class="active" for="teclado"> Si </label>

            <input type="radio" name="teclado" value="0" <?php echo $this->d[0]['Equ_teclado'] =="0" ? "checked" : ""; ?>>
                <label class="active" for="teclado"> No </label>
            <label for="teclado"> El equipo tiene teclado?: </label>
            
        </div>

        <div class="input-field col s8 ">
            <input type="radio" name="mouse" value="1"<?php echo $this->d[0]['Equ_mouse'] =="1" ? "checked" : ""; ?>>
                <label class="active" for="mouse"> Si </label>

            <input type="radio" name="mouse" value="0" <?php echo $this->d[0]['Equ_mouse'] =="0" ? "checked" : ""; ?>>
                <label class="active" for="mouse"> No </label>
            <label for="mouse"> El equipo tiene mouse?: </label>
            
        </div>

        <div class="input-field col s8 ">
            <input type="radio" name="guaya" value="1"<?php echo $this->d[0]['Equ_gualla'] =="1" ? "checked" : ""; ?>>
                <label class="active" for="guaya"> Si </label>

            <input type="radio" name="guaya" value="0" <?php echo $this->d[0]['Equ_gualla'] =="0" ? "checked" : ""; ?>>
                <label class="active" for="guaya"> No </label>
            <label for="guaya"> El equipo tiene guaya?: </label>
            
        </div>

        <div class="input-field col s8 ">
            <input type="radio" name="candado" value="1"<?php echo $this->d[0]['Equ_candado'] =="1" ? "checked" : ""; ?>>
                <label class="active" for="candado"> Si </label>

            <input type="radio" name="candado" value="0" <?php echo $this->d[0]['Equ_candado'] =="0" ? "checked" : ""; ?>>
                <label class="active" for="candado"> No </label>
            <label for="candado"> El equipo tiene candado?: </label>
            
        </div>
    </div>

</form>
<div class="row">
    <div class="buttoncenter">
        <div class="buttoncitos">
            <button type="submit" class="btn waves-effect" onclick="UpdateData(<?php echo $this->d[0]['Equ_id'] ?>); return false;"><i class="material-icons left">save</i>Editar</button>
        </div>
        <div class="buttoncitos">
            <button class="modal-close btn waves-effect buttonsApp"><i class="material-icons left">cancel</i>Cerrar</button>
        </div>
    </div>
</div>
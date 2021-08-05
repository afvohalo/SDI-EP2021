<form id="form_documento_edit">  
            <input type="text" name="name" value="<?php echo $this->d[0]['Tip_doc_nombre'] ?>" required>
            <label class="active" for="name">
                Nuevo Tipo Documento
            </label>
        </div>

        
    </div>

</form>

    <div class="buttoncenter">
        <div class="buttoncitos">
            <button type="submit" class="btn waves-effect" onclick="UpdateData(<?php echo $this->d[0]['Tip_doc_id'] ?>); return false;"><i class="material-icons left">save</i>Editar</button>
        </div>
        <div class="buttoncitos">
            <button class="modal-close btn waves-effect buttonsApp"><i class="material-icons left">cancel</i>Cerrar</button>
        </div>
    </div>
</div>
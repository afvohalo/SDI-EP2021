<div id="table_data" style="border-color: red;">
    <!-- Todo lo que este dentro de este id, se actualiza, si esta afuera o antes de esto, va a pasar un bucle -->

    <div class="row">
        <div class="col s1 m1 l1 xl1"> </div>
        <div class="col s10 m10 l10 xl10">
            <div class="card z-depth-5">
                <div>
                    <div class="card-title center">
                        <h4>
                            MODULO TIPO DOCUMENTO
                        </h4>
                    </div>
                    <div class="card-content">
                        <div class="col s2"></div>
                        <div class="col s8">
                            <table id="myTable" class="responsive-table centered striped">
                                <thead>
                                    <tr>
                                        <th>Tipo Documento</th>
                                        <th class="notexportar">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                                                
foreach ($this->d as $value) {
    ?>

                                    <tr>
                                        <td><?php echo $value['Tip_doc_nombre'] ?></td>
                                        <td>
                                            <button data-target="modalDocumentoedit" class="btn modal-trigger waves-effect amber darken-4" onclick="OneData(<?php echo $value['Tip_doc_id'] ?>)"><i class="material-icons">edit</i></button>

                                            <button onclick="DeleteData(<?php echo $value['Tip_doc_id'] ?>)" class="btn modal-trigger waves-effect red darken-4"><i class="material-icons">delete</i></button>
                                        </td>
                                    </tr>
                                <?php
}
?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-action center">
                        <button data-target="modalDocumento" class="btn modal-trigger waves-effect buttonsApp"><i class="material-icons left">library_add</i>Agregar Nuevo Tipo De Documento</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col s1 m1 l1 xl1"> </div>
</div>

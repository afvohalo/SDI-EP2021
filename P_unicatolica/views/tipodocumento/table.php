    <div id="table_data">
        <!-- Todo lo que este dentro de este id, se actualiza, si esta afuera o antes de esto, va a pasar un bucle -->

        <div class="container text-center">
            <div class="col s10 ">
                <div>
                    <div class="">
                        <h4>
                            MODULO TIPO DE DOCUMENTO
                        </h4>
                        <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>

                    </div>
                    <div class="container table-responsive">
                        <table id="myTable" class="table table-bordered text-center">
                            <thead>
                                <tr class="bg-info">
                                    <th>Tipo de documento</th>
                                    <th class="notexportar">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                foreach ($this->d as $value) {
                                ?>
                                    <div class="row">
                                        <div class="col">
                                            <tr>
                                                <td><?php echo $value['Tip_doc_nombre'] ?></td>
                                                <td>
                                                    <button data-target="#modalTipodocumentoedit" class="btn btn-warning" data-toggle="modal" onclick="OneData(<?php echo $value['Tip_doc_id'] ?>)"><i class="material-icons">edit</i></button>

                                                    <button onclick="DeleteData(<?php echo $value['Tip_doc_id'] ?>)" class="btn btn-danger"><i class="material-icons">delete</i></button>
                                                </td>
                                            </tr>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="">
                    <button data-target="#modalTipoDocumento" class="btn btn-primary" data-toggle="modal">
                        <i class="material-icons left">library_add</i><br>Agregar Nuevo Tipo de Documento</button>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
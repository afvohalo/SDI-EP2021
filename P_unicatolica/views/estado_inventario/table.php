    <div id="table_data_estadoInventario">
        <!-- Todo lo que este dentro de este id, se actualiza, si esta afuera o antes de esto, va a pasar un bucle -->

        <div class="container text-center">
            <div class="col s10 ">
                <div>
                    <div class="">
                        <h4>
                            MODULO ESTADO INVENTARIO
                        </h4>
                    </div>
                    <div class="container table-responsive">
                        <table id="myTable" class="table table-bordered text-center">
                            <thead>
                                <tr class="bg-info">
                                    <th>Estado inventario</th>
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
                                                <td><?php echo $value['Est_inv_nombre'] ?></td>
                                                <td>
                                                    <button data-target="#modalEstadoInventarioEdit" class="btn btn-warning" data-toggle="modal" onclick="OneData(<?php echo $value['Est_inv_id'] ?>)"><i class="material-icons">edit</i></button>

                                                    <button onclick="DeleteData(<?php echo $value['Est_inv_id'] ?>)" class="btn btn-danger"><i class="material-icons">delete</i></button>
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
                    <button data-target="#modalEstadoInventario" class="btn btn-primary" data-toggle="modal">
                        <i class="material-icons left">library_add</i><br>Agregar Nuevo Estado </button>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
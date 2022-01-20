<div id="table_data">
        <!-- Todo lo que este dentro de este id, se actualiza, si esta afuera o antes de esto, va a pasar un bucle -->

        <div class="container text-center">
            <div class="col s10 ">
                <div>
                    <div class="">
                        <h4>
                            MODULO Inventario
                        </h4>
                    </div>
                    <div class="container table-responsive">
                        <table id="myTable" class="table table-bordered text-center">
                            <thead>
                                <tr class="bg-info">
                                    <th>Nombre del articulo</th>
                                    <th>Cantidad del articulo</th>
                                    <th>Estado del articulo</th>
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
                                                <td><?php echo $value['Inv_nombre'] ?></td>
                                                <td><?php echo $value['Inv_cantidad'] ?></td>

                                                <td><?php echo $value['Tblestado_inventario__Est_inv_id'] ?></td>
                                                <td>
                                                    <button data-target="#modalSalasedit" class="btn btn-warning" data-toggle="modal" onclick="OneData(<?php echo $value['Inv_id'] ?>)"><i class="material-icons">edit</i></button>


                                                    <button onclick="DeleteData(<?php echo $value['Inv_id'] ?>)" class="btn btn-danger"><i class="material-icons">delete</i></button>
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
                    <button data-target="#modalInventario" class="btn btn-primary" data-toggle="modal">
                        <i class="material-icons left">library_add</i><br>Agregar Nuevo articulo Al inventario</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
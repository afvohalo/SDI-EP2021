    <div id="table_data">
        <!-- Todo lo que este dentro de este id, se actualiza, si esta afuera o antes de esto, va a pasar un bucle -->

        <div class="container text-center">
            <div class="col s10 ">
                <div>
                    <div class="">
                        <h4>
                            MODULO EQUIPOS
                        </h4>
                    </div>
                    <div class="container table-responsive">
                        <table id="myTable" class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>Equipo</th>
                                    <th>Teclado</th>
                                    <th>Mouse</th>
                                    <th>Guaya</th>
                                    <th>Candado</th>
                                    <th>Estado</th>
                                    <th>Ubicacion (Sala)</th>
                                    <th class="notexportar">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                foreach ($this->d as $value) {
                                    if ($value['Equ_teclado'] == 1) {
                                        $value['Equ_teclado'] = "Si";
                                    } elseif ($value['Equ_teclado'] == 0) {
                                        $value['Equ_teclado'] = "No";
                                    }

                                    if ($value['Equ_mouse'] == 1) {
                                        $value['Equ_mouse'] = "Si";
                                    } elseif ($value['Equ_mouse'] == 0) {
                                        $value['Equ_mouse'] = "No";
                                    }

                                    if ($value['Equ_guaya'] == 1) {
                                        $value['Equ_guaya'] = "Si";
                                    } elseif ($value['Equ_guaya'] == 0) {
                                        $value['Equ_guaya'] = "No";
                                    }

                                    if ($value['Equ_candado'] == 1) {
                                        $value['Equ_candado'] = "Si";
                                    } elseif ($value['Equ_candado'] == 0) {
                                        $value['Equ_candado'] = "No";
                                    }
                                ?>
                                    <div class="row">
                                        <div class="col">
                                            <tr>
                                                <td><?php echo $value['Equ_nombre'] ?></td>
                                                <td><?php echo $value['Equ_teclado'] ?></td>
                                                <td><?php echo $value['Equ_mouse'] ?></td>
                                                <td><?php echo $value['Equ_guaya'] ?></td>
                                                <td><?php echo $value['Equ_candado'] ?></td>
                                                <td><?php echo $value['Tblestado_equipos_Est_equipos_id'] ?></td>
                                                <td><?php echo $value['Tblsalas_sal_id'] ?></td>
                                                <td>
                                                    <button data-target="#modalEquipoedit" class="btn btn-warning" data-toggle="modal" onclick="OneData(<?php echo $value['Equ_id'] ?>)"><i class="material-icons">edit</i></button>

                                                    <button onclick="DeleteData(<?php echo $value['Equ_id'] ?>)" class="btn btn-danger"><i class="material-icons">delete</i></button>
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
                    <button data-target="#modalEquipos" class="btn btn-primary" data-toggle="modal">
                        <i class="material-icons left">library_add</i><br>Agregar Nuevo Equipo</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
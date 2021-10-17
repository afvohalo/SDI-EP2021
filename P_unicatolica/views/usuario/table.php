    <div id="table_data">
    <!-- Todo lo que este dentro de este id, se actualiza, si esta afuera o antes de esto, va a pasar un bucle -->

    <div class="container text-center">
        <div class="col s10 ">
                <div>
                    <div class="">
                        <h4>
                            MODULO Usuario
                        </h4>
                    </div>
                    <div class="container table-responsive">
                            <table id="myTable" class="table table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th>Nombre1</th>
                                        <th></th>
                                        <th>NOMBRE2</th>
                                        <th></th>
                                        <th>APELLIDO1</th>
                                        <th></th>
                                        <th>APELLIDO2</th>
                                        <th></th>
                                        <th>CORREO</th>
                                        <th></th>
                                        <th>CONTRASEÑA</th>
                                        <th></th>
                                        <th>TELEFONO</th>
                                        <th></th>
                                        <th>DOCUMENTO</th>
                                        <th></th>
                                        <th>TIP DOCUEMTNO</th>
                                        <th></th>
                                        <th>ESTADO USUARIO</th>
                                        <th></th>
                                        <th>ROL USUARIO</th>
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
                                        <td><?php echo $value['Usu_nombre1'] ?></td>
                                        <td>
                                            <button data-target="#modalUsuarioedit" class="btn btn-warning" data-toggle="modal" onclick="OneData(<?php echo $value['Usu_id'] ?>)"><i  class="material-icons">edit</i></button>


                                            <button onclick="DeleteData(<?php echo $value['Usu_id'] ?>)" class="btn btn-danger"><i class="material-icons">delete</i></button>
                                        </td>


                                                                                <td><?php echo $value['Usu_nombre2'] ?></td>
                                        <td>
                                            <button data-target="#modalUsuarioedit" class="btn btn-warning" data-toggle="modal" onclick="OneData(<?php echo $value['Usu_id'] ?>)"><i  class="material-icons">edit</i></button>


                                            <button onclick="DeleteData(<?php echo $value['Usu_id'] ?>)" class="btn btn-danger"><i class="material-icons">delete</i></button>
                                        </td>

                                                                                <td><?php echo $value['Usu_apellido1'] ?></td>
                                        <td>
                                            <button data-target="#modalUsuarioedit" class="btn btn-warning" data-toggle="modal" onclick="OneData(<?php echo $value['Usu_id'] ?>)"><i  class="material-icons">edit</i></button>


                                            <button onclick="DeleteData(<?php echo $value['Usu_id'] ?>)" class="btn btn-danger"><i class="material-icons">delete</i></button>
                                        </td>


                                                                                <td><?php echo $value['Usu_apellido2'] ?></td>
                                        <td>
                                            <button data-target="#modalUsuarioedit" class="btn btn-warning" data-toggle="modal" onclick="OneData(<?php echo $value['Usu_id'] ?>)"><i  class="material-icons">edit</i></button>


                                            <button onclick="DeleteData(<?php echo $value['Usu_id'] ?>)" class="btn btn-danger"><i class="material-icons">delete</i></button>
                                        </td>

                                                                                <td><?php echo $value['Usu_correo'] ?></td>
                                        <td>
                                            <button data-target="#modalUsuarioedit" class="btn btn-warning" data-toggle="modal" onclick="OneData(<?php echo $value['Usu_id'] ?>)"><i  class="material-icons">edit</i></button>


                                            <button onclick="DeleteData(<?php echo $value['Usu_id'] ?>)" class="btn btn-danger"><i class="material-icons">delete</i></button>
                                        </td>

                                                                                <td><?php echo $value['Usu_contraseña'] ?></td>
                                        <td>
                                            <button data-target="#modalUsuarioedit" class="btn btn-warning" data-toggle="modal" onclick="OneData(<?php echo $value['Usu_id'] ?>)"><i  class="material-icons">edit</i></button>


                                            <button onclick="DeleteData(<?php echo $value['Usu_id'] ?>)" class="btn btn-danger"><i class="material-icons">delete</i></button>
                                        </td>

                                                                                <td><?php echo $value['Usu_telefono'] ?></td>
                                        <td>
                                            <button data-target="#modalUsuarioedit" class="btn btn-warning" data-toggle="modal" onclick="OneData(<?php echo $value['Usu_id'] ?>)"><i  class="material-icons">edit</i></button>


                                            <button onclick="DeleteData(<?php echo $value['Usu_id'] ?>)" class="btn btn-danger"><i class="material-icons">delete</i></button>
                                        </td>

                                                                                <td><?php echo $value['Usu_documento'] ?></td>
                                        <td>
                                            <button data-target="#modalUsuarioedit" class="btn btn-warning" data-toggle="modal" onclick="OneData(<?php echo $value['Usu_id'] ?>)"><i  class="material-icons">edit</i></button>


                                            <button onclick="DeleteData(<?php echo $value['Usu_id'] ?>)" class="btn btn-danger"><i class="material-icons">delete</i></button>
                                        </td>

                                                                                <td><?php echo $value['Tbltipo_documento_Tip_doc_id'] ?></td>
                                        <td>
                                            <button data-target="#modalUsuarioedit" class="btn btn-warning" data-toggle="modal" onclick="OneData(<?php echo $value['Usu_id'] ?>)"><i  class="material-icons">edit</i></button>


                                            <button onclick="DeleteData(<?php echo $value['Usu_id'] ?>)" class="btn btn-danger"><i class="material-icons">delete</i></button>
                                        </td>


                                                                                <td><?php echo $value['Tblestado_est_id'] ?></td>
                                        <td>
                                            <button data-target="#modalUsuarioedit" class="btn btn-warning" data-toggle="modal" onclick="OneData(<?php echo $value['Usu_id'] ?>)"><i  class="material-icons">edit</i></button>


                                            <button onclick="DeleteData(<?php echo $value['Usu_id'] ?>)" class="btn btn-danger"><i class="material-icons">delete</i></button>
                                        </td>

                                                                                <td><?php echo $value['Tblrol_id'] ?></td>
                                        <td>
                                            <button data-target="#modalUsuarioedit" class="btn btn-warning" data-toggle="modal" onclick="OneData(<?php echo $value['Usu_id'] ?>)"><i  class="material-icons">edit</i></button>


                                            <button onclick="DeleteData(<?php echo $value['Usu_id'] ?>)" class="btn btn-danger"><i class="material-icons">delete</i></button>
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
                        <button  data-target="#modalUsuario" class="btn btn-primary" data-toggle="modal">
                            <i class="material-icons left">library_add</i><br>Agregar Nuevo Rol</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>


    <div id="table_data ">
    <!-- Todo lo que este dentro de este id, se actualiza, si esta afuera o antes de esto, va a pasar un bucle -->

    <div class="container text-center">
        <div class="col s10 ">
                <div>
                    <div class="">
                        <h4>
                            MODULO MOVIMIENTO
                        </h4>
                    </div>
                    <div class="container table-responsive">
                            <table id="myTable" class="table table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th>Concepto</th>
                                        <th>Usuario</th>
                                        <th>Tipo de Movimiento</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php

foreach ($this->d as $value) {
    ?>
                                    <div class="row">
                                        <div class="col">
                                    <tr>
                                        <td><?php echo $value['Mov_concepto'] ?></td>
                                        <td><?php echo $value['Tblusuario_Usu_id'] ?></td>
                                        <td><?php echo $value['Tbltipo_movimiento_Tip_mov_id'] ?></td>
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
                </div>
            </div>
        </div>
        </div>
    </div>


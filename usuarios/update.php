<?php

global $URL, $pdo, $nombres, $email, $id_usuario_get;
include ('../app/config.php');
include ('../layout/sesion.php');
include ('../layout/parte1.php');
include ('../app/controllers/usuarios/update_usuario.php');
?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1 class="m-0">Editar Usuario</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5">
                        <div class="card card-success collapsed-card">
                            <div class="card-header">
                                <h3 class="card-title">Ingrese los Datos</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body" style="display: none;">
                                <div class="row">
                                    <div class="col-md-12">

                                        <form action="../app/controllers/usuarios/update.php" method="post">
                                            <input type="text" name="id_usuario" value="<?php echo $id_usuario_get;?>" hidden="">
                                            <div class="form-group">
                                                <label for="">Nombres</label>
                                                <input type="text" name="nombres" class="form-control" value="<?php echo $nombres;?>" placeholder="Escriba aqui el nombre del nuevo Usuario...">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Correo</label>
                                                <input type="email" name="email" class="form-control" value="<?php echo $email;?>" placeholder="Escriba aqui el Correo del nuevo Usuario...">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Contrasena</label>
                                                <input type="password"  name="password_user" class="form-control" placeholder="Escriba aqui la contrasena del Usuario...">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Repita la Contrasena</label>
                                                <input type="password" name="password_repeat" class="form-control" placeholder="Repita la Contrasena...">
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <a href="index.php" class="btn btn-secondary">Cancelar</a>
                                                <button type="submit" class="btn btn-success">Actualizar</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

<?php include ('../layout/mensajes.php'); ?>
<?php include ('../layout/parte2.php'); ?>
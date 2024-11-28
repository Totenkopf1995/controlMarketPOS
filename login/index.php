<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Ventas</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../public/templeates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../public/templeates/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/templeates/AdminLTE-3.2.0/dist/css/adminlte.min.css">

<!--Libreria Sweetallert2-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body class="hold-transition login-page">
<div class="login-box">
    <!-- /.login-logo -->

    <?php
    session_start();
        if(isset($_SESSION['mensaje'])){
            $respuesta = $_SESSION['mensaje']; ?>
            <script>
                Swal.fire({
                    position: "top-end",
                    icon: "error",
                    title: '<?php echo $respuesta;?>',
                    showConfirmButton: false,
                    timer: 1500
                });
            </script>
    <?php
        }
    ?>


    <div style="text-align: center;">
        <img
            src="https://img.freepik.com/free-vector/profitable-partnership-business-partners-cowork-affiliate-marketing-cost-effective-marketing-solution-affiliate-marketing-management-concept_335657-27.jpg?t=st=1726887549~exp=1726891149~hmac=7689ee39dd971dbec570764b7de7264c6829d3c351aa9d1f253bc8b71bdf51f3&w=900"
            alt="Imagen ventas"
            width="300px"
        >
    </div>
<br>
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="../public/templeates/AdminLTE-3.2.0/index2.html" class="h1"><b>Sistema de </b>Ventas</a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Ingrese sus Datos</p>

            <form action="../app/controllers/login/ingreso.php" method="post">
                <div class="input-group mb-3">
                    <label>
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </label>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <label>
                        <input type="password" name="password_user" class="form-control" placeholder="Password">
                    </label>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../public/templeates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../public/templeates/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../public/templeates/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
</body>
</html>

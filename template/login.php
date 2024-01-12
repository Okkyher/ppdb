<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PPDB SYS | IM SOLUSI</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page" style="background-image: url('dist/img/Gedung-Kelas-Ikhwan-1536x864.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <div class="login-box">
        <div class="login-logo">
            <a href="./"><b>PPDB SYS</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Login PPDB SMK IM Solusi</p>
            <form id="loginForm">
                <div class="form-group has-feedback">
                    <input type="text" id="username" class="form-control" placeholder="NISN">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" id="password" class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" id="showPassword"> Show Password
                            </label>
                        </div>
                        <p>Belum Punya Akun? <b><a href="./?page=pendaftaran">Daftar Disini</a></b> </p>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="button" onclick="actLogin();" class="btn btn-primary btn-block btn-flat">Login</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 3 -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js"></script>
    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });

            // Toggle password visibility when the checkbox is checked or unchecked
            $('#showPassword').on('ifChanged', function() {
                var passwordInput = $('#password');
                passwordInput.attr('type', this.checked ? 'text' : 'password');

            });
        });

        async function actLogin() {
            try {
                const username = document.getElementById('username').value;
                const password = document.getElementById('password').value;

                const response = await $.ajax({
                    url: 'include/action.php',
                    method: 'POST',
                    data: {
                        aksi: 'login',
                        username: username,
                        password: password
                    }
                });

                var pesan = response.message;
                var suk = response.success;

                // Assuming that your server responds with a JSON object
                if (response.success == true) {
                    alert(pesan);
                    window.location = './';
                } else {
                    alert(pesan);
                }
            } catch (error) {
                console.error('An error occurred during the login request:', error);
                alert('An error occurred. Please try again later.');
            }
        }
    </script>
</body>

</html>
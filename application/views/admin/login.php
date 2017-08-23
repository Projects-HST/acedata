<!DOCTYPE html>
<html>


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Eite | Login</title>

    <link href="<?php echo base_url();  ?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();  ?>assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url();  ?>assets/admin/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();  ?>assets/admin/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

              
            </div>
            <h3>Welcome to Farmile</h3>

            <div>


<?php
if (isset($loginfailed)) {  ?>
<div class="alert alert-danger">
Check username Or password
</div>
<?php
}
?>
            </div>
            <p>Login in. To see it in action.</p>
            <form class="m-t" role="form" action="<?php echo base_url(); ?>Loginctrl/logincheck" method="post">
                <div class="form-group">
                    <input type="text" class="form-control"  name="username" placeholder="Username" >
                </div>
                <div class="form-group">
                    <input type="password" class="form-control"  name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>



            </form>

        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url();  ?>assets/admin/js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url();  ?>assets/admin/js/bootstrap.min.js"></script>

</body>


</html>

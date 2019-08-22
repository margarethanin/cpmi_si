<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Sistem Informasi PT SMU Jogja</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="shortcut icon" href="<?php echo base_url() ?>/assets/img/logosmu.png"/>
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/matrix-login.css" />
        <link href="<?php echo base_url() ?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="loginbox">            
            <form id="loginform" class="form-vertical">
                <div class="control-group normal_text"> <h3><img src="<?php echo base_url() ?>/assets/img/smu.png" alt="Logo" /></h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span>
                            <input type="text" placeholder="Username" name="username"/>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span>
                            <input type="password" placeholder="Password" name="password"/>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <!--<span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span>-->
                    <span class="pull-right">
                        <button type="submit" class="btn btn-success"/> Login </button>
                    </span>
                </div>
            </form>
        </div>

        <script src="<?php echo base_url() ?>/assets/js/jquery.min.js"></script>  
        <script src="<?php echo base_url() ?>/assets/js/matrix.login.js"></script> 
    </body>

</html>

<script>
    $('#loginform').submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: "<?php echo site_url('Login/proses_login'); ?>",
            type: 'POST',
            data: $(this).serialize(),
            success: function (data) {
                console.log(data);

                if (data === "1") {
                    location.assign("<?php echo site_url('Welcome'); ?>");

                } else {
                    alert("Coba Lagi!");
                }
            },
            error: function (j, t, e) {
                aler("Error!");
            }
        });
    });
</script>

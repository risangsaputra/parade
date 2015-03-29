<!DOCTYPE html>
<html>
<head>
    <title>Form Registrasi</title>
    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/bootstrap.css')?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/style.css')?>"/>
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-5 col-md-offset-3">
                <form class="form-horizontal" action="" method="post">
                        <h3 class="text-center"><img src="images/laravel-logo-white.png" width="100px" class="logo-right"></a>LARAVEL 4.2 RSS</h3>
                            <legend></legend>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Email</label>
                                     <div class="col-md-9">
                                        <input name="email" type="text" class="form-control" required>
                                    </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Password</label>
                                     <div class="col-md-9">
                                        <input name="password" type="password" class="form-control" required>
                                    </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Nim</label>
                                     <div class="col-md-9">
                                        <input name="nim" type="text" class="form-control" required>
                                    </div>

                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label"></label>
                                     <div class="col-md-9">
                                        <input type="submit" name="submit" value="Register" class="btn btn-danger form-control">
                                    </div>  
                            </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>


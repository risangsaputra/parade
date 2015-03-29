<!DOCTYPE html>
<html>
<head>
    <title>Form Pelanggan</title>
    <link rel="stylesheet" type="text/css" href="<?php echo asset('public/css/bootstrap.css')?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo asset('public/css/style.css')?>"/>
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
               <h3 class="text-center"><img src="public/images/laravel-logo-white.png" width="100px" class="logo-right"></a>LARAVEL 4.2 RSS</h3>
                    <p><a href="<?php echo asset('create'); ?>" class="btn btn-primary btn-sm">Add user</a></p>
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Name user</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Option</th>
                                    <?php
                                    $i=1;
                                        if (count($daftar_user) == 0){
                                            echo '<tr><td colspan="3"><h4 class="text-center"><img src="images/hata.png" width="50px" class="logo-right"></a>File Not Found</h4></td></tr>';
                                         }
                                        else{
                                            foreach ($daftar_user as $usr) {
                                            echo '<tr><td></td><td>'.$usr->name.'</td><td>'.$usr->email.'</td><td>'.$usr->address.'</td><td>'.$usr->phone.'</td> ' ;
                                            echo '<td><a href="" class="btn btn-warning btn-sm">Edit</a> <a href="" class="btn btn-danger btn-sm ">Delete</td></tr>';
                                                }
                                            }

                                    ?>
                            </tr>
                        </table>        
            </div>
        </div>
    </div>
</div>

</body>
</html>


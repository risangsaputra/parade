<!DOCTYPE html>
<html>
<head>
    <title>Form Pelanggan</title>
    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/bootstrap.css')?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/style.css')?>"/>
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-5 col-md-offset-3">
               <h3 class="text-center"><img src="images/laravel-logo-white.png" width="100px" class="logo-right"></a>LARAVEL 4.2 RSS</h3>
               
                <h1>daftar User</h1>
    <p><a href="">Tambah user</a></p>
    <table>
        <tr>
            <th>nama user</th>
            <th>Email</th>
            <th>Option</th>
            <?php
            if (count($daftar_user)==0){
                echo '<tr><td colspan="3">belum ada data </td></tr>';
            }else{
                foreach ($daftar_user as $usr {
                    echo '<tr><td>'.$usr->name.'</td><td>'.$usr->email.'</td>';
                    echo '<a href="">edit </a> <a href="">Edit</tr>';
                    
                }
            }

            ?>
        
    </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>


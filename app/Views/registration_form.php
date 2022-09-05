<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="<?= base_url() ?>/public/assets/style.css">
        </link>
        <title>Document</title>
    </head>

    <body>
        <div class="container-fluid d-flex flex-column justify-content-center align-items-center h-100">
            <div class="top-background"></div>
            
            <?php 
                if(isset($validation))
                {
                    echo $validation->listErrors();
                }
            ?>    
            <?= form_open('post'); ?>
            <div class="form-group">
                <label for="username_input">Username</label>
                <input name="username" id="username_input" class="form-control" type="text" placeholder="Enter User Name" />
            </div>
            <div class="form-group">
                <label for="password_input">Password</label>
                <input name="password" id="password_input" class="form-control" type="password" placeholder="Enter User Name" />
            </div>
            <button type="submit" name="register" class="btn btn-success float-right">Register</button>
            <?= form_close(); ?>
            <a class="mt-2  float-rightfw-smaller" href="./login.php">Already registered? Sign IN</a>
        </div>
    </body>

</html>
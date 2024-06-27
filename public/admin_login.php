<?php
    require('../includes/admin_form.php');
?>
<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- BOOTSTRAP link-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- CSS link-->
    <link rel="stylesheet" type="text/css" href="../css/essentials.css" />

    <!-- FONT link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+FR+Moderne:wght@100..400&display=swap" rel="stylesheet">
    
</head>


<div class="container text-center col-7 col-md-5 col-lg-4 col-xl-3 infoCard">
    <h1>ADMIN LOGIN</h1>
    <?php
        if ($key !== NULL) 
            foreach($key as $k)
                if($k === 0)
                    echo $flag[$k];
    ?>
    <form action="" method="post">
        <label for="email" >Enter E-mail</label><br>
        <input type="text" name="email" id="email" placeholder="Email"> <br>        
        <label class="errormsg" for="email" ><?php
            if ($key !== NULL) 
                foreach($key as $k)
                    if($k%2 === 0)
                        echo $flag[$k];
            ?>
        </label><br>

        <label for="pwd">Enter password</label><br>
        <input type="password" name="pwd" id="pwd" placeholder="Password"> <br>         
        <label class="errormsg" for="pwd" ><?php
            if ($key !== NULL) 
                foreach($key as $k)
                    if($k%2 === 1)
                        echo $flag[$k];
            ?>
        </label><br>

     <input type="submit" name="sb" id="sb" value="submit">
    </form>
</div>
</body>
</html>
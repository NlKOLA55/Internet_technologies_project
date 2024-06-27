<?php
    require_once '../includes/Reservation_form.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POCETNA STRANA

    </title>
    <!-- BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="../css/essentials.css" />
<body>
<?php
 include "nav.php";
?>

<div class="container text-center col-7 col-md-6 col-lg-5 col-xl-4 infoCard">
    <h1 style="text-align: center;">MAKE REZERVATION</h1>  

    <div class="row justify-content-center ">
       <div class="col-md-6" style="margin-top: 20px;"> 
        <?php
            if ($key !== NULL) 
                foreach($key as $k)
                    if($k === 0 || $k >= 5)
                        echo $flag[$k];
        ?>
       <form action="" method="post">
            
        <label for="name" >Enter name</label><br>
        <input type="text" name="name" id="name" placeholder="Enter Full Name:"> <br>
        <label class="errormsg" for="name" ><?php
            if ($key !== NULL) 
                foreach($key as $k)
                    if($k === 1)
                        echo $flag[$k];
            ?>
        </label><br>

        <label for="email">Enter E-mail</label><br>
        <input type="text" name="email" id="email" placeholder="E-mail "> <br> 
        <label class="errormsg" for="email" ><?php
            if ($key !== NULL) 
                foreach($key as $k)
                    if($k === 2)
                        echo $flag[$k];
            ?>
        </label><br>

        <label for="date" >Date:</label><br>
        <input type="date" name="date" min="<?php echo date('Y-m-d',strtotime('+1 day'))?>" 
        max="<?php echo date('Y-m-d', strtotime('+1 year'))?>" > <br>       
        <label class="errormsg" for="date" ><?php
            if ($key !== NULL) 
                foreach($key as $k)
                    if($k === 3)
                        echo $flag[$k];
            ?>
        </label><br>

        <label for="seats"> number of seats </label>    
        <select name="seats" id="seats">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select> <br>
        <label class="errormsg" for="seats" ><?php
            if ($key !== NULL) 
                foreach($key as $k)
                    if($k === 4)
                        echo $flag[$k];
            ?>
        </label><br>
        <input type="submit" name="sb" id="sb" value="submit">
      </form>  
     </div> 
    </div>
</div> 

</body>
</html>
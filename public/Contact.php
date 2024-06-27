<?php
    require('../includes/Contact_form.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CUSTOMER SERVIS</title>
    <!-- BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="../css/essentials.css" />
</head>

<body>
<?php
 include "nav.php";
?>


<div class="container text-center infoCard">
        <h1>CUSTOMER SERVIS</h1>
        <label class="errormsg" for="error">
        <?php
            if ($key !== NULL) 
                foreach($key as $k)
                    if($k === 0 || $k >= 5)
                        echo $flag[$k];
        ?>
        </label>
        <form action="" method="post">
        <div class="row justify-content-around">  
            <div class="col-lg-6 col-md-12" style="margin-top: 20px ;">
                <label for="name" >Enter name</label><br>
                <input type="text" name="name" id="name" placeholder="Name"> <br>
                <label class="errormsg" for="name" ><?php
                    if ($key !== NULL) 
                        foreach($key as $k)
                            if($k === 1)
                                echo $flag[$k];
                    ?>
                </label><br><br>

                <label for="contact">How do we contact you?</label><br>
                <input type="text" name="contact" id="contact" placeholder="E-mail or Phone"> <br>
                <label class="errormsg" for="contact" ><?php                    
                    if ($key !== NULL) 
                        foreach($key as $k)
                            if($k === 2 )
                                echo $flag[$k]; 
                    ?>
                </label><br><br>

                <label for="option"> Type of question: </label>
                <select name="option" id="option">
                    <option value="General">General</option>
                    <option value="Menu"> Menu</option>
                    <option value="Reservation">Reservation</option>
                    <option value="AboutUs">About Us</option>
                    <option value="Complaint">Complaint</option>
                </select> <br>
                <label class="errormsg" for="option" ><?php                     
                    if ($key !== NULL) 
                        foreach($key as $k)
                            if($k === 3)
                                echo $flag[$k]; 
                    ?>
                </label><br><br>
            </div>
            
            <div class=" col-lg-6 col-md-12" style="margin-top: 20px ;">
                <label for="text">Input message:</label> <br>
                <textarea name="text" id="text" cols="50" rows="4"></textarea><br>
                <label class="errormsg" for="text" ><?php                     
                    if ($key !== NULL) 
                        foreach($key as $k)
                            if($k === 4)
                                echo $flag[$k]; 
                    ?>
                </label><br><br>
            </div>
        </div>

        <input style="margin: 20px ;" type="submit" name="sb" id="sb" value="submit">

        <div class="ContactInfo">
            <p>broj telefona : 000000000</p>
            <p>Fiksni telefon : 000000000</p>
            <P>locadet at:  addres</P>
        </div>
    </form>   
</div>
    
</body>

</html>
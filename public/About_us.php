<?php
    require('../includes/Contact_form.php');
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
</head>
<body>

<?php
    include "nav.php";
?>



<div class="container">
    <div class="infoCard">
        <h1>HISTORY</h1>
        <hr>
        <div>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at ullamcorper nisi, in cursus nunc. Sed at vehicula nunc. Aenean bibendum fringilla massa vitae facilisis. Proin vel iaculis ipsum. Integer dictum felis id augue pellentesque, id interdum massa sodales. Donec sed vulputate dolor, sit amet lobortis sapien. Sed aliquet placerat sem et pharetra. Morbi quam odio, pellentesque eget posuere a, auctor egestas mauris. Vestibulum sed massa fermentum, vehicula neque a, facilisis elit. Donec at purus eu nibh venenatis luctus. Nulla mattis eleifend elit nec ultrices.
        </p>
        <p>
            Integer efficitur mi sit amet dolor fringilla porttitor. Sed quis felis diam. Etiam quis ornare ante. Maecenas in urna luctus, sodales tellus vel, volutpat neque. Donec hendrerit nec est id iaculis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam condimentum enim ac augue placerat, at dapibus purus vulputate. Proin in lobortis massa, aliquam dignissim mauris. Donec efficitur velit risus, in placerat libero accumsan non. Cras eu semper ante. Maecenas tortor velit, mattis eu mauris tincidunt, efficitur laoreet mauris. Aliquam erat volutpat. Morbi feugiat nisi at est aliquet, ut auctor ipsum efficitur. Nulla facilisi. Vestibulum commodo quam a congue sagittis. Ut elit nibh, mattis eget pretium vitae, egestas id nisl.
        </p>
        <p>
            Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec placerat a ante ac varius. Curabitur quis nisl lacus. Aenean metus massa, porttitor vel justo id, ornare finibus nibh. Nunc nec nisi ante. Nam ultricies a justo at lacinia. Maecenas nec imperdiet tortor, maximus ultrices metus. Nam sed volutpat nunc, quis bibendum quam. Nulla vestibulum volutpat dolor, vitae vehicula ex accumsan eget. Sed sit amet sollicitudin justo. Curabitur id venenatis libero. Mauris laoreet aliquet libero sit amet varius.
        </p>
        <p>
            Etiam sed felis ut lacus gravida facilisis a sed elit. Cras pretium magna orci, sed laoreet mauris dapibus eget. In tempus augue ut lorem sagittis ornare eget ac nisi. Vestibulum dui turpis, efficitur quis fringilla at, condimentum vel mi. Praesent vitae porta velit. Sed accumsan feugiat malesuada. Duis placerat tellus sit amet mattis auctor. Pellentesque sit amet egestas quam. Donec malesuada nulla pulvinar mauris molestie pellentesque venenatis a justo. Cras pharetra finibus neque ut dictum. Etiam finibus ut est quis efficitur. Curabitur id lobortis dolor.
        </p>
        <p>
            Praesent pulvinar justo iaculis erat facilisis feugiat. Quisque vehicula tincidunt nisi in fermentum. Cras non congue purus. Nulla elit est, interdum in magna non, luctus placerat metus. Ut neque libero, commodo et elementum sed, rhoncus eu neque. Curabitur nec mi dolor. Donec non justo justo. Nulla interdum scelerisque neque, sed rutrum mi blandit nec. Fusce vehicula laoreet magna, nec porttitor sem blandit quis. Integer dolor dui, congue vel odio non, maximus mattis nulla. Proin sem metus, ultricies sit amet mauris a, elementum semper metus.
        </p>
        </div>
    </div>

    <div class="infoCard" style="margin-bottom: 20px;">
        <h1>ABOUT US</h1>
        <hr>
        <div>
        <p>
            Etiam sed felis ut lacus gravida facilisis a sed elit. Cras pretium magna orci, sed laoreet mauris dapibus eget. In tempus augue ut lorem sagittis ornare eget ac nisi. Vestibulum dui turpis, efficitur quis fringilla at, condimentum vel mi. Praesent vitae porta velit. Sed accumsan feugiat malesuada. Duis placerat tellus sit amet mattis auctor. Pellentesque sit amet egestas quam. Donec malesuada nulla pulvinar mauris molestie pellentesque venenatis a justo. Cras pharetra finibus neque ut dictum. Etiam finibus ut est quis efficitur. Curabitur id lobortis dolor.
        </p>
        <p>
            Praesent pulvinar justo iaculis erat facilisis feugiat. Quisque vehicula tincidunt nisi in fermentum. Cras non congue purus. Nulla elit est, interdum in magna non, luctus placerat metus. Ut neque libero, commodo et elementum sed, rhoncus eu neque. Curabitur nec mi dolor. Donec non justo justo. Nulla interdum scelerisque neque, sed rutrum mi blandit nec. Fusce vehicula laoreet magna, nec porttitor sem blandit quis. Integer dolor dui, congue vel odio non, maximus mattis nulla. Proin sem metus, ultricies sit amet mauris a, elementum semper metus.
        </p>
        </div>

        
    </div>

    <div class=" text-center infoCard">
        <h1>CUSTOMER SERVIS</h1>
        <?php
            if ($key !== NULL && is_array($key)) 
                foreach($key as $k)
                echo $flag[$k];
        ?>
        <form action="" method="post">
        <div class="row justify-content-around">  
            <div class="col-lg-6 col-md-12" style="margin-top: 20px ;">
                <label for="name" >Enter name</label><br>
                <input type="text" name="name" id="name" placeholder="Name"> <br> <br>

                <label for="contact">How do we contact you?</label><br>
                <input type="text" name="contact" id="contact" placeholder="E-mail or Phone"> <br> <br>

                <label for="option"> Type of question: </label>
                <select name="option" id="option">
                    <option value="General">General</option>
                    <option value="Menu"> Menu</option>
                    <option value="Reservation">Reservation</option>
                    <option value="AboutUs">About Us</option>
                    <option value="Complaint">Complaint</option>
                </select>
            </div>
            
            <div class=" col-lg-6 col-md-12" style="margin-top: 20px ;">
                <label for="text">Input message:</label> <br>
                <textarea name="text" id="text" cols="50" rows="4"></textarea>
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
</div>    
</body>
</html>
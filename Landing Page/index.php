<?php
include '../koneksi.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,700;1,100;1,200;1,300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    
    <div class="navbar">

        <p id="rolex1">ROLEX</p>
        <a href="#"><p id="home">HOME</p></a>
        <a href="#"><p id="best">Best Seller</p></a>
        <a href="#"><p id="standard">Standard</p></a>
        <a href="#"><p id="discount">Discount</p></a>

    </div>

    <div id="kotak1">

    <?php
        $query = " select * from hero_page ";
        $result = mysqli_query($connect, $query);
 
        while ($data = mysqli_fetch_assoc($result)) {
        ?>
            <img id="gambar1" src="../image/<?php echo $data['gambar']; ?>">
            <p id="kata1"><?php echo $data['judul']; ?></p>
        <p id="kata2"><?php echo $data['sub_judul']; ?></p>
        <?php
        }
?>
<!--         
        <img src="../image/orangcool.png" alt="" id="gambar1">
        <p id="kata1">Rolex will make you <br> be your self</p>
        <p id="kata2">ROLEX  Jam tangan Rolex dibuat <br>    dari bahan mentah terbaik dan <br> dirakit dengan perhatian yang <br> mendalam terhadap detail. <br> Setiap komponen</p> -->
    </div>

   <div id="kotak5">

    <div id="kotak3">
        <div id="kotak6"></div>
        <div id="kotak7"></div>
        <img src="../image/jam1.png" alt="" id="gambar2">
        <p id="kata3">Bold Chronograph <br> Rose Dial Men <br> Watch</p>
        <p id="kata4">$440.00</p>
    </div>

    <div id="kotak4">
        <div id="kotak9"></div>
        <img src="../image/gambar3.jpg" alt="" id="gambar3">
        <p id="kata9">Rolex Cosmograph <br> Daytona</p>
        <p id="kata10">$440.00</p>
    </div>

   </div>

   <div id="kotak8">
    <p id="kata5">ROLEX</p>
    <div id="footer">
        <ul id="footer1">
            <li id="li"><i class="fa-brands fa-facebook-f"></i></li>
            <li id="li"><i class="fa-brands fa-twitter"></i></li>
            <li id="li"><i class="fa-brands fa-instagram"></i></li>
            <li id="li"><i class="fa-regular fa-envelope"></i></li>
        </ul>
    </div>
   </div>

</body>
</html>
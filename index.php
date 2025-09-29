<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-class-1-variable</title>
</head>
<body>

<!-- Static -->
<h1>Hello PHP</h1>  

<!-- Dynamic  -->
<h1><?php echo "Hello";?> PHP</h1>

<!-- 'echo' is used for showing information/result on browser -->
<?php 
echo "Masud"; //ata akta statement
echo " Majed"; //space before name for getting gap
echo " Mamun";
?>

<!-- Variable  -->
<h5>Kono data/information k store kore rakhar jonno variable use kora hoy. Jate agolo pore use kora jai.</h5>

<?php 
$name = "Masud Rana "; //akhane ($name) akta variable. akhane string data ("Masud") k store kore hoyeche

$price = 100; // '$price' akta variable and 100 holo number data/value.

$address = ' village: Alamnagar, Thana: Nainagar, post code: 3410 '; // $address akta variable and 'village: Alamnagar, Thana: Nainagar, post code: 3410' holo string data/value. 

$isAdmin = true; //'$isAdmin' akta variable and true holo bolean data/value.

echo $name;
echo $price;
echo $address;
echo $isAdmin;
?>


</body>
</html> 


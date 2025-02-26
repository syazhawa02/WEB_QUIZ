<?PHP 
# memulakan fungsi session_start bagi membolehkan pembolehubah super global session digunakan
session_start(); ?>
<!doctype HTML>
<html>
    <head> 
        <title>KUIZ SEJARAH</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
        <style>
        .w3-tangerine {
        font-family: "Tangerine", serif;
}
</style>
        </head> 
<body background='images/background9.jpg' >

<!-- header -->
<div class="w3-container w3-teal" >
    <h1 class="w3-container stylesheet w3-text-white" align='center'><b>
    <i class="fa fa-ravelry" aria-hidden="true"> </i> 
    KUIZ SEJARAH</b></h1>
</div>
<!-- Menu bahagian Murid -->
<div class="w3-bar w3-light-grey">
<?PHP if(!empty ($_SESSION) and basename($_SERVER['PHP_SELF']) != 'index.php'){ ?>
<?PHP echo  "<span class='w3-bar-item w3-button'>Nama Murid : ". $_SESSION['nama_murid']. "</span>";?>
 <a class="w3-bar-item w3-button" href='pilih_latihan.php'>Laman Utama</a>
 <a class="w3-bar-item w3-button" href='../logout.php'>logout</a>

<?PHP }
else
echo "<span class='w3-bar-item'>Selamat Datang.Sila log Masuk</span>" ;?>
</div>
<!-- isi kandungan --> 
<div class="w3-container">
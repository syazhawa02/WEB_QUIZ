<?PHP 
# memulakan fungsi session_start bagi membolehkan pembolehubah super global session digunakan
session_start(); ?>
<!doctype HTML>
<html>
    <head> 
        <tittle></tittle>
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
<body background='images/background4.jpg' >

<!-- header -->
<div class="w3-container w3-amber">
    <h1 class="w3-container w3-tangerine w3-text-Pale red" align='center'><b>
    <i class="fa fa-user-circle" aria-hidden="true"> </i> 
    KUIZ SEJARAH</b></h1>
</div>
<!-- Menu bahagian Murid -->
<div class="w3-bar w3-yellow">
<?PHP if(!empty ($_SESSION) and basename($_SERVER['PHP_SELF']) != 'index.php'){ ?>
<?PHP echo "<span class='w3-bar-item w3-button'>Nama Murid : ". $_SESSION['nama_murid']. "</span>";?>
 <a class="w3-bar-item w3-button" href='pilih_latihan.php'>Laman Utama</a>
 <a class="w3-bar-item w3-button" href='logout.php'>logout</a>

<?PHP }
else
echo "<span class='w3-bar-item'>Selamat Datang.Sila log Masuk</span>" ;?>
</div>
<!-- isi kandungan --> 
<div class="w3-container">


    isi kandungan

    
</div>

<!-- footer --> 
<div class="w3-container w3-amber">
<!-- Gunakan ayat yang lebih sesuai -->
<p>Hakcipta &copy 2020-2021 : Cargas Solution</p>
<p>Penafian : Pihak admin tidak bertanggungjawap atas kerugian dan kehilangan
akibat penggunaan data yang terkandung dalam sistem ini</p>
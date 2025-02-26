<?PHP 
# Memulakan fungsi session
session_start();
# Memanggil fail guard_guru.php
include ('guard_guru.php'); 
# Memanggil fail connection dari folder utama
include ('../connection.php');
# Menguji pembolehubah session tahap mempunyai nilai atau tidak
if(empty($_SESSION['tahap']))
{
    # proses untuk mendapatkan tahap pengguna yang sedang login samada admin atau guru
    $arahan_semak_tahap="select* from guru where 
    nokp_guru   =   '".$_SESSION['nokp_guru']."' 
    limit 1";
    $laksana_semak_tahap=mysqli_query($condb,$arahan_semak_tahap);
    $data=mysqli_fetch_array($laksana_semak_tahap);
    $_SESSION['tahap']=$data['tahap'];
}
?>
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
<body background='../images/background4.jpg' >

<!--Header-->
<div class="w3-container w3-yellow ">
<h1 class="w3-container w3-tajuk w3-text-Pale red" align='center'><b>
    <i class="fa fa-user-circle" aria-hidden="true"> </i> 
    BAHAGIAN GURU: ADMINSTRATOR </b></h1>
</div>

<!--Menu-->
<div class="w3-bar w3-khaki">
  <a href="'index.php'" class="w3-bar-item w3-button">Laman Utama</a>
  <a href="../logout.php" class="w3-bar-item w3-button w3-right w3-amber ">Logout</a>


  <div class="w3-dropdown-hover">
  <?PHP if($_SESSION['tahap']=='ADMIN'){ ?>
    <button class="w3-button">ADMIN</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href='guru_senarai.php' class="w3-bar-item w3-button">Maklumat Guru</a>
      <a href='murid_senarai.php' class="w3-bar-item w3-button">Pengurusan Murid</a>
      <a href='senarai_kelas.php' class="w3-bar-item w3-button">Pengurusan Kelas</a>
    </div>
  </div>
  <?PHP } ?>

  <div class="w3-dropdown-hover W3-khaki">
    <button class="w3-button">GURU</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href='soalan_set.php' class="w3-bar-item w3-button">Pengurusan Soalan</a>
      <a href='analisis.php'   class="w3-bar-item w3-button">Analisis Prestasi</a>
      
    </div>
  </div>

</div>



<!--isi kandungan -->
<div class="w3-container">
  <p>ISI KANDUNGAN</p>
  
</div>

<?php include ('../iklan_bawah.php');?>
<!--footer-->
<div class="w3-container w3-khaki">
  <p >HAK CIPTA NUR SYAZIRA HAWANI</p>
</div>
<?PHP mysqli_close($condb); ?>

</body>
</html>
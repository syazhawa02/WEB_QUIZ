<?PHP
# Menyemak kewujudan data pada pembolehubah session [nama_murid]
if(empty($_SESSION['nama_murid']))
{
    #jika pembolehubah session tidak mempunyai nilai, papar pop up dan buka fail index di laman utama
    die("<script>alert('Akses tanpa kebenaran. Sila login');
         window.location.href='../index.php';</script>
        ");
}

?>
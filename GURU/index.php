<?PHP 
# memanggil fail header.php
include ('header_guru.php'); 

# Memaparkan nama guru dah tahap
echo "
<div class=' w3-center w3-panel w3-topbar w3-bottombar w3-border-teal w3-pale-green'>
<p>
  Nama Guru : ".$_SESSION['nama_guru']."(".$_SESSION['tahap'].")
</p>


  </div>
";
?>

<!-- Memaparkan senarai latihan terkini -->
<b class='w3-text-black w3-xxlarge'> SENARAI LATIHAN TERKINI </b>
<div class='w3-responsive'>
<table border='1' id='besar'class= 'w3-table-all w3-hoverable w3-margin-top'>
        <tr class='w3-teal'>
            <td>Topik</td>
            <td>Kelas</td>
            <td>Nama Guru</td>
        </tr>
        <?PHP 
        # Arahan untuk mencari data guru, kelas dan set_soalan
        $arahan_latihan="SELECT* FROM set_soalan, guru, kelas
        WHERE
                    set_soalan.nokp_guru		=		guru.nokp_guru
        AND 	    kelas.nokp_guru			    =		guru.nokp_guru
        ORDER BY    set_soalan.tarikh ASC ";

        # Melaksanakan arahan carian di atas
        $laksana_latihan=mysqli_query($condb,$arahan_latihan);

        #mengambil data dan memaparkan semula data tersebut
        while($rekod=mysqli_fetch_array($laksana_latihan))
        {
            echo "
            <tr>
                <td>".$rekod['topik']."</td>
                <td>".$rekod['ting']." ".$rekod['nama_kelas']."</td>
                <td>".$rekod['nama_guru']."</td>           
            </tr>";
        }

        ?>
        </table>
</div>
<?PHP include('footer_guru.php'); ?>
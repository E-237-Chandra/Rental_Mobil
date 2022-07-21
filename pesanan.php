<html>
    <body style="background-color: rgb(85, 85, 109); color: #fff;">
        <?php
            echo "<head><title>Daf</title></head>";
            $fp = fopen("data.txt","r");
            echo "<h1 align=center>Daftar Pesanan</h1>";
            echo "<table border=1 align=center width=90%>";
            echo "<tr><td>Jenis Mobil</td><td>Nama</td><td>Jenis Kelamin</td><td>Pick Up</td><td>Return</td><td>Alamat</td></tr>";
            while($isi = fgets($fp,80))
            {
                $pisah = explode("|",$isi);
                echo "<tr><td>$pisah[0]</td>
                <td>$pisah[1]</td>
                <td>$pisah[2]</td>
                <td>$pisah[3]</td>
                <td>$pisah[4]</td>
                <td>$pisah[5]</td></tr>";
            }
            echo "</tabel>";
            echo "<p align=center><a href=index.html>Klik Untuk Kembali Ke Layar Utama</a></p>";
        ?>
    </body>
</html>
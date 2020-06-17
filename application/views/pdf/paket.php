
<!DOCTYPE html>
<html>
<head>
    <title>Cetak PDF</title>
    <style>
        table, td, th {    
            border: 1px solid #ddd;
            text-align: left;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
        }

    </style>
</head>
<body>
    <h2 align="center">Laporan Pemesanan Paket Wisata</h2>
    
    <br>
    
    <table>
        <thead>
            <tr style="background-color:#ccc;">
                <th><center>No.</center></th>
                <th><center>Nama Paket Wisata</center></th>
                <th><center>Total Pemesan</center></th>
            </tr>
        </thead>
        <tbody>

            <?php 
            $no=0;
            $jumlah = 0;
            foreach($paket as $p){ ?>
                    <tr>
                        <td><center><?php echo ++$no;?></center></td>
                        <td><center>
                             <?php 
                            echo $p['nama_paketwisata'];
                         
                            ?>
                        </center></td>
                        <td><center>
                        <?php
                            $paket = $this->Pemesanan_model->laporanpaket($p['id_paketwisata']);
                            echo count($paket);
                        ?>
                        </center></td>
                        
                    </tr>
            <?php

           
             } ?>

            <?php 
            if(count($paket)==0){
              echo "<tr><td colspan='6' align='center'>Tidak Ada data</td></tr>";
            }
            ?>
        </tbody>
    </table>
     <script type="text/javascript">
         window.print();
      </script>
</body>
</html>
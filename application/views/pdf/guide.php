
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
                <th><center>Nama Tour Guide</center></th>
                <th><center>Total Pemesan</center></th>
            </tr>
        </thead>
        <tbody>

            <?php 
            $no=0;
            $jumlah = 0;
            foreach($guide as $g){ ?>
                    <tr>
                        <td><center><?php echo ++$no;?></center></td>
                        <td><center>
                            <?php 
                            echo $g['nama_tourguide'];
                         
                            ?>
                                
                        </center></td>
                        <td><center>
                        <?php
                            $guide = $this->Pemesanan_tourguide_model->laporanguide($g['id_tourguide']);
                            echo count($guide);
                        ?>
                        </center></td>
                        
                    </tr>
            <?php

           
             } ?>

            
        </tbody>
    </table>
     <script type="text/javascript">
         window.print();
      </script>
</body>
</html>
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
                <th width="20%"><center>Nama</center></th>
                <th width="20%"><center>Alamat</center></th>
                <th width="30%"><center>Paket</center></th>
                <th width="5%"><center> Jumlah Pesan</center></th>
                <th width="25%"><center> Total</center></th>
            </tr>
        </thead>
        <tbody>

            <?php 
            $no=0;
            $jumlah = 0;
            foreach($laporan as $p){ ?>
            <tr>
                <td><center><?php echo ++$no;?></center></td>
              
                <td><center><?php echo $p->nama_pemesan ?></center></td>
                <td><center><?php echo $p->alamat ?></center></td>
                <td><center>
                    
                            <?php 
                            $paket = $this->Paket_wisatum_model->get_paket_wisatum($p->nama_paket);
                         
                            echo $paket->nama_paketwisata
                            ?>
                        
                </center></td>
                <td><center><?php echo $p->jumlah_anggota ?> pax</center></td>
                <td><center><?php echo 'Rp. '.number_format($p->total, 2,',','.') ?></center></td>
            </tr>
            <?php

            $jumlah = $jumlah + $p->total;
             } ?>

            <?php 
            if(count($laporan)==0){
              echo "<tr><td colspan='6' align='center'>Tidak Ada data</td></tr>";
            }
            ?>
        </tbody>
    </table>
      <!-- <h6>Jumlah Transaksi: <?php echo count($laporan); ?></h6> -->
    <h6>Jumlah Pemasukan: <?php echo 'Rp. '.number_format($jumlah, 2,',','.')  ?></h6>
     <script type="text/javascript">
         window.print();
      </script>
</body>
</html>

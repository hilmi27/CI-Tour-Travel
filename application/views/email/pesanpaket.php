<html>
 <head>
<style type="text/css">
     #memo {
      padding-top: 10px;
      margin: 0 140px 0 140px;
      border-bottom: 1px solid #ddd;
      height: 115px;
    }
    #memo .logo {
      float: left;
      margin-right: 20px;
    }
    #memo .logo img {
      width: 150px;
      height: 100px;
    }
    #memo .company-info {
      float: right;
      text-align: right;
    }
    #memo .company-info > div:first-child {
      line-height: 1em;
      font-weight: bold;
      font-size: 22px;
      color: #B32C39;
    }
    #memo .company-info span {
      font-size: 11px;
      display: inline-block;
      min-width: 20px;
    }
    #memo:after {
      content: "";
      display: block;
      clear: both;
    }
    #items {
      margin: 0px 0px 0px 0px;
    }
    #items .first-cell, #items table th:first-child, #items table td:first-child {
      width: 20px !important;
      padding-left: 0 !important;
      padding-right: 0 !important;
      text-align: center;
    }
    #items table {
      border-collapse: separate;
      width: 100%;
    }
    #items table th {
      font-weight: bold;
      padding: 5px 8px;
      text-align: center;
      background: #B32C39;
      color: white;
      text-transform: uppercase;
    }
    #items table th:nth-child(2) {
      width: 40%;
      text-align: center;
    }
    #items table th:last-child {
      text-align: center;
    }
    #items table td {
      padding: 9px 8px;
      text-align: center;
      border-bottom: 1px solid #ddd;
    }
    #items table td:nth-child(2) {
      text-align: center;
    }
     #invoice-info {
      float: left;
      margin: 50px 40px 0 0px;
    }
    #invoice-info > div > span {
      display: inline-block;
      min-width: 20px;
      min-height: 18px;
      margin-bottom: 3px;
    }
    #invoice-info > div > span:first-child {
      color: black;
    }
    #invoice-info > div > span:last-child {
      color: #aaa;
    }
    #invoice-info:after {
      content: "";
      display: block;
      clear: both;
    }
    #invoice-title-number {
      font-weight: bold;
      margin: 10px 0;
      margin-left: 0px;
    }
    #invoice-title-number span {
      line-height: 0.88em;
      display: inline-block;
      min-width: 20px;
    }
    #invoice-title-number #title {
      text-transform: uppercase;
      padding: 0px 2px 0px 30px;
      font-size: 30px;
      background: #F4846F;
      color: white;
      margin-left: 0px;
      margin-bottom: 0px;
    }
    #invoice-title-number #number {
      margin-left: 10px;
      font-size: 30px;
      position: relative;
      top: 0px;
    }
    #invoice-info {
      float: left;
      margin: 50px 40px 20px 90px;
    }
    #invoice-info > div > span {
      display: inline-block;
      min-width: 20px;
      min-height: 18px;
      margin-bottom: 3px;
    }
    #invoice-info > div > span:first-child {
      color: black;
    }
    #invoice-info > div > span:last-child {
      color: #aaa;
    }
    #invoice-info:after {
      content: "";
      display: block;
      clear: both;
    }
    #client-info {
      float: left;
      margin-left: 0px;
      min-width: 220px;
    }
    #client-info > div {
      margin-bottom: 3px;
      min-width: 20px;
    }
    #client-info span {
      display: block;
      min-width: 20px;
    }
    #client-info > span {
      text-transform: uppercase;
    }
     #customers {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
  }

  #customers td, #customers th {
      border: 1px solid #ddd;
      padding: 8px;

  }

  #customers tr:nth-child(even){background-color: #f2f2f2;}

  #customers tr:hover {background-color: #ddd;}

  #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #B32C39;
      color: white;

  }
    </style>
    </head>
<body style="background-color:#F5F5F5;">

 <section id="memo">
        <h1 align="center" style="margin-bottom:2px">GenPI Banyuwangi</h1>
    <p align="center" style="margin:0px">Dinas Kebudayaan dan Pariwisata Kabupaten Banyuwangi | Jl. Jendral A. Yani No. 78 Banyuwangi 68416</p>
    <p align="center" style="margin-top:4px"><strong>Telp: (0333) 424172 | Email: Genpibwi@gmail.com</strong></p>

      </section>

<table width="100%" border="0" cellspacing="0" cellpadding="0">

<tr>

<td align="center">

 

<table width="560px" border="0" cellspacing="0" cellpadding="0">

<tr>

<td>
<p>
Selamat, pemesanan paket wisata yang Anda lakukan dengan rincian di bawah ini telah berhasil dikonfirmasi dan dinyatakan VALID.
                        
                         </p>
                         <?php $pemesanan = $this->Pemesanan_model->get_pemesanan($id_pemesanan); ?>
<table id="customers">
                  <tr>
                    <th>Invoice</th>
                    <th>'.$invoice.'</th>
                  </tr>
                  <tr>
                    <td>Jenis Pemesanan</td>
                    <td>Paket Wisata</td>
                  </tr>
                  <tr>
                    <td>Nama</td>
                    <td>'.$nama_pemesan.'</td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td>'.$alamat.'</td>
                  </tr>
                  <tr>
                    <td>No. Telephone</td>
                    <td>'.$no_telp.'</td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td>'.$email.'</td>
                  </tr>
                  <tr>
                    <td>Paket Wisata</td>
                    <td>'.$paket->nama_paketwisata.'</td>
                  </tr>
                  <tr>
                    <td>Jumlah Pesan</td>
                    <td>'.$jumlah_anggota.' pax</td>
                  </tr>
                  
                  <tr>
                    <td>Tanggal Trip</td>
                    <td>'.$tanggal_pemesanan.'</td>
                  </tr>
                   <tr>
                    <td>Total</td>
                    <td>'.'Rp. '.number_format($paket->harga*$jumlah_anggota, 2,',','.').'</td>
                  </tr>
                 
                  
                </table><br>
                 Syarat dan ketentuan: <br>
                            1. Salin kode unik (invoice) di langkah konfirmasi pembayaran.<br>
                            2. Transfer pembayaran di Bank BCA dengan nomor rekening 1800759711 a.n Jamul Pawaid.<br>
                            3. Lakukan konfirmasi pembayaran dengan mengupload bukti transfer di menu pembayaran atau klik <a href="localhost/genpi_banyuwangi/konfirmasi">disini</a>.<br>

                        <br>

                        Untuk info lebih lanjut, silahkan hubungi Customer Service.
                        <table border="0" style="width: 30%" style="background-color:#FFD700;">
                        <tr><th style="text-align:left">Riska</th><th>: 085791261912</th></tr>
                        <tr><th style="text-align:left">Arif</th><th>: 082143110959</th></tr>
                        </table>
                         <br>


                        </p>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" >

                        <tr>

                        <td>

                       <div class="footer">
    <p align="center"><a href style="color: #94c045">GenPI Banyuwangi</a> | Copyright 2018</p>
  </div>

                        <p><small></small></p>
                        </table>
 

</body>

</html>
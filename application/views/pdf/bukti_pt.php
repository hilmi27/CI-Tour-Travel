<html>
 <head>
<style type="text/css">
     #memo {
      padding-top: 10px;
      margin: 0 0px 0 0px;
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

 

<table width="660px" border="0" cellspacing="0" cellpadding="0">

<tr>

<td><br>
<?php echo '
<section id="client-info">

        <div>
          <span class="bold">INVOICE '.$show->invoice.'</span>
        </div>

         <div>
          <span>'.$show->nama_pemesan.'</span>
        </div>

        <div>
          <span>'.$show->alamat.'</span>
        </div>
        
        
        <div>
          <span>'.$show->no_telp.'</span>
        </div>
        
        <div>
          <span>'.$show->email.'</span>
        </div>
        <p> Selamat pemesanan tour guide Anda pada tanggal '.$show->tanggal_sekarang.' dengan detail tour guide di bawah ini berhasil dikonfirmasi dan dinyatakan valid.</p>
      </section><br>
';?>
                     

        <?php echo '
              <table cellpadding="0" cellspacing="0" border="1" width="100%">
              
                <tr>
                  <th width="20%">Tanggal Trip</th> 
                  <th width="60%">Tour Guide</th>
                  
                  <th width="20%">Total</th>
                </tr>
                
                <tr >
                  <td><center>'.$show->tanggal_pemesanan.'</center></td>
                  <td><center>'.$guide->nama_tourguide.'</center></td>
           
                  <td><center>'.'Rp. '.number_format($guide->harga, 2,',','.').'</center></td>
                </tr>
                
              </table>
              ';?>
           <br><br>

                       

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

                      

                        <p><small></small></p>
                        </table>
 

</body>
 <script type="text/javascript">
         window.print();
      </script>
</html>
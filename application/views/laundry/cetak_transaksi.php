<style type="text/css" media="print">
    @page {
        size: auto;
        /* auto is the initial value */
        margin: 0;
        /* this affects the margin in the printer settings */

    }
    #box1{



    }
    #text{
      font-family: calibri;
    }
    #textt{
      text-align: right;
      width: 5px;
    }
</style>
<br>


  <title>Cetak Transaksi </title>
</head>
<body onload="window.print();">
  <center>
 <h2>LAUNDRY HAPPY</h2>

    <h3>"Anda Senang Kami Kecewa , Anda Asik , Kami Usik"</h3>

    Jl. Haji Sitompul. 102 Kota Bekasi, Jawa Barat, Kode Pos: 90223

    Website: http://internetpositif.com/, email: ewingHd@gmail.com, no. telp/fax: (081)214749103 
        -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------  
        <h3>Catatan:Jangan Sampai Hilang </h3> 
        <br>
        <br>
        <br>

    <table border="1">
      <tr>
        <th>Nama pelanggan</th>
        <th>Tgl</th>
        <th>Batas Waktu</th>
        <th>nama Paket</th>
        <th>Harga</th>
        <th>Total</th>
        <th>Tgl Dibayar</th>
        <th>Dibayar</th>
        <th>Nama Penginput</th>
      </tr>
      <tr>
        <center>
          
        <td><?= $transaksi['nama_pelanggan']; ?></td>
        <td><?= $transaksi['tgl']; ?></td>
        <td><?= $transaksi['batas_waktu']; ?></td>
        <td><?= $transaksi['nama_paket']; ?></td>
        <td><?= $transaksi['harga']; ?></td>
        <td><?= $transaksi['total']; ?></td>
        <td><?= $transaksi['tgl_bayar']; ?></td>
        <td><?= $transaksi['dibayar']; ?></td>
        </center>
      </tr>
    </table>
  </center>


 
  
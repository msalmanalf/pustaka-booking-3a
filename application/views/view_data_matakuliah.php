<head>
     <title>Hasil Nilai</title>
</head>

<body>
     <table>
          <tr>
               <th colspan="3">Tampil Data Nilai</th>
          </tr>
          <tr>
               <td colspan="3"></td>
          </tr>
          <tr>
               <th>Kode MTK</th>
               <th>:</th>
               <td><?= $kode; ?></td>
          </tr>
          <tr>
               <th>Nama MatKul</th>
               <th>:</th>
               <td><?= $nama; ?></td>
          </tr>
          <tr>
               <th>SKS</th>
               <td>:</td>
               <td>
                    <?= $sks; ?>
               </td>
          </tr>
          <tr>
               <td colspan="3" align="center">
                    <a href="<?= base_url('matakuliah'); ?>"> Kembali</a>
               </td>
          </tr>
     </table>
</body>

</html>

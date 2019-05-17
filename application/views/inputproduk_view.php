<html>
<head>
<title>Data Buku</title>
</head>
<body><center> <h2>Data Buku</h2>
<form action= "<?php echo base_url().'showproduk/tambah' ?>" method="post">
    <table>
        <tr>
            <th>ID_PRODUCT</th>
            <td><input name="ID" type="text"></td>
        </tr>
        
        <tr>
            <th>NAMA_ITEM</th>
            <td><input name="NAME" type="text"></td>
        </tr>

        <tr>
            <th>STOK</th>
            <td><input name="STOK" type="text"></td>
        </tr>

        <tr>
            <th>HARGA</th>
            <td><input name="HARGA" type="text"></td>
        </tr>

        <tr>
            <th>DESKRIPSI</th>
            <td><input name="DESKRIPSI" type="text"></td>
        </tr>

        <tr>
            <th>GAMBAR</th>
            <td><input name="GAMBAR" type="text"></td>
        </tr>      
    </table>
    <input type="submit" value="simpan" />
</form>
</body>
</html>
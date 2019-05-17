<html>
<head>
<title>Ubah Data Buku</title>
</head>
<body><center>
<h2>Form Ubah Data Buku</h2>
<form action= "" method="post">
    <table>
        <tr>
            <th>ID_PRODUCT</th>
            <td><input name="ID_PRODUCT" value ="<?php echo $no->id ?>" type="text"></td>
        </tr>
        <tr>
            <th>NAMA_ITEM</th>
            <td><input name="NAMA_ITEM" value ="<?php echo $no->NAMA_ITEM ?>"   type="text">
        </td>          
        </tr>
        <tr>
            <th>KATEGORI_ITEM</th>
            <td><input name="KATEGORI_ITEM" value ="<?php echo $no->KATEGORI_ITEM ?>" type="text"></td>
        </tr>

        <tr>
            <th>STOK</th>
            <td><input name="STOK" value ="<?php echo $no->STOK ?>" type="text"></td>
        </tr>

        <tr>
            <th>HARGA</th>
            <td><input name="HARGA" value ="<?php echo $no->HARGA ?>" type="text"></td>
        </tr>

        <tr>
            <th>DESKRIPSI</th>
            <td><input name="DESKRIPSI" value ="<?php echo $no->DESKRIPSI ?>" type="text"></td>
        </tr>

        <tr>
            <th>GAMBAR</th>
            <td><input name="GAMBAR" value ="<?php echo $no->GAMBAR ?>" type="text"></td>
        </tr>
</table>
<input type="submit" value="simpan" />
</form>
</body>
</html>
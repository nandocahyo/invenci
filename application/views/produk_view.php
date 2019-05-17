<html>
<head>
<title>Contoh Input</title>
</head>
<body>
<h2><?php echo $title ?></h2>
<a href="<?php echo base_url().'showproduk/input';?>">Tambah Data</a>
<table border = 1>
<tr>
    <td>ID_PRODUCT</td>
    <td>NAMA_ITEM</td>
    <td>KATEGORI_ITEM</td>
    <td>STOK</td>
    <td>HARGA</td>
    <td>DESKRIPSI</td>
    <td>GAMBAR</td>
    <td>AKSI</td>
</tr>
<?php foreach ($produk as $b): ?>
  <tr>
    <td><?php echo $b->ID ?></td>
    <td><?php echo $b->NAME ?></td>
    <td><?php echo $b->STOK ?></td>
    <td><?php echo $b->HARGA ?></td>
    <td><?php echo $b->DESKRIPSI ?></td>
    <td><?php echo $b->GAMBAR ?></td>
    <td><?php echo anchor('showproduk/edit/'.$b->ID, ' Ubah ') . '| | ' .
               anchor('showproduk/delete/'.$b->ID, ' Hapus '); ?> </td>
  </tr>
<?php endforeach ?>
</table>
</body>
</html>
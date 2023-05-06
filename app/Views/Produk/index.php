<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <style>
        li{
            list-style-type : none;
        }

        fieldset{
            margin : 10px;
        }
    </style>
</head>
<body>
    <h1>Daftar produk</h1>
    <p><a href="/produk/create">Add New Product</a></p>
    <?php foreach ($produk as $data) : ?>
    <fieldset>
        <h3><li><?= $data['nama_produk'];?> | <?= $data['harga'];?></li></h3>
        <p><img src="/img/<?= $data['gambar']?>" alt="gambar produk" width="300px"></p>
        <?= $data['deskripsi'];?>
        <br/>
        <p><a href="produk/delete/<?= $data['id']?>">delete</a></p>
        <a href="/produk/edit/<?= $data['id']?>">edit</a>
    </fieldset>
    <?php endforeach;?>
</body>
</html>
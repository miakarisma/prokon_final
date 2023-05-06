<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah produk baru</title>
</head>
<body>
    <h2>Tambah Produk Baru</h2>
    <fieldset>
        <?= \Config\Services::validation()->listErrors();?>

        <form action="/produk/save" method="POST" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <label for="">Product Name</label>
            <br/>
            <input type="text" name="productName" size="50"/>
            <br/>
            <label for="">Price</label>
            <input type="text" name="price"/>
            <br/>
            <label for="">Description</label>
            <textarea name="description" id="" cols="30" rows="10"></textarea>
            <br/>
            <label for="image" id="image" class="img-label">Product Image</label>
            <img src="/img/default.jpg" width="200px" class="img-preview">
            <input type="file" id="image" name="image" class="img-input" onChange="prevImg()"/>
            <br/><br/>
            <input type="submit" value="Add">
            <input type="reset" value="Cancel">

        </form>
    </fieldset>
    <script>
        function prevImg(){
            const image = document.querySelector('.img-input');
            const imageLabel = document.querySelector('.img-label');
            const imagePreview = document.querySelector('.img-preview');

            imageLabel.textContent = image.files[0].name;

            const imageFile = new FileReader();
            imageFile.readAsDataURL(image.files[0]);

            imageFile.onload = function(e){
                imagePreview.src = e.target.result;
            }
        }
        
    </script>
</body>
</html>
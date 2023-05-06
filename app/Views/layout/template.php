<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        function prevImg(){
            const image = document.querySelector('.img-input');
            const imageLabel = document.querySelector('.img-label');
            const imagePreview = document.querySelector('.img-preview');

            imageLabel.textContent = image.files[0].name;

            const imageFile = new FileReader();
            imagefile.readAsDataURL(image.files[0]);

            imageFile.onload = function(e){
                imagePreview.src = e.target.result;
            }
        }
        
    </script>
</body>
</html>
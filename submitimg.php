<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload and Crop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css">
</head>

<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" id="imageInput" accept="image/*">
        <div>
            <img id="previewImage" style="max-width: 100%;">
        </div>
        <canvas id="croppedCanvas" style="display: none;"></canvas>
        <input type="hidden" name="croppedImage" id="croppedImage">
        <button type="submit">Upload</button>
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
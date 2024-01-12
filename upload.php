<?php
require_once('include/config.php');
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    // Process image upload
    if (isset($_FILES['image']) && isset($_POST['croppedImage'])) {
        // Get the uploaded image data
        $image = $_POST['croppedImage'];

        // Save the cropped image to a directory (you can customize the directory)
        $uploadDir = 'uploads/';
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $imageName = uniqid() . '.png'; // Unique image name
        $imagePath = $uploadDir . $imageName;

        // Save the image to the directory
        file_put_contents($imagePath, base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $image)));

        // Example of inserting data
        $stmt = $pdo->prepare("INSERT INTO `user`(`image`) VALUES(?)");
        $stmt->execute([$imagePath]);
        $pdo = null;
    }

    echo ("<META HTTP-EQUIV=Refresh CONTENT=\"0.1;URL=./submitimg.php\">");
}

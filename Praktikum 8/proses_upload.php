<?php 
$targetDirectory = "documents/";
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory,0777, true);
}

$allowedExtensions = array("jpg", "png", "jpeg");
if ($_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);


for ($i=0; $i < $totalFiles; $i++) { 
    $fileName = $_FILES['files']['name'][$i];
    $targetFile = $targetDirectory . $fileName;
    $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    if ( in_array(strtolower($fileType), $allowedExtensions) && move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
        echo"File $fileName berhasil diunggah.<br>";
    } else {
        echo "Gagal mengunggah file $fileName. <br>";
    }
}
}else {
    echo "Tidak ada file yang diunggah.";
}
?>
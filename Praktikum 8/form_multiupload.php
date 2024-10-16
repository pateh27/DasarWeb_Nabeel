<!DOCTYPE html>
<html lang="en">
<head>
    <title>Multiupload Document</title>
</head>
<body>
    <h2>Uggah Dokumen</h2>
    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple="multiple" accept=".pdf, .doc, .docx">
        <input type="submit" value="Ungah"/>
    </form>
</body>
</html>
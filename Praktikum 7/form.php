<!DOCTYPE html>
<head>
    <title>Form input PHP</title>
</head>
<body>
    <h2>Form input php</h2>
    <form method="post" action="proses_form.php">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" required><br><br>

        <label for="emai">Email</label>
        <input type="email" name="email" id="email" required><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

</body>
</html>
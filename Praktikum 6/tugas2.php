<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Assignment</title>
    <style>
        table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
    }
    th, td{
        text-align: left;
        padding: 16px;
    }
    tr:nth-child(even){
        background-color: #f2f2f2;
    }

    </style>
</head>
<body>
    <h2>Data Siswa</h2>
    <table>
        <tr>
            <td>Nama</td>
            <td>Usia</td>
            <td>Kelas</td>
            <td>Asal</td>
        </tr>
    <?php 
    $siswa = array (
        array ("Andi", 15, "10A", "Malang"),
        array ("Siti", 16, "11B", "Situbondo"),
        array ("Putri", 15, "10C", "Bondowoso"),
        array ("Budi", 17, "12D", "Surabaya"),
    );
    foreach ($siswa as $sw) {
       echo "<tr>";
       echo "<td>" . $sw[0] ."</td>";
       echo "<td>" . $sw[1] ."</td>";
       echo "<td>" . $sw[2] ."</td>";
       echo "<td>" . $sw[3] ."</td>";
       echo "</tr>";
    }
    ?>
    </table>
    <h2>Rata-rata umur siswa 
    <?php
    $total = 0;
    $jmlsiswa = count($siswa);
    foreach ($siswa as $sws) {
        $total+= $sws[1];
    } 
    $rerata = $total/$jmlsiswa;
    echo $rerata ;
    ?>
    Tahun
    </h2>
</body>
</html>
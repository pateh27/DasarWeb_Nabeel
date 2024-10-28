<?php
$serverName = "MSI"; 
$connectionOptions = [
    "Database" => "pkp",
    "TrustServerCertificate" => true, 
    "Authentication" => "ActiveDirectoryIntegrated"
];

// Membuat koneksi
$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}
?>

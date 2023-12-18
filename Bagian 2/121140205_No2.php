<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS PEMWEB</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $nim = test_input($_POST["nim"]);
    $radio = isset($_POST["Jenis_kelamin"]) ? test_input($_POST["Jenis_kelamin"]) : "Not Selected";
    $check = isset($_POST["Validasi_manusia"]) ? "true" : "false";

    echo "<h2>Hasil Data</h2>";
    echo "<p>Nama: $name</p>";
    echo "<p>Nim: $nim</p>";
    echo "<p>Jenis_kelamin: $radio</p>";
    echo "<p>Validasi_manusia: $check</p>";
    
    $browser = $_SERVER['HTTP_USER_AGENT'];
    $ip_address = $_SERVER['REMOTE_ADDR'];

    echo "<p>Browser: $browser</p>";
    echo "<p>IP Address: $ip_address</p>";

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
class User {
    private $name;
    private $nim;

    public function __construct($name, $nim) {
        $this->name = $name;
        $this->nim = $nim;
    }

    public function displayInfo() {
        echo "<p>Informasi :</p>";
        echo "<p>Nama: $this->name</p>";
        echo "<p>Nim: $this->nim</p>";
    }
}

$userObj = new User("Natanael ", "121140205");
$userObj->displayInfo();
?>
</body>
</html>
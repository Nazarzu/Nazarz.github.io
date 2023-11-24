<s><?php
// Koneksi ke database
$servername = "localhost";
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "kp";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil nilai yang dikirimkan dari formulir
$enteredNickname = $_POST['nickname'];
$enteredPassword = md5($_POST['password']);

// Periksa kecocokan di database
$sql = "SELECT * FROM acount WHERE nickname = '$enteredNickname' AND password = '$enteredPassword'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header('Location: ../Admin/index.php?status=sukses');
    // Anda dapat melakukan pengalihan ke halaman lain atau tindakan lain di sini
} else {
    $errorMessage = 'Password or username is incorrect!';
    echo '<script>window.location.href = "../Login.php?error=' . $errorMessage . '";</script>';
}

$conn->close();
?></s>
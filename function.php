<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "herbal_website";

// Create a new connection
$conn = new mysqli($servername, $username, $password, $dbname);

/**
 * Summary of query
 * @param mixed $query
 * @return array
 */
function query($query) {
    global $conn; // Added the global keyword to access the $conn variable inside the function
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row; // Changed $$rows to $rows[] to store multiple rows
    }
    return $rows; // Return the $rows array
}

// Check connection
if ($conn->connect_errno) {
    die("Database connection failed: " . $conn->connect_error);
}

function ubah($data)
{
    global $conn;

    $title = htmlspecialchars($data["title"]);
    $content = htmlspecialchars($data["content"]);
    $author_id = htmlspecialchars($data["author_id"]);
    $created_date = htmlspecialchars($data["created_date"]);
    $category_id = htmlspecialchars($data["category_id"]);

    if (isset($data["article_id"])) {
        $article_id = htmlspecialchars($data["article_id"]);
    } else {
        // lakukan sesuatu jika kunci "ID_kegiatan" tidak ditemukan
        return 0;
    }

    $query = "UPDATE kegiatan SET
                title = '$title',
                content = '$content',
                author_id = '$author_id',
                created_date = '$created_date',
                category_id = '$category_id',
                WHERE article_id = $article_id
                ";

    $result = mysqli_query($conn, $query);

    if ($result) {
        return mysqli_affected_rows($conn);
    } else {
        return 0;
    }
}
function register($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $kode_pegawai = 'pgwOZ';

    $result = mysqli_query($conn, "SELECT username FROM akun WHERE username = '$username'");

    if ($data["kode_pegawai"] !== $kode_pegawai) {
        echo "<script>alert('Kode Tidak Sesuai');</script>";
        return false;
    }

    if (mysqli_fetch_assoc($result)) {
        echo "<script>alert('Username Sudah Terdaftar');</script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
    mysqli_query($conn, "INSERT INTO akun VALUES('', '$username', '$password', '$kode_pegawai')");
    return mysqli_affected_rows($conn);
}

?>

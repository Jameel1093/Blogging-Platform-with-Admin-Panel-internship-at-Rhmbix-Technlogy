<?php
include('db.php'); 

if(isset($_POST['submit'])) {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $content = $_POST['content'];
    
    // Image Upload Logic
    $image = $_FILES['image']['name'];
    $target = "uploads/".basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);

    $sql = "INSERT INTO posts (title, content, image, category) VALUES ('$title', '$content', '$image', '$category')";
    mysqli_query($conn, $sql);
    header('location: index.php');
}
?>

<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "blog_db";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>


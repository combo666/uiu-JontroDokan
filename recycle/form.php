<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "jontrodokan";

// $conn = mysqli_connect($servername, $username, $password, $dbname);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// if (isset($_POST["submit"])) {
    
//     $filename = $_FILES["image"]["name"];
//     $title = $_POST["title"];
//     $description = $_POST["description"];

    
//     $sql = "INSERT INTO images VALUES ('$title', '$description', '$unique_filename')";

//     if (mysqli_query($conn, $sql)) {
//         move_uploaded_file($_FILES["image"]["temp_name"], "picture/$img");
        
//         echo "<script>alert('image upload successful')</script>";
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }
// } else {
//     echo "<script>alert('Connection error.')</script>";
// }

// $conn->close();

?> 

<?php include "../homepage/includes/header_html.php" ?>
<?php include "../homepage/includes/header_body.php" ?> 

<div class="recycle-form">
    <form class="form-container" action="recycle.php" method="post" enctype="multipart/form-data">
        <label for="image">Select Image:</label>
        <input type="file" name="image" id="image"><br><br>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title"><br><br>
        <label for="description">Description:</label>
        <textarea name="description" id="description"></textarea><br><br>
        <input type="submit" value="Upload">
    </form>
</div>


<?php include "../homepage/includes/footer.php"?>
<?php
// Connect to database
$conn = new mysqli("localhost", "root", "", "product_db");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST['product_name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    // Handle image upload
    $image = $_FILES['image']['name'];
    $target_dir = "images/";
    $target_file = $target_dir . basename($image);

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        // Save product to database
        $stmt = $conn->prepare("INSERT INTO products (product_name, image, description, price) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssd", $product_name, $image, $description, $price);
        $stmt->execute();
        $stmt->close();

        header("Location: product.php"); // Redirect after adding
        exit();
    } else {
        echo "Failed to upload image.";
    }
}
?>

<h2>Add New Product</h2>
<form method="POST" enctype="multipart/form-data">
    <label>Product Name:</label><br>
    <input type="text" name="product_name" required><br><br>

    <label>Image:</label><br>
    <input type="file" name="image" accept="image/*" required><br><br>

    <label>Description:</label><br>
    <textarea name="description" required></textarea><br><br>

    <label>Price ($):</label><br>
    <input type="number" name="price" step="0.01" required><br><br>

    <button type="submit">Add Product</button>
</form>

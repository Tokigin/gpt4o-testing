<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Database and directory configuration
    $db = new SQLite3('users.db');
    $imgDir = 'img/';

    // Create table if not exists
    $db->exec('CREATE TABLE IF NOT EXISTS users (id INTEGER PRIMARY KEY, username TEXT, email TEXT, password TEXT, image TEXT)');

    // Prepare form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password for security

    // Handle the image upload
    $imageName = basename($_FILES['image']['name']);
    $imgPath = $imgDir . $imageName;

    if (!is_dir($imgDir)) {
        mkdir($imgDir, 0777, true);
    }

    if (move_uploaded_file($_FILES['image']['tmp_name'], $imgPath)) {
        // Insert data into the SQLite database
        $stmt = $db->prepare('INSERT INTO users (username, email, password, image) VALUES (:username, :email, :password, :image)');
        $stmt->bindValue(':username', $username, SQLITE3_TEXT);
        $stmt->bindValue(':email', $email, SQLITE3_TEXT);
        $stmt->bindValue(':password', $password, SQLITE3_TEXT);
        $stmt->bindValue(':image', $imgPath, SQLITE3_TEXT);

        if ($stmt->execute()) {
            echo "Registration successful!";
        } else {
            echo "Error: Could not execute query.";
        }
    } else {
        echo "Error: Failed to upload image.";
    }
}

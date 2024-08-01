<?php
session_start();
include "db_conn.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $uname = $_POST["uname"];
  $pass = $_POST["password"];

  // Prepare and execute the SQL query
  $stmt = $conn->prepare("INSERT INTO users (user_name, password) VALUES (?, ?)");
  $stmt->bind_param("ss", $uname, $pass);
  $stmt->execute();

  // Redirect to index.php
  header("Location: index.php");
  exit();
}
?>
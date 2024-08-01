<!-- <?php
require 'connection.php';

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $age = $_POST["age"];
  $income = $_POST["income"];
  $occupation = $_POST["occupation"];
  $gender = $_POST["gender"];
  $caste = $_POST["caste"];
  $query = "INSERT INTO tb_data VALUES('', '$name', '$age', '$income','$occupation', '$gender', '$caste')";
  mysqli_query($conn,$query);
  echo
  "
  <script> alert('Data Inserted Successfully'); </script>
  ";
  // Redirect to code.php after data insertion
  session_start();
  
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Retrieve the values from the form
      $caste = $_POST['caste'];
      $occupation = $_POST['occupation'];
      $age = $_POST['age'];
  
      // Store the values in session variables
      $_SESSION['caste'] = $caste;
      $_SESSION['occupation'] = $occupation;
      $_SESSION['age'] = $age;
      $_SESSION['income'] = $income;
      
  
      // Redirect to code.php
      header("Location: code.php");
      exit();
  }
}

?> -->
<?php
session_start();
require 'connection.php';

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $age = $_POST["age"];
  $income = $_POST["income"];
  $occupation = $_POST["occupation"];
  $gender = $_POST["gender"];
  $caste = $_POST["caste"];
  $query = "INSERT INTO tb_data VALUES('', '$name', '$age', '$income','$occupation', '$gender', '$caste')";
  mysqli_query($conn,$query);
  echo
  "
  <script> alert('Data Inserted Successfully'); </script>
  ";
  // Redirect to code.php after data insertion
 
  $_SESSION["caste"]=$caste;
  $_SESSION["occupation"]=$occupation;
  $_SESSION["age"]=$age;
  $_SESSION["income"]=$income;
  header("Location: code.php");
  exit();
}?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head >
  <meta charset="utf-8">
  <title>Insert Data</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      width: 400px;
      padding: 20px;
      background-color: #f2f2f2;
      border-radius: 5px;
    }

    label {
      display: block;
      margin-top: 10px;
    }

    input[type="text"],
    input[type="number"],
    select {
      margin-bottom: 15px;
      padding: 5px;
      width: 100%;
    }

    button[type="submit"] {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container">
    <form class="" action="" method="post" autocomplete="off" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <label for="">Name</label>
      <input type="text" name="name" required value="">
      <label for="">Age</label>
      <input type="number" name="age" required value="">
      <label for="">Income</label>
      <input type="number" name="income" required value="">
      <label for="">Occupation</label>
      <select class="" name="occupation" required>
        <option value="" selected hidden>Select occupation</option>
        <option value="Student">Student</option>
        <option value="Farmer">Farmer</option>
        <option value="Labor">Labor</option>
      </select>
      <label for="">Gender</label>
      <input type="radio" name="gender" value="Male" required> Male
      <input type="radio" name="gender" value="Female"> Female
      <input type="radio" name="gender" value="Transgender"> Transgender
      <label for="">Caste</label>
      <select class="" name="caste" required>
        <option value="" selected hidden>Select caste</option>
        <option value="OPEN">OPEN</option>
        <option value="OBC">OBC</option>
        <option value="SC">SC</option>
      </select>
      <br>
      <button type="submit" name="submit">Submit</button>
    </form>
  </div>
</body>
</html>

<?php

$conn = mysqli_connect('localhost', 'root', '', 'student_db');


//Inserting data
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $name = $_POST['name'];
  $age = $_POST['age'];
  $grade = $_POST['grade'];
  $email = $_POST['email'];


  $sql_insert = "INSERT INTO `student_table`(`name`,`age`,`grade`,`email`) VALUES ('$name','$age','$grade','$email')";
  $result = mysqli_query($conn,$sql_insert);
}


//View all student data
if(isset($_POST['show_data'])){
  $sql_view = "SELECT * FROM `student_table`";
  $result = mysqli_query($conn,$sql_view);
  echo "<table>";
  echo "<tr>
        <th>Student Name</th>
        <th>Age</th>
        <th>Grade</th>
        <th>Email</th>
  </tr>";

  while($row = mysqli_fetch_assoc($result)){
      echo "<tr>
        <td>".$row['name']."</td>
        <td>".$row['age']."</td>
        <td>".$row['grade']."</td>
        <td>".$row['email']."</td>
      </tr>
      ";
  }
  echo"</table>";
}
?>


<?php
  $sql_view = "SELECT * FROM `student_table` WHERE `id` = '$id'";
  $result = mysqli_query($conn,$sql_view);
  $row = mysqli_fetch_assoc($result);
?>
//creating form
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>
<body>
  <form method="POST">
    Name: <input type="text" name="name" id="name" value="<?php echo  $row['name']; ?>">
    Age: <input type="text" name="age" id="age" value="<?php echo  $row['age']; ?>">
    Grade: <input type="number" name="grade" id="grade" value="<?php echo  $row['grade']; ?>">
    Email: <input type="email" name="email" id="email" value="<?php echo  $row['email']; ?>">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <button type="submit" name="update">Update</button>
</form>
</body>
</html>

<?php
//Edit details

if(isset($_POST['update'])){
  $name = $_POST['name'];
  $age = $_POST['age'];
  $grade = $_POST['grade'];
  $email = $_POST['email'];
  $id = $_POST['id'];

  $sql_update = "UPDATE `student_table` SET `name` = '$name', `age` = '$age', `grade`='$grade',`email`='$email' WHERE `id` = '$Id'";
  $result_update = mysqli_query($conn,$sql_update);
}


//Delete details
  $id = $_GET['id'];
  $sql_delete = "DELETE FROM `student_table` WHERE `id` = '$id'";
  $result_delete = mysqli_query($conn,$sql_delete);

?>
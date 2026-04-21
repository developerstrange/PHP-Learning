<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event and Task Manager</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 40px;
            background-color: #f5f7fa;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            color: #222;
            margin-bottom: 20px;
            text-align: center;
        }

        form {
            background: white;
            padding: 25px;
            width: 400px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.08);
            margin-bottom: 40px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            box-sizing: border-box;
        }

        button {
            padding: 10px 20px;
            border: none;
            background-color: #2d89ef;
            color: white;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            margin-right: 10px;
        }

        button:hover {
            background-color: #1b5fbf;
        }

        .button-group {
            margin-bottom: 40px;
            text-align: center;
        }
    </style>
</head>
<body>

    <h1>Add Event and Task</h1>

    <form action="http://localhost/PHP%20Learning/Practice/practice2.php" method="post">

        <label for="event_name">Event Name:</label>
        <input type="text" id="event_name" name="event_name">

        <label for="event_date" >Event Date:</label>
        <input type="date" id="event_date" name="event_date">

        <label for="task_name">Task Name:</label>
        <input type="text" id="task_name" name="task_name">

        <button type="submit">Submit</button>

    </form>

 <?php

  // Connect database
  $servername = 'localhost';
  $username = 'root';
  $password = '769';
  $database = 'event_manager';

  $conn = mysqli_connect($servername, $username, $password, $database);

  //Checking connection is successful or not
  // if(!$conn){
  //   echo "<br>Database connection failed";
  // }else{
  //   echo"<br>database connected successfully";
  // }


  //Submit data/Insert data

  // if($_SERVER['REQUEST_METHOD'] == 'POST'){
  //   $event_name = $_POST['event_name'];
  //   $event_date = $_POST['event_date'];
  //   $task_name = $_POST['task_name'];

  //   $sql = "INSERT INTO `events`(`event_name`,`event_date`) VALUES ('$event_name', '$event_date')";
  //   $sql_task = "INSERT INTO `tasks`(`task_name`,`task_status`) VALUES ('$task_name', 'pending')";

  //   $result1 = mysqli_query($conn, $sql);
  //   $result2 = mysqli_query($conn, $sql_task);

  //   if($result1 && $result2)
  //     echo "<br>Data insertion successful";
  // }else{
  //   echo"<br>insertion failed";
  // }

  ?> 
    <h1>View Data</h1>

    <form action="http://localhost/PHP%20Learning/Practice/practice2.php" method="post">
        <button type="submit" name="show_event">Show Events</button>
        <button type="submit" name="show_task">Show Tasks</button>
    </form>

    <?php
    if(isset($_POST['show_event'])){
      $show_event = "SELECT * FROM `events`";
      $show_event_result = mysqli_query($conn, $show_event);
       echo "<table>";
       echo "<tr>
            <th>Event ID</th>
            <th>Event Name</th>
            <th>Event Date</th>
          </tr>";
      while($row = mysqli_fetch_assoc($show_event_result)){
         echo "<tr>
                <td>".$row['event_id']."</td>
                <td>".$row['event_name']."</td>
                <td>".$row['event_date']."</td>
              </tr>";
      }   
      echo"</table>";
    }

    if(isset($_POST['show_task'])){
      $show_task = "SELECT * FROM `tasks`";
      $show_task_result = mysqli_query($conn, $show_task);

      echo "<table>";
      echo "<tr>
            <th>Task ID</th>
            <th>Task Name</th>
            <th>Task Status</th>
          </tr>          
      ";

      while($row = mysqli_fetch_assoc($show_task_result)){
        echo"<tr>
            <td>".$row['task_id']."</td>
            <td>".$row['task_name']."</td>
            <td>".$row['task_status']."</td>
            </tr>";
      }
      echo"</table>";

    }

    ?>

    <h1>Update Task Status</h1>

    <form action="http://localhost/PHP%20Learning/Practice/practice2.php" method="post">

        <label>Event ID:</label>
        <input type="number" name="event_id_old">

        <label>Event Nmae:</label>
        <input type="text" name="event_new_name" placeholder="name">

        <button type="submit" name="update_task">Update</button>

    </form>

    <?php

    //Updating records

      
  // if(isset($_POST['update_task'])){
  //   $task_id = $_POST['task_id'];
  //   $new_status = $_POST['new_status'];

  //   $update_task = "UPDATE `tasks` SET `task_status` = '$new_status' WHERE `task_id` = '$task_id'";
  //   $result_update = mysqli_query($conn, $update_task);

  //   if($result_update){
  //     echo "<br>We updated the data successfully";
  //   }else{
  //     echo "<br>We could not updated the data successfully";
  //   }
  // }


    if(isset($_POST['update_task'])){
      $event_id = $_POST['event_id_old'];
      $event_name = $_POST['event_new_name'];


      $update_event = "UPDATE `events` SET `event_name` = '$event_name' WHERE `event_id`='$event_id'";
      $result_event = mysqli_query($conn, $update_event);

      if($result_event){
        echo"<br>Update successful";
      }else{
        echo"<br>Update failed";
      }
    }




?>

</body>
</html>
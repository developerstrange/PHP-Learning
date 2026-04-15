<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Problem - 01</title>
  <style>
    h2 {
      text-align: center;
    }

    form {
      border: 1px solid green;
      padding: 10px;
      text-align: center;
      width: 75%;
      margin: auto;
      background-color: rgb(156, 221, 199);
      border-radius: 10px;
    }

    form label {
      font-size: 22px;
    }

    form input {
      border-radius: 3px;
      margin-top: 15px;
    }

    form span {
      font-size: 22px;
    }

    form .submit {
      border: none;
      border-radius: 5px;
      padding: 10px;
      background-color: brown;
      color: white;
      font-weight: 600;
      cursor: pointer;
    }

    form .reset {
      border: none;
      border-radius: 5px;
      padding: 10px;
      background-color: rgb(75, 157, 211);
      color: white;
      font-weight: 600;
      cursor: pointer;
    }

    .form {
      margin-bottom: 50px;
    }


    table {
      border: 1px solid black;
      border-collapse: collapse;
      margin: auto;
    }


    th,
    td {
      border: 1px solid black;
      padding: 10px;
      text-align: center;
      height: 30px;
    }

    tr:nth-child(odd) {
      background-color: aquamarine;
    }
  </style>
</head>

<body>


  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $birth_dt = $_POST['birth'];
    $gender = $_POST['gender'];
    $feedback = $_POST['message'];

    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Well done!</strong> Your name is: ' . $name . '<br> and your email is: ' . $email . '<br> and your Birth date is: ' . $birth_dt . '<br> and your gender is: ' . $gender . '<br> and your feedback is: ' . $feedback . '
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }

  ?>

  <section class="form">
    <h2>User Form</h2>
    <form action="/PHP%20Learning/Get_Post_PHP.php/get_post_practice01.php" method="POST">
      <label for="name">Enter your name: </label>
      <input type="text" id="name" name="name" placeholder="enter name"><br>
      <label for="email">Enter e-mail: </label>
      <input type="email" id="email" name="email" placeholder="enter email"><br>
      <label for="birth">Date of Birth: </label>
      <input type="date" id="birth" name="birth">
      <br>
      <span>Select your gender:</span>
      <input type="radio" id="Male" name="gender" value="Male">
      <label for="Male">Male</label>
      <input type="radio" id="Female" name="gender" value="Female">
      <label for="Female">Female</label><br>
      <label for="message">Share your feedback:</label><br>
      <textarea name="message" id="message" style="height: 80px; width: 200px;"></textarea>
      <br>
      <input class="submit" type="submit" value="SUBMIT">
      <input class="reset" type="reset" value="RESET">
    </form>
  </section>
  <section class="table">
    <table>
      <caption>Contact Details</caption>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
      </tr>
      <tr>
        <td>Azizur Tuhin</td>
        <td>tuhin@gmail.com</td>
        <td>92387549283</td>
      </tr>
      <tr>
        <td>Azizur Tuhin</td>
        <td>tuhin@gmail.com</td>
        <td>92387549283</td>
      </tr>
      <tr>
        <td>Azizur Tuhin</td>
        <td>tuhin@gmail.com</td>
        <td>92387549283</td>
      </tr>
    </table>
  </section>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            width: 100%;
            height: 100%;
            overflow-x: hidden;
            text-align: center;
        }
     input{
         padding: 10px;
         width: 50%;
         margin: 0 auto;
     }
    </style>
</head>
<body>
    <!-- testcontrol.php   // testsignup.php -->
    <form action="testco.php" method="post">
    <input type="text" name="name"/>
      <input type="text" name="username"/>
      <input type="text" name="age" />

      <input type="submit" value="send">
    </form>
</body>
</html>
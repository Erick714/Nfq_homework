<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>details</title>
  </head>
  <body>

    <?php include 'connect.php';
      $sql ="SELECT * FROM Books Where ID =".$_GET['ID'] ;
      $result = $conn -> query($sql);
      $row = mysqli_fetch_assoc($result);
    ?>


  </body>
</html>

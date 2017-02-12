<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  </head>
  <body>

    <?php include 'connect.php';
      $sql ="SELECT * FROM Books Where ID =".$_GET['ID'] ;
      $result = $conn -> query($sql);
      $row = mysqli_fetch_assoc($result);
    ?>
<div class="row container center-align">
  <div class="col s12 m7">
    <div class="card">
      <div class="card-image">
        <img src="https://sueddie.files.wordpress.com/2016/11/maybe-someday-role-play-20922992-500-333.jpg
">
        <span class="card-title">Maybe Other time</span>
      </div>
      <div class="card-content">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna
          aliqua. Ut enim ad minim veniam, quis nostrud exercitation
          ullamco laboris nisi ut aliquip ex ea commodo consequat.
          Duis aute irure dolor in reprehenderit in voluptate velit
          esse cillum dolore eu fugiat nulla pariatur. Excepteur
          sint occaecat cupidatat non proident, sunt in culpa qui
          officia deserunt mollit anim id est laborum.</p>
      </div>
  <ul class="collection">
   <li class="collection-item"><?php echo $row['ID']; ?></li>
   <li class="collection-item"><?php echo $row['Name']; ?></li>
   <li class="collection-item"><?php echo $row['Autor']; ?></li>
   <li class="collection-item"><?php echo $row['Genre']; ?></li>
   <li class="collection-item"><?php echo $row['Date']; ?></li>
 </ul>
      <div class="card-action">
        <a href="index.php?value=&range=50">Back</a>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>

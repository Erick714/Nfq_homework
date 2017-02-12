<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>NFQ Homework</title>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


  </head>
  <body>






    <?php include 'connect.php';

    $sql_start ="SELECT * FROM Books " ;




    if(isset($_GET["search_by"])){

    switch ($_GET["search_by"]) {
    	case '1':	$sql_search_by ="WHERE Name LIKE '%".$_GET['value']."%' " ;	break;
    	case '2':	$sql_search_by ="WHERE Autor LIKE '%".$_GET['value']."%' ";  break;
    }
  }else{	$sql_search_by ="WHERE Name LIKE '%".$_GET['value']."%' " ;}

    if(isset($_GET["sort_by"])){

    switch ($_GET["sort_by"]) {
      case '1':	$sql_sort_by ="ORDER BY Name " ;	break;
      case '2':	$sql_sort_by ="ORDER BY Autor ";  break;
      case '3':	$sql_sort_by ="ORDER BY Date ";  break;
      case '4':	$sql_sort_by ="ORDER BY Genre ";  break;
    }
  }else { $sql_sort_by = "ORDER BY RAND()" ;}

   $sql_limit = "LIMIT ". $_GET['range'];


$sql = $sql_start.$sql_search_by.$sql_sort_by.$sql_limit;

   $result = $conn -> query($sql);
    ?>








<nav class=" teal container">
<div class="row">
  <form class="" action="index.php" method="GET">

          <div class="input-field col s4">
            <i class="material-icons prefix">search</i>
            <input id="icon_prefix" type="text" class="validate" name="value">
            <label for="icon_prefix">Search</label>
          </div>
          <div class="input-field col s2">
              <select name="search_by">
                <option value="0" disabled selected>search by</option>
                <option value="1">Name</option>
                <option value="2">Autor</option>
              </select>
          </div>
          <div class="input-field col s2">
              <select name="sort_by">
                <option value="0" disabled selected>Sort by</option>
                <option value="1">Name</option>
                <option value="2">Autor</option>
                <option value="3">year</option>
                <option value="4">Genre</option>
              </select>
          </div>


          <div class="col s2 range-field">
              <input type="range" id="test5" name="range" min="0" max="100" />
          </div>

<div class="valign-wrapper col s2 ">
  <br>
              <input class="waves-effect waves-light btn center center-align" type="submit">

</div>

  </form>
</div>

</nav>





<table class="striped container">
        <thead>
          <tr>
              <th data-field="id">ID</th>
              <th data-field="name">Book title</th>
              <th data-field="price">Autor</th>
              <th data-field="price">Realise date</th>
              <th data-field="price">Books Genre</th>
          </tr>
        </thead>

        <tbody>


 <?php
 if(isset($result)){
 while( $row = mysqli_fetch_assoc($result)){
      echo '<tr>';
      echo '<td>'.$row['ID'].'</td>';
      echo '<td><a href="details.php?ID='.$row['ID'].'">'.$row['Name'].'</a></td>';
      echo '<td>'.$row['Autor'].'</td>';
      echo '<td>'.$row['Date'].'</td>';
      echo '<td>'.$row['Genre'].'</td>';
      echo '</tr>';
 }}
 ?>
        </tbody>
</table>



<?php// $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; // actual current link ?>


      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
        <script src="js/init.js"></script>


  </body>
</html>

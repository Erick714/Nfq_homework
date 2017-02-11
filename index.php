<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>NFQ Homework</title>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


  </head>
  <body>
<nav class="fixed teal">
<div class="row container">
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
              </select>
          </div>


          <div class="col s1">
              <i class="material-icons prefix inline">swap_vert</i>
          </div>

            <div class="col s2">
              <input type="submit">
            </div>

  </form>
</div>

</nav>






      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
        <script src="js/init.js"></script>


  </body>
</html>

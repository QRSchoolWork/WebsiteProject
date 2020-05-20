<!DOCTYPE html>

<html>

  <head>
    <link rel = "stylesheet"
   type = "text/css"
   href = "StyleSheet.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  </head>

  <body>
    <div id="myHeader">
      <div class="title">
        <i class="material-icons">
        <div class="watchIcon">watch</div>
        </i> Identity
        <i class="material-icons">
        <div class="watchIcon">watch</div>
        </i>
      </div>

      <div>

        <ul class="header">
          <li><a href="HomePage.html">Home</a></li>
          <li class="dropdown">
            <a class="dropbtn" href="DisplayInfo.php">Products</a>
            <div class="dropdown-content">
                <a href="DisplayInfo.php">Mens</a>
                <a href="DisplayInfo.php">Womens</a>
                <a href="DisplayInfo.php">Boys</a>
                <a href="DisplayInfo.php">Girls</a>
            </div>
          </li>
          <li><a href="locations.php">Locations</a></li>
          <li><a href="Empty.html">Opportunities</a></li>

        </ul>
      </div>
    </div>
    <div class="mainContent">
    <br>
    <table >
      <div class = "dbInfo">
        Identity Brands Look Better in Person!
        Our Locations!
      </div>
      <?php
      include('connect.php');
      $sqlget = "SELECT * FROM locations";
      $sqldata = mysqli_query($conn,$sqlget) or die('error');
      while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
        echo "<tr>";
        //echo $row['id'];
        echo "<th class ='dbInfo left'>";
        echo $row['num'];
        echo "</th><th class ='dbInfo center'>";
        echo $row['street'];
        echo "</th><th class ='dbInfo right'>";
        echo $row['city'];
        echo "</th></tr>";
      }
      echo "</table>";
      ?>
    </div>
    <footer>
      <p>COPYRIGHT QUINN RILEY</p>
    </footer>
  </body>

</html>

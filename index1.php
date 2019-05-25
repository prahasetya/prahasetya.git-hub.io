<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT komponen_id, komponen_name, sistem_name FROM komponen k, sistem s WHERE k.sistem_id=s.sistem_id");
?>

<html>

<head>    
<title>Bridge Assessment</title>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
  <h1>
     <img src= "image/logojudul.png" position=center>
    </h1> 
</head>

<style>

html{
  zoom: 75%;
}
  
a{
  color : wheat;
}
 
   body{
     font-family:fantasy;
     background-color:whitesmoke;
    background-image:url("image/arc.jpg"); 
   }

    table{
      font-family:fantasy;
      text-align: center;
     border-style: solid;
    border-color: 5px black;
    padding-left: 0%;
    position: relative;
    }

    th{
      color: whitesmoke;
     font-family:monospace;
      background-color:black;
      border: 5px solid whitesmoke;
      font-size : 6mm;
      
    }

    footer{
      background-color: black;
   font-family:fantasy;
      color:black;
      text-align: center;
      width: 100%;
    }

    img{
      size: 1px;
    }
    h1{
      text-shadow: white 2px 2px;
      text-align: center;
      font-family:fantasy;
      
      color:black;
      position: relative;
      font-size: 40px;
      letter-spacing: 15px;
    }
    h3{
      text-align: center;
      color:black;
       line-height: 0.8;
       font-family:fantasy;
       letter-spacing: 1px;
     text-shadow: white 2px 2px;
       position: relative;
       
    }
    td{
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      background-image: url("image/construction.jpg");
      position: relative;
      text-transform: capitalize;
      color:whitesmoke;
  border: 5px solid whitesmoke;
  font-family:fantasy;
    }

  .topnav {
  overflow: hidden;
  background-color: black;
  width: 100%;
  margin: 0;
  padding-top: 0%;
}

/* Style the topnav links */
.topnav a {
  font-family:fantasy;
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}


</style>
<body>
<div class="topnav">
<a href="/webphp/index.php">Home</a> <a href="/webphp/answer.php">Hasil Survey</a><a href="/webphp/index1.php">Daftar Komponen</a><a href="/webphp/jembatan.php">List Jembatan</a><a href="/webphp/priority.php">List Prioritas</a>
  </div>

  
</body>

<br>
<br>

<div class="container">
<h3>Daftar Komponen</h3>
    <br>
<table width='100%' border=1>

<tr>
    <th>No</th> <th>Nama Komponen</th> <th>Sistem</th> 
</tr>
<?php  
while($user_data = mysqli_fetch_array($result)) {         
    echo "<tr>";
    echo "<td>".$user_data['komponen_id']."</td>";
    echo "<td>".$user_data['komponen_name']."</td>";
    echo "<td>".$user_data['sistem_name']."</td>";    
         
}
?>
</table>

</div>
</html>
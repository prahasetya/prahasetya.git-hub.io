<html>

<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT answer_id,bridge_name,bridge_location,sistem_name,komponen_name,subKomponen_name,surveyor_name,kerusakan,interval_kerusakan,luasan,luasan2,nilai_pengurang,faktor_koreksi,faktor_nilai1,faktor_nilai2,bobot_komponen,IKSK,IKUS,IKKJ,IKS,IF(IKS>4,'Warning','Safe') AS Priority FROM answer a ,bridge b , sistem s ,komponen k ,subkomponen sk ,surveyor su WHERE a.bridge_id = b.bridge_id AND a.sistem_id = s.sistem_id AND a.komponen_id = k.komponen_id AND a.subKomponen_id = sk.subKomponen_id AND a.surveyor_id = su.surveyor_id");
?>



<head>    
<title>Bridge Assessment</title>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
  <h1>
     <img src= "image/logojudul.png" position=center>
    </h1> 
</head>

<style>

html{
  zoom: 68%;
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
  <br>
  <br>
  <h3>Daftar Komponen</h3>
    <br>
 <center>   
<table width='80%' border=1>

<tr>
<th>Id</th>
          <th>Lokasi Jembatan</th>
          <th>Nama Jembatan</th>
          <th>Sistem</th>
          <th>Komponen</th>
          <th>SubKomponen</th>
          <th>Nama Surveyor</th>
          
          <th>Kerusakan</th>
          <th>Interval</th>
          <th>luasan</th>
          <th>luasan2</th>
          <th>nilai_pengurang</th>
          <th>faktor koreksi</th>
          <th>faktor nilai</th>
          <th>faktor nilai2</th>
          <th>bobot komponen</th>
          <th>IKSK</th>
          <th>IKUS</th>
          <th>IKKJ</th>
          <th>IKS</th>
</tr>
<?php  
while($user_data = mysqli_fetch_array($result)) {         
    echo "<tr>";
    echo "<td>".$user_data['answer_id']."</td>";
    echo "<td>".$user_data['bridge_location']."</td>";
    echo "<td>".$user_data['bridge_name']."</td>";
    echo "<td>".$user_data['sistem_name']."</td>";   
    echo "<td>".$user_data['komponen_name']."</td>";
    echo "<td>".$user_data['subKomponen_name']."</td>";
    echo "<td>".$user_data['surveyor_name']."</td>"; 
    echo "<td>".$user_data['kerusakan']."</td>";
    echo "<td>".$user_data['interval_kerusakan']."</td>";   
    echo "<td>".$user_data['luasan']."</td>";
    echo "<td>".$user_data['luasan2']."</td>";
    echo "<td>".$user_data['nilai_pengurang']."</td>";
    echo "<td>".$user_data['faktor_koreksi']."</td>";
    echo "<td>".$user_data['faktor_nilai1']."</td>";
    echo "<td>".$user_data['faktor_nilai2']."</td>";   
    echo "<td>".$user_data['bobot_komponen']."</td>";
    echo "<td>".$user_data['IKSK']."</td>";
    echo "<td>".$user_data['IKUS']."</td>";
    echo "<td>".$user_data['IKKJ']."</td>";
    echo "<td>".$user_data['IKS']."</td>";  
         
}
?>
</table>
  </center>
</body>

<br>
<br>





</html>
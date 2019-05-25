<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM komponen");
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
<style>

  
a{
  color : wheat;
}
 
    body{
     font-family:fantasy;
     background-image:url("image/arc.jpg"); 
     background-color:whitesmoke;
     
    
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
    }
    td{
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      background-image: url("assets/image/construction.jpg");
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

html{
  zoom: 75%;
}

div{
  border: 5px solid black;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
.container{
  text-align: center;
  
}

h5{
  text-align:center;
  font-size:12mm;
}

p{
  text-shadow: white 2 px 2px;
  font-size:12mm;
}

p2{
  text-shadow: black 2 px 2px;
  font-size:12mm;
}
</style>

  <body>
  
  <div class="topnav">
  <a href="/webphp/index.php">Home</a> <a href="/webphp/answer.php">Hasil Survey</a><a href="/webphp/index1.php">Daftar Komponen</a><a href="/webphp/jembatan.php">List Jembatan</a><a href="/webphp/priority.php">List Prioritas</a>
  </div>
</body>
<br>
<br>
<br>
<div class="container">
    
      <h5>SELAMAT DATANG DI WEBSITE MONITORING JEMBATAN</h5>
      <br>
      <br>
      <img src="image/worker.jpg" align="middle">
    <br>
    <br>
    
  <br>
   <p>
     Website ini dibuat untuk memonitoring data yang masuk kedatabase yang di masukkan oleh para surveyor.
     Data data yang masuk merupakan hasil dari kegiatan para surveyor yang di masukkan melalui Aplikasi Android.
     Selain itu data jembatan yang di jadikan objek survey juga ditampilkan di website ini. 
   </p>

   <p2>
     Untuk melihat hasil survey yang dilakukan surveyor silahkan tekan bagian "Hasil Survey".Lalu untuk melihat
     List Komponen yang di gunakan silahkan tekan "Daftar Komponen" dan untuk List Jembatan silakan tekan "List Jembatan".
     Di Website ini juga terdapat List Jembatan yang menjadi prioritas para surveyor untuk memperbaiki kerusakan yang ada di 
     jembatan tersebut.Untuk melihat List tersebut hanya perlu menekan tombol "List Prioritas"
   </p2>

   
  </div>
    <br>
    <br>
   
</div>
<br>
</html>
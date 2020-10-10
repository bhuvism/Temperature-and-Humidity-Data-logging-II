<?php 

$conn = new mysqli("localhost","MYSQL_USERNANE","MYSQL_PASSWORD","MYSQL_DATABASE_NAME");


$query = "SELECT * FROM data ORDER BY timestamp DESC ";
$result = $conn->query($query);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="table-responsive">
 <table class="table ">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Temperature</th>
      <th scope="col">Humidity</th>
      <th scope="col">Date & Time</th>
     
     
    </tr>
  </thead>
  <tbody>
  <?php 
  foreach($result as $row){
    echo '<tr>
    <th scope="row">'.$row['temp'].'</th>
    <td>'.$row['humidity'].'</td>
    <td>'.date("d-m-Y h:i:s a",strtotime($row['timestamp'])).'</td>
  
    
    
  </tr>';
  }
  ?>
  </tbody>
  </table>
</body>
</html>

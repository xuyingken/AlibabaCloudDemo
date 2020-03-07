<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
body {
 background-color:black;
 color:white;
 font-family:verdana;
 text-align:center;
}

</style>
<title>Nefelibata</title>
</head>
<body>
<?php 
$username = "service_ac";
$password = "P@ssw0rd";
$database = "neflibata";
$mysqli = new mysqli("m-gs54q0r13q990dkg521520.mysql.singapore.rds.aliyuncs.com", $username, $password, $database);
 
$query = "SELECT * FROM note";
 
 
echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Date Time</font> </td> 
          <td> <font face="Arial">Name</font> </td> 
          <td> <font face="Arial">Note</font> </td> 
      </tr>';
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["dateTime"];
        $field2name = $row["userName"];
        $field3name = $row["note"];
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>

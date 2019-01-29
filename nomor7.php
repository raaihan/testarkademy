<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
</style>
</head>
<body>
  <?php
$connection = mysql_connect('localhost', 'root', ''); //The Blank string is the password
mysql_select_db('arka');

$query = "SELECT a.id AS person_id, a.nama, GROUP_CONCAT(b.name SEPARATOR ',') as person_hobbies FROM categories a, hobbies b WHERE b.person_id = a.id GROUP BY a.nama ORDER BY a.id ASC"; //You don't need a ; like you do in SQL
$result = mysql_query($query);

echo "<table>"; // start a table tag in the HTML

while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['person_id'] . "</td><td>" ."<tr><td>" . $row['nama'] . "</td><td>" . $row['person_hobbies'] . "</td></tr>" ;  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML

mysql_close(); //Make sure to close out the database connection?>
</body>
</html>
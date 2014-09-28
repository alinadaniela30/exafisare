<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','MocanA78','informatii');
if (!$con) {
  die("Could not connect: " . mysqli_error($con));
}

mysqli_select_db($con,"informatii");
$sql="SELECT * FROM persoane WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
<th>Nume</th>
<th>Prenume</th>
<th>Varsta</th>
<th>Oras</th>
<th>Job</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['Nume'] . "</td>";
  echo "<td>" . $row['Prenume'] . "</td>";
  echo "<td>" . $row['Varsta'] . "</td>";
  echo "<td>" . $row['Oras'] . "</td>";
  echo "<td>" . $row['Job'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

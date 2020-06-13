<?php
echo "<table border='1' cellpadding='3x' width='500px'>";
echo "<tr>";
echo "<td>NIM  : </td>"; 
echo "<td>". $_POST["NIM"]. "</td><br/>";
echo "</tr>";
echo "<tr>";
echo "<td>Nama : </td>"; 
echo "<td>". $_POST["NAMA"]. "</td><br/>";
echo "</tr>";
echo "<tr>";
echo "<td>Jenis Kelamin : </td>"; 
echo "<td>". $_POST["KELAMIN"]. "</td><br/>";
echo "</tr>";
echo "<tr>";
echo "<td>Program Studi : </td>"; 
echo "<td>". $_POST["PRODI"]. "</td><br/>";
echo "</tr>";
echo "</table>";
?>
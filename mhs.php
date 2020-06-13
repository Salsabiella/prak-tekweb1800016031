<?php
$NIM=$_POST['NIM'];
$NAMA=$_POST['NAMA'];
$KELAMIN=$_POST['KELAMIN'];
$ALAMAT=$_POST['ALAMAT'];
$PRODI=$_POST['PRODI'];

echo "<table border='1' cellpadding='2px' width='650px'>";
echo "<tr>";
echo "<td>NIM : </td> <td>$NIM<br></td>";
echo "</tr>";
echo "<tr>";
echo "<td>Nama : </td> <td>$NAMA<br></td>";
echo "</tr>";
echo "<tr>";
echo "<td>Jenis Kelamin : </td> <td>$KELAMIN<br></td>";
echo "</tr>";
echo "<tr>";
echo "<td>Alamat : </td> <td>$ALAMAT<br></td>";
echo "</tr>";
echo "<tr>";
echo "<td>Program Studi : </td> <td>$PRODI<br></td>";
echo "</tr>";
echo "<tr>";
echo "<td>Bahasa Pemrograman yang dikuasai : </td>";
echo "<td>";
if (isset($_POST['PASCAL/DELPHI'])) {
	echo $_POST['PASCAL/DELPHI']."<br/>";
}
if (isset($_POST['C/C++'])) {
	echo $_POST['C/C++']."<br/>";
}
if (isset($_POST['VISUALBASIC'])) {
	echo $_POST['VISUALBASIC']."<br/>";
}
echo "</td>";
echo "</tr>";

?>
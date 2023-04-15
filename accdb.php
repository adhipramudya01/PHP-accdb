<htmL>

<?php 
$db_username = ''; //username
$db_password = ''; //password
//path to database file
//$database_path = $_SERVER["DOCUMENT_ROOT"] . "\access\accessdatabase.accdb";
$database_path = "c:/xampp/htdocs/phpmdb/dataweb.accdb";
//$database_path = "/dataweb.accdb";
//check file exist before we proceed
if (!file_exists($database_path)) {
    echo("Access database file not found !");
}
//create a new PDO object
$database = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb, *.accdb)}; DBQ=$database_path; Uid=$db_username; Pwd=$db_password;");
$sql  = "SELECT * FROM Utama";
$result = $database->query($sql);
//while ($row = $result->fetch()) {
//    echo '<pre>';
//    print_r($row);
//    echo '</pre>';
//}

//echo "<pre>"; print_r($result->fetchAll());
?>
<table border="1">
<tr>
<th>ID </th>
<th>index </th>
<th> name</th>
<th> phone</th>
<th>password </th>
<th> email</th>
<tr>

<?php foreach($result->fetchAll() as $KEY=> $row) { ?> 
<tr>
<th border="1"><?php echo $row ['ID']; ?> </th>
<th><?php echo $row ['Field1']; ?> </th>
<th><?php echo $row ['Field2']; ?> </th>
<th><?php echo $row ['Field3']; ?> </th>
<th><?php echo $row ['Field4']; ?> </th>
<th><?php echo $row ['Field5']; ?> </th>
<tr border="1"> <br>
<?php } ?>

</html>
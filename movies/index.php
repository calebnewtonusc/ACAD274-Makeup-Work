<?php
// create connection to database
$host = "webdev.iyaserver.com"; 
$userid = "dent_student"; 
$userpw = "code4Studentuse"; 
$db = "dent_movies"; 

$mysql = new mysqli($host, $userid, $userpw, $db);

if($mysql->connect_errno) {
    echo "db connection error : " . $mysql->connect_error;
    exit();
}
?> <!-- end of php block -->

<?php
// write a database query and get back results from the database
$sql = "SELECT * FROM view1 WHERE label = 'Warner' AND genre = 'Comedy' ORDER BY title";

$results = $mysql->query($sql);

if(!$results) {
    echo "SQL error: ". $mysql->error . " running query <hr>" . $sql . "<hr>";
    exit();
}
?>

<html>
<head>
    <title>Warner Brothers Comedy Films</title>
    <style>
        body { background-color:steelblue; width: 600px; margin:auto;}
        h3 { background-color: lightsteelblue; color:steelblue; text-align:center; }
    </style>
</head>
<body>

<h3>Warner Brothers Comedy Films</h3>

<?= $results->num_rows ?> Warner Brother's Comedy films
<hr>

<?php
while($currentrow = $results->fetch_assoc()) {
?>
    <strong><?= $currentrow["title"] ?></strong>,
        Rated <?= $currentrow["rating"] ?> (<em><?= $currentrow["genre"] ?></em>)
    <br>
<?php
} 
?>

</body>
</html>

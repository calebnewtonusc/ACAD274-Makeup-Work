<?php
// create connection to database
$host = "webdev.iyaserver.com"; // database server address
$userid = "dent_student"; // database user account name
$userpw = "code4Studentuse"; // database user password
$db = "dent_health"; // database name

$mysql = new mysqli(
    $host,
    $userid,
    $userpw,
    $db);

if($mysql->connect_errno) {
    echo "db connection error : " . $mysql->connect_error;
    exit();
}
?>

<?php
// if no url medication was passed into page, default to Aspirin
if(!empty($_REQUEST["medication"])) {
	$filter = $_REQUEST["medication"];
} else  {
    $filter = "Aspirin";	
}

// base query (aggregate for one medication)
$sql =  "     SELECT 
	                AVG(Age) AS AverageAge,
	                MIN(Age) AS LowAge,
	                MAX(Age) AS HighAge,
	                COUNT(Name) AS NumberPatients
	              FROM healthcare_dataset
	              WHERE Medication='$filter'
	";

$results = $mysql->query($sql);

if(!$results) {
    echo "SQL error: ". $mysql->error . " running query <hr>" . $sql . "<hr>";
    exit();
}

// single row result
$currentrow = $results->fetch_assoc();

// debug dump (optional)
/*
echo "<!--<pre> ";
var_dump($currentrow);
echo "</pre>-->";
*/
?>

<!-- javascript block. setting up variables -->
<script>
    var condition = "<?= htmlspecialchars($filter) ?>"; // shows medication name
    var patients = <?= (int)$currentrow["NumberPatients"] ?>;
    var highage = <?= (int)$currentrow["HighAge"] ?>;
    var lowage = <?= (int)$currentrow["LowAge"] ?>;
    var avgage = <?= number_format((float)$currentrow["AverageAge"],2) ?>;
</script>

<style>
    .box { width: 140px; height: 18px; position:absolute; font-weight:bold; color:#e9f1f7; }
    .box2 { width: 260px; height:22px; position:absolute; font-weight: bold; color:#e9f1f7; font-size: 18px;}
    #chart { 
        width:900px; height:520px; position:relative;
        background-image: url('healthchartframe.png');
        background-size: contain;           /* show entire image */
        background-repeat: no-repeat;
        background-position: center;
    }
    /* positions aligned with labels on the screen */
    #condition { left: 445px; top:190px; font-size: 14pt; }
    #patients  { left: 445px; top:217px; font-size: 12pt;}
    #avgage    { left: 445px; top:244px; font-size: 12pt;}
    #lowage    { left: 445px; top:271px; font-size: 12pt;}
    #highage   { left: 445px; top:298px; font-size: 12pt;}

    #medlinks { width:900px; margin:8px 0; font-family: Arial, Helvetica, sans-serif; }
    #medlinks a { margin-right:14px; color:#1a4f7a; text-decoration:none; font-weight:bold; }
    #medlinks a:hover { text-decoration:underline; }
</style>

<div id="medlinks">
    Medications:
    <a href="?medication=Lipitor">Lipitor</a>
    <a href="?medication=Ibuprofen">Ibuprofen</a>
    <a href="?medication=Penicillin">Penicillin</a>
    <a href="?medication=Aspirin">Aspirin</a>
    <a href="?medication=Paracetamol">Paracetamol</a>
</div>

<div id="chart">
    <!-- chart emptied of all but boxes -->
    <div class="box2" id="condition"></div>
    <div class="box" id="patients"></div>
    <div class="box" id="avgage"></div>
    <div class="box" id="lowage"></div>
    <div class="box" id="highage"></div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $("#condition").text(condition);
        $("#patients").text(patients);
        $("#highage").text(highage);
        $("#lowage").text(lowage);
        $("#avgage").text(avgage);
    });
</script>

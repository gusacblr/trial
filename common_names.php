<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<?php
// define variables and set to empty values
$a1Err = $a2Err =  "";
$a1 = $a2 =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["a1"])) {
    $a1Err = "Array-1 is required";
  } else {
    $a1 = $_POST["a1"];
  }
  if (empty($_POST["a2"])) {
    $a2Err = "Array-2 is required";
  } else {
    $a2 = $_POST["a2"];
  }
}
?>

<h2>Common Names Function</h2>
<h4>Enter the array names without [ ] and seperated by commas(,)</h4>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Array-1: <input type="text" name="a1" value="<?php echo $a1;?>">
  <span class="error">* <?php echo $a1Err;?></span>
  <br><br>
  Array-2: <input type="text" name="a2" value="<?php echo $a2;?>">
  <span class="error">* <?php echo $a2Err;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>

<?php
$l1 = explode(',',$a1);
$l2 = explode(',',$a2);
$l3 = array_unique(array_merge($l1,$l2));
$a3 = implode(',', $l3);
echo "<h2>OUTPUT</h2>";
echo "Array 1: [". $a1 . "]";
echo "<br>";
echo "Array 2: [". $a2 ."]";
echo "<br>";
echo "<h4>Common names: [". $a3 ."]</h4>";
?>

</body>
</html>

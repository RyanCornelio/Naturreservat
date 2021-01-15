<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naturreservat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

  <h2>Välkommen till Naturreservatet:</h2>
  <form action="./result.php" method="post">
  <input placeholder="Number of rhinos" type="text" name="rhino">
  <input placeholder="Number of zebras" type="text" name="zebra">
  <input placeholder="Number of Pandas" type="text" name="panda">
  <button type="submit">Enter</button>
  </form>

  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>

</body>
</html>
<?php include 'database.php';?>
<!DOCTYPE html>
<html>
<body>

<?php


$sql = "SELECT * FROM products ORDER BY ID DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["name"]. "Color: " . $row["color"] ."<br> Description: ". $row["description"]. "<br>"; ?>
        <img src="<?= $row['image'] ?>" alt="" height="100" width="100">
   <?php }
} else {
    echo "0 results";
}

?>

</body>
</html>
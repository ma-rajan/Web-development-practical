<?php
// 1. Connect to Database
$conn = new mysqli("localhost", "root", "", "dbstudent");

// 2. Insert Data
if(isset($_POST['insert'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['PhoneNo'];

    $sql = "INSERT INTO tblstudent VALUES('$id','$name','$address','$phone')";
    $conn->query($sql);
}

// 3. Update Data
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['PhoneNo'];

    $sql = "UPDATE tblstudent 
            SET Name='$name', 
                Address='$address', 
                PhoneNo='$phone' 
            WHERE ID='$id'";
    $conn->query($sql);
}

// 4. Delete Data
if(isset($_POST['delete'])){
    $id = $_POST['id'];

    $sql = "DELETE FROM tblstudent WHERE ID='$id'";
    $conn->query($sql);
}
?>

<html>
<body>

<h3>Student Form</h3>

<form method="post">
    ID: <input type="text" name="id"><br><br>
    Name: <input type="text" name="name"><br><br>
    Address: <input type="text" name="address"><br><br>
    PhoneNo: <input type="text" name="PhoneNo"><br><br>

    <input type="submit" name="insert" value="Insert">
    <input type="submit" name="update" value="Update">
    <input type="submit" name="delete" value="Delete">
</form>

<hr>

<h3>Student Records</h3>

<table border="1">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Address</th>
    <th>PhoneNo</th>
</tr>

<?php
// 5. Display Data
$result = $conn->query("SELECT * FROM tblstudent");

while($row = $result->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$row['ID']."</td>";
    echo "<td>".$row['Name']."</td>";
    echo "<td>".$row['Address']."</td>";
    echo "<td>".$row['PhoneNo']."</td>";
    echo "</tr>";
}
?>

</table>

</body>
</html>
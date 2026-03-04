<?php
$filename = "data.txt";
$fileContent = ""; // variable to store messages or file content

// If write button clicked
if(isset($_POST['write'])) {
    $text = $_POST['text'];
    file_put_contents($filename, $text);
    $fileContent = "<p style='color:green;'>Text Written Successfully!</p>";
}

// If read button clicked
if(isset($_POST['read'])) {
    if(file_exists($filename)) {
        $content = file_get_contents($filename);
        $fileContent = "<p><strong>File Content:</strong><br>$content</p>";
    } else {
        $fileContent = "<p style='color:red;'>File does not exist!</p>";
    }
}
?>

<html>
<head>
    <title>File Handling Program</title>
</head>
<body>

<form method="post">
    Enter Text:
    <input type="text" name="text" style="width:400px; height:80px;"><br><br>

    <input type="submit" name="write" value="Write">
    <input type="submit" name="read" value="Read">
</form>

<!-- Display file content below the buttons -->
<div style="margin-top:20px;">
    <?php echo $fileContent; ?>
</div>

</body>
</html>
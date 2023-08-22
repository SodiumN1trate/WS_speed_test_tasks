<?php
    if(isset($_POST['input'])) {
        $input = $_POST['input'];

        $_POST['input'] = preg_replace('/(\d+)/', '', $input);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="input" value="<?php echo  $_POST['input'] ?? '' ?>">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
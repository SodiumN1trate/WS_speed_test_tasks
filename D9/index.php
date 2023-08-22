<?php
        if(isset($_POST['list'])) {
            $numbers = explode("\n", str_replace("\r", "", $_POST['list']));
            $org = [];

            foreach($numbers as $number) {
                if($number % 2 == 0) {
                    $org[] = $number;
                }
            }


            $_POST['org'] = implode("\n", $org);
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
        <textarea name="list" colls="10"><?php echo $_POST['org'] ?></textarea>
        <button type="submit">Submit</button>
    </form> 
</body>
</html>
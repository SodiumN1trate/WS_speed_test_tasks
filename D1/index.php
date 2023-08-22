<?php 
    $actualAnswers = explode("\n", file_get_contents('actualAnswers.csv'));
    $submittedAnswers = explode("\n", file_get_contents('submittedAnswers.csv'));
    $correctAnswers = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
  <thead>
    <tr>
      <th>Question</th>
      <th>Actual Answer</th>
      <th>Submitted Answer</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    foreach($actualAnswers as $key => $answer) {
        $correctAnswers += $submittedAnswers[$key] === $answer ? 1 : 0;
        echo "<tr>
                <td>" . $key+1 . "</td>
                <td>$answer</td>
                <td>{$submittedAnswers[$key]}</td>
            </tr>
        ";
    }
    ?>
  </tbody>
</table>
<p>
    Score: 
    <?php 
        echo $correctAnswers . "/" . count($actualAnswers);
    ?>
  </p>
</body>
</html>

<style>
table,
th,
td {
  border: 1px solid #333;
}

</style>
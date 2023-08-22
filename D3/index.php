<?php
    include_once 'backend.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tic Tac Toe</title>
    <style>
        html, body {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        table {
            border-collapse: collapse;
        }

        td {
            width: 60px;
            height: 60px;
            border: 1px solid rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>

<div class="container">
    <!--the prompt will be hidden at initial status-->
    <div>{{ X || O }} Win!</div>
    <table>
        <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
    <button class="button">Reset</button>
</div>

</body>
</html>
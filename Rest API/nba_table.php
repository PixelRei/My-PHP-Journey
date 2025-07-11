<?php
session_start();
if(!isset($_POST['submit'])){
    header("location: nba.php");
    exit;
}
$playerName = $_POST['nome'];
$team = $_POST['squadra'];
$year = $_POST['anno'];
$stats = $_POST['stats'];

//url to use according to user's choices
$url = "https://api.server.nbaapi.com/api/playertotals?season=$year&page=1&pageSize=20&sortBy=$stats&ascending=false";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$data = json_decode($response, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NBA Stats</title>
    <link rel="stylesheet" href="nbastyle.css">
    <link rel="icon" href="nba/icon.png">
</head>
<body>
    <div class="main">
        <div class="header"><img src="nba/background.png"></div>
        <hr>
        <div class="stats">
            <table>
                <tr>
                    <th>PLAYER</th>
                    <th>POINTS</th>
                </tr>
                 <?php foreach($data['data'] as $player): ?>
                 <tr>
                    <td><?=$player['playerName'];?></td>
                    <td><?=$player['points'];?></td>
                 </tr>
                 <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>
</html>
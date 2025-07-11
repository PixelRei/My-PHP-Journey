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
        <div class="search">
            <form action="nba_table.php" method="POST">
                <div style="display: flex; flex-direction: row; gap: 70px;">
                    <div style="display: flex; flex-direction: column; gap: 10px; margin-top: 20px;">
                        <label>Giocatore<input type="text" name="nome" style="margin-left: 20px;" required placeholder="Es.Michael Jordan"></label>
                        <label>Squadra<input type="text" name="squadra" style="margin-left: 30px;" placeholder="Es.CHI"></label>
                        <label>Anno<input type="text" name="anno" style="margin-left: 47px;" placeholder="Es.1991"></label>
                    </div>
                    <div style="display: flex; flex-direction: column">
                        <label>Che statistiche vuoi vedere?</label>
                        <label><input type="radio" name="stats" value="points">Punti</label>
                        <label><input type="radio" name="stats" value="three_fg">Triple</label>
                        <label><input type="radio" name="stats" value="assists">Assist</label>
                        <label><input type="radio" name="stats" value="total_rb">Rimbalzi</label>
                        <label><input type="radio" name="stats" value="blocks">Stoppate</label>
                    </div>
                </div>
                <button type="submit" style="margin-left: 220px;">Cerca</button>
            </form>
        </div>
    </div>
</body>
</html>

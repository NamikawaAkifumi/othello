<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width,initial-scale=1.0,minimum-scale=1.0"
    />

    <title>othello</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body id="new_game">
    <div class="board"></div>
    <div class="chat">
    <iframe id="inlineFrameExample"
    title="Inline Frame Example"
    width="100%"
    height="100%"
    src="chat.php">
</iframe>

    </div>
    <div class="info">
      <div class="player_first">
        <div class="color"></div>
        <div class="player_name">
          player name
        </div>
        <p class="time_limit">残り0秒</p>
      </div>
      <div class="player_second">
        <div class="color"></div>
        <div class="player_name">
          player name
        </div>
        <p class="time_limit">残り0秒</p>
      </div>
      <p class="vs">VS</p>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <script src="js/othello.js"></script>
  </body>
</html>

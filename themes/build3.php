<!DOCTYPE html>
<head>
  <link href="/packs/3.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
</head>
<body>
<center>    
  <div id="fullScreenDiv">
      <div id="videoDiv">           
            <video id="video" autoplay loop muted>
            <source src="https://cdn.glitch.com/ee1acc53-54ea-4a5e-83e0-28ad64eb3fae%2FPexels%20Videos%202065443.mp4?v=1588688146054" type="video/mp4"></source>
            </video> 
        </div>
        <div id="messageBox"> 
            <div><div class="main"><div class="all">
              <br>
        <div class="intro">
          <h1>
            Happy Mothers Day!
          </h1>
        </div>
        <br />
        <div class="about">
          <div class="about-text">
            <h3>
              <?php echo $_GET['main'];  ?>
            </h3>
            <p>
              <?php echo $_GET['p']; ?>
            </p>
            <br>
            <br>
            <p>
              <strong>
              <?php echo "From, " . $_GET['from']; ?>
              </strong>
            </p>
          </div>
        </div>
      </div>
              <?php 
              if($_GET['music'] == "true"){
                echo "<audio controls src=\"https://cdn.glitch.com/ee1acc53-54ea-4a5e-83e0-28ad64eb3fae%2FMy%20Video%2019.mp3?v=1588688699456\" autoplay loop preload>\n";
                echo "<div style=\"border: 1px solid black ; padding: 8px ;\">\n";
                echo "Sorry, your browser does not support the <audio> tag used in this demo.\n";
                echo "</div>\n";
                echo "</audio>";
              }elseif ($_GET['music'] == "false") {
                echo "<!-- no audio -->";
              }
              
              ?>
    </body>
  </html>
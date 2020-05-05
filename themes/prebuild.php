<!DOCTYPE html>
<html>
  <head>
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:wght@200&display=swap"
      rel="stylesheet"
    />
    <link href="/style.css" rel="stylesheet" />
    <title>Mother's Day Card Builder</title>
    <style>
      button.theme {
        border-radius: 12px;
        background-color: #bbbbf2;
        color: #212ba7;
        border: 4px solid currentColor;
        text-decoration: none;
        padding: 15px 32px;
        font-size: inherit;
      }
    </style>
  </head>
  <body>
    <center>
      <div class="all">
        <div class="intro">
          <h1>
            Fill out these forms and your card will be ready!
          </h1>
          <br>
          <br>
          <?php
          if($_GET['theme'] == "one"){
            echo "<form action=\"/themes/build.php\">\n";
            echo "  <label for=\"main\">Title</label><br>\n";
            echo "  <input type=\"text\" id=\"main\" name=\"main\" value=\"Hello Mom!\"><br>\n";
            echo "  <label for=\"p\">Message</label><br>\n";
            echo "  <input type=\"text\" id=\"p\" name=\"p\" value=\"Thank you so much mom!\"><br>\n";
            echo "  <label for=\"p\">From</label><br>\n";
            echo "  <input type=\"text\" id=\"from\" name=\"from\" value=\"John Doe\"><br><br>\n";
            echo "  <input type=\"submit\" value=\"Build\">\n";
            echo "</form> ";

          } elseif($_GET['theme'] == "two"){
            echo "<form action=\"/themes/build2.php\">\n";
            echo "  <label for=\"main\">Title</label><br>\n";
            echo "  <input type=\"text\" id=\"main\" name=\"main\" value=\"Hello Mom!\"><br>\n";
            echo "  <label for=\"p\">Message</label><br>\n";
            echo "  <input type=\"text\" id=\"p\" name=\"p\" value=\"Thank you so much mom!\"><br>\n";
            echo "  <label for=\"p\">From</label><br>\n";
            echo "  <input type=\"text\" id=\"from\" name=\"from\" value=\"John Doe\"><br><br>\n";
            echo "  <input type=\"submit\" value=\"Build\">\n";
            echo "</form> ";

          }elseif($_GET['theme'] == "three"){
            echo "<form action=\"/themes/build3.php\">\n";
            echo "  <label for=\"main\">Title</label><br>\n";
            echo "  <input type=\"text\" id=\"main\" name=\"main\" value=\"Hello Mom!\"><br>\n";
            echo "  <label for=\"p\">Message</label><br>\n";
            echo "  <input type=\"text\" id=\"p\" name=\"p\" value=\"Thank you so much mom!\"><br>\n";
            echo "  <label for=\"p\">From</label><br>\n";
            echo "  <input type=\"text\" id=\"from\" name=\"from\" value=\"John Doe\"><br><br>\n";
            echo "  <input type=\"submit\" value=\"Build\">\n";
            echo "</form> ";

          }else{
            echo "Unknown theme. Maybe go back?";
          }
          ?>
          </div>
        </div>
      </div>
    </center>
  </body>
</html>

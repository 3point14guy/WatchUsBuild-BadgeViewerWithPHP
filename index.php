<?php
$data = array();
$data = file_get_contents('https://www.codeschool.com/users/IIIpoint14guy.json');
$json_data = json_decode($data, true);
$courses = $json_data['courses']['completed'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Coda" rel="stylesheet">
    <link rel="stylesheet" href="/css/grid.css" media="screen" title="no title" charset="utf-8">
    <title>Nick's Code School Badges</title>
  </head>
  <body>
    <header>
      <h1>Nicholas Piaskoski's Code School Badges</h1>
      <h4><a href="http://www.nickpie.com">Back to Nick's Portfolio</a></h4>
    </header>
    <div class="container">
      <div class="grid">
        <?php
          foreach ($courses as $course) {
            echo '<div class="grid-cell">';
            echo '<img height="200px" src="' . $course["badge"] . '"/><br/>';
            echo '<a href="' . $course["url"] . '">' . $course["title"] . '</a>';
            echo '</div>';
          };
        ?>
      </div>
    </div>
  </body>
  </html>

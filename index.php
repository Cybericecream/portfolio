<?php

include 'phpAssets/assets.php';

include_once $_SERVER['DOCUMENT_ROOT']  . '/data/data.php';

$title = "Nathaniel Barry";

include  $_SERVER['DOCUMENT_ROOT']  . '/phpAssets/head.php';
  ?>

<img class="heroImage" src="images/heroImage.jpeg" />

<?php
include  $_SERVER['DOCUMENT_ROOT']  . '/phpAssets/header.php';

 ?>
    <div class="body grid-x">

      <div class="intro cell small-12 grid-x">
        <div class="cell medium-12 small-12 text-center">
          <h2>Designer and Front-end Developer</h2>
          <p>Designing and building the web for the future, I've found something I love to do and wan't to work with you doing what you love to do.</p>
          <img src="images/profile.png" />
        </div>
      </div>

        <?php
            for ($i = 0; $i < $projectsLength; $i++){
                if ($i % 2 == 0){
                    echo '<div class="portfolio cell small-12 grid-x">';
                        echo '<a href="' . $projects[$i][4] . '">';
                        echo '<div class="info cell medium-7 small-12 text-center medium-text-left small-order-2 medium-order-1">';
                            echo '<h2>' . $projects[$i][0] . '</h2>';
                            echo '<h3>' . $projects[$i][1] . '</h3>';
                            echo '<p>' . $projects[$i][2] . '</p>';
                            echo '<ul>';
                                for ($x = 0; $x < $faLength; $x++){
                                    echo '<li>';
                                    echo '<a href="/#canDoItems">';
                                    echo $fa[$x];
                                    echo '</a>';
                                    echo '</li>';
                                }
                            echo'</ul>';
                        echo '</div>';
                        echo '</a>';
                        echo '<div class="cell medium-5 small-12 text-center small-order-1 medium-order-2">';
                            echo '<a href="' . $projects[$i][4] . '">';
                            echo '<img src="images/projects/'. $projects[$i][3] .'" />';
                            echo '</a>';
                        echo '</div>';
                    echo '</div>';
                }    else{
                    echo '<div class="portfolio cell small-12 grid-x">';
                        echo '<a href="' . $projects[$i][4] . '">';
                        echo '<div class="info cell medium-7 small-12 text-center medium-text-left small-order-2 medium-order-2">';
                            echo '<h2>' . $projects[$i][0] . '</h2>';
                            echo '<h3>' . $projects[$i][1] . '</h3>';
                            echo '<p>' . $projects[$i][2] . '</p>';
                            echo '<ul>';
                                for ($x = 0; $x < $faLength; $x++){
                                    echo '<li>';
                                    echo '<a href="/#canDoItems">';
                                    echo $fa[$x];
                                    echo '</a>';
                                    echo '</li>';
                                }
                            echo'</ul>';
                        echo '</div>';
                        echo '</a>';
                        echo '<div class="cell medium-5 small-12 text-center small-order-1 medium-order-1">';
                            echo '<a href="' . $projects[$i][4] . '">';
                            echo '<img src="images/projects/'. $projects[$i][3] .'" />';
                            echo '</a>';
                        echo '</div>';
                    echo '</div>';
                }
            }
        ?>

      <div id="canDoItems" class="titleCard cell small-12 grid-x grid-padding-x grid-padding-y text-center">
        <div class="cell medium-12 small-12">
          <h2>What I can do for you</h2>
        </div>
          <?php
          for($x = 0; $x < $fontAwesomeLength; $x++) {
              echo "<div class=\"canDo cell medium-3 small-12 text-center\">";
                  echo $fontAwesome[$x][0];
                  echo '<h2>' . $fontAwesome[$x][1] .'</h2>';
                  echo '<p>'. $fontAwesome[$x][2] .'</p>';
              echo "</div>";
          }
          ?>
      </div>

    </div>


<?php

include  $_SERVER['DOCUMENT_ROOT']  . '/phpAssets/footer.php';

 ?>

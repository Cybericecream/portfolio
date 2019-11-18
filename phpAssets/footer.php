<footer>
  <div class="info grid-x text-center">
      <div class="leftText medium-6 small-12 text-left align-middle">
        <h2>Designing and building the web for the future, I\'ve found something I love to do and wan\'t to work with you doing what you love to do.</h2>
      </div>
      <div class="medium-3 small-6">
  <h2>Pages</h2>
  <ul class="pages">
      <?php
      for($x = 0; $x < $navarrlength; $x++) {
          echo "<li>";
          echo '<a href="'.$nav[$x][0].'">';
          echo $nav[$x][1];
          echo '</a>';
          echo "</li>";
      }
      ?>
  </ul>
      </div>
      <div class="medium-3 small-6">
  <h2>Let\'s Work Togehter</h2>
  <span><a href="mail@nathanielbarry.com"><i class="fas fa-envelope"></i>mail@nathanielbarry.com</a></span>
      </div>
      <div class="small-12">
        <ul class="socialList">
            <?php
            for($x = 0; $x < $socialarrlength; $x++) {
                echo "<li>";
                echo '<a href="'.$social[$x][0].'">';
                echo $social[$x][1];
                echo '</a>';
                echo "</li>";
            }
            ?>
        </ul>
        <p>Copyright © Nathaniel Barry. All Rights Reserved</p>
      </div>
    </div>
</footer>
<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
<script type="text/javascript" src="js/jquery.easeScroll.js"></script>
<script src="js/script.js"></script>

</body>
</html>
<div id="mobileMenu" class="mobileNavMenu" data-off-canvas data-transition="overlap">
<div class="mobileNavMenu-inner">
  <button class="mobileNavMenu-close" aria-label="Close menu" type="button" data-close>
    <span aria-hidden="true">&times;</span>
  </button>

  <ul class="mobileNavMenu-menu">
      <?php
      for($x = 0; $x < $navarrlength; $x++) {
          echo "<li>";
          echo '<a href="'.$nav[$x][0].'">';
          echo $nav[$x][1];
          echo '</a>';
          echo "</li>";
      }
      ?>
      <li>
          <a href="/login.php">&#120529;</a>
      </li>
  </ul>
</div>
</div>

<a href="/login.php" class="loginButton">
    <p>&#120529;</p>
</a>

<div class="outer">

  <header>
    <div class="grid-x">
      <div class="top-bar cell medium-12 small-12 grid-x">
          <div class="cell small-6">
            <h1>Nathaniel Barry</h1>
          </div>
          <div class="desktopNav menu-hover cell small-6">
            <ul class="menu text-right">
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
          <div class="mobileNav cell small-6">
            <button class="menu-icon" type="button" data-toggle="mobileMenu"></button>
          </div>
      </div>
    </div>
  </header>


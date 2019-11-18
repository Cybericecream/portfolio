<?php

include 'phpAssets/assets.php';

include_once $_SERVER['DOCUMENT_ROOT']  . '/data/data.php';

$title = "Nathaniel Barry - Doc's";

include  $_SERVER['DOCUMENT_ROOT']  . '/phpAssets/head.php';

include  $_SERVER['DOCUMENT_ROOT']  . '/phpAssets/header.php';

 ?>
    <div class="body grid-x">

      <div class="intro cell small-12 grid-x">
        <div class="cell medium-12 small-12 text-center">
          <h2>Documentation</h2>
          <p>Come here to learn about what I find cool and interesting in <?php echo date("Y") ?></p>
          <img style="width: 20vw;margin: 0 auto;" src="images/doc.svg" />
        </div>
      </div>

        <div style="margin-top:10vh;" class="portfolio-title cell small-12 text-center">
            <h2 style="color:white;font-weight:bold;">Browsers</h2>
        </div>

      <div class="portfolio cell small-12 grid-x">
        <div class="info cell medium-8 small-12 text-center medium-text-left small-order-2 medium-order-2">
            <a href="https://www.mozilla.org">
            <h2>Firefox</h2>
            <h3>Absolutly Ledgendary</h3>
            <p>Firefox is a fairly complicated while extremely powerful browser from Mozilla, Mozilla came from the development team that made Netscape which was one the original Web Browsers.</p>
            </a>
        </div>
        <div class="cell medium-4 small-12 text-center small-order-1 medium-order-1">
            <a href="https://www.mozilla.org">
            <img style="width:80%" src="images/docs/firefox.svg" />
            </a>
        </div>
    </div>
    
    <div class="portfolio cell small-12 grid-x">
        <div class="info cell medium-8 small-12 text-center medium-text-left small-order-2 medium-order-1">
        <a href="https://www.opera.com/">
            <h2>Opera</h2>
            <h3>Small but powerful</h3>
            <p>Opera made for gamers by gamers, based on Chromium you get all the convience of Google Chrome without Googles bloat.</p>
            </a>
        </div>
        <div class="cell medium-4 small-12 text-center small-order-1 medium-order-2">
            <a href="https://www.opera.com/">
            <img style="width:80%" src="images/docs/opera.svg" />
            </a>
        </div>
    </div>

    <div style="margin-top:10vh;" class="portfolio-title cell small-12 text-center">
            <h2 style="color:white;font-weight:bold;">Ad Blockers / Cookie Filters</h2>
        </div>

      <div class="portfolio cell small-12 grid-x">
        <div class="info cell medium-8 small-12 text-center medium-text-left small-order-2">
            <h2>uBlock Origin</h2>
            <h3>Pure Magic</h3>
            <p>This is one of the most powerful ad blockers on the market, it not only blocks and filters ad's but also filters cookies coming in and going out. Download it for on any of your browsers.</p>
        </div>
        <div class="cell medium-4 small-12 text-center small-order-1">
            <img style="width:80%" src="images/docs/ublockorigin.png" />
        </div>
    </div>

    <div style="margin-top:10vh;" class="portfolio-title cell small-12 text-center">
            <h2 style="color:white;font-weight:bold;">VPN</h2>
        </div>

      <div class="portfolio cell small-12 grid-x">
        <div class="info cell medium-8 small-12 text-center medium-text-left small-order-2">
        <a href="https://www.expressvpn.com/">
            <h2>Express VPN</h2>
            <h3>Cheap but useful</h3>
            <p>Express VPN has been around for a few years and earned a great reputation across their users.</p>
            </a>
        </div>
        <div class="cell medium-4 small-12 text-center small-order-1">
            <a href="https://www.expressvpn.com/">
            <img style="width:80%" src="images/docs/expressvpn.png" />
            </a>
        </div>
    </div>
    
    <div class="portfolio cell small-12 grid-x">
        <div class="info cell medium-8 small-12 text-center medium-text-left small-order-2 medium-order-1">
        <a href="https://https://www.privateinternetaccess.com/">
            <h2>Private Internet Access</h2>
            <h3>New but ledgendary</h3>
            <p>PIA is fairly new in the VPN's ecosystem but have already earned a great reputation and is really worth a look.</p>
            </a>
        </div>
        <div class="cell medium-4 small-12 text-center small-order-1 medium-order-2">
            <a href="https://https://www.privateinternetaccess.com/">
            <img style="width:80%" src="images/docs/pia.png" />
            </a>
        </div>
    </div>

    <div class="cell small-12">
        <div class="grid-x">
        <div class="cell small-12">
            <h2 style="color:white;">Presentaion Documentation</h2>
            <ul style="color:white;">
                <li style="color:white;"><a href="" style="color:white;">Powerpoint</a></li>
                <li style="color:white;"><a href="" style="color:white;">Speech</a></li>
            </ul>
            </div>
            <div class="cell small-12">
            <h3 style="color:white;">Refrences</h3>
            <ul style="color:white;">
                <li style="color:white;">DataBox. (n.d.). Retrieved from https://databox.com/most-important-google-adwords-metrics</li>
                <li style="color:white;">Hern, A. (2018, May 6). The Guarddian. Retrieved from https://www.theguardian.com/news/2018/may/06/cambridge-analytica-how-turn-clicks-into-votes-christopher-wylie</li>
                <li style="color:white;">The Economist . (2017, May 6). The Economist. Retrieved from https://www.economist.com/leaders/2017/05/06/the-worlds-most-valuable-resource-is-no-longer-oil-but-data</li>
                <li style="color:white;">Washinton Post. (2013, August). Washinton Post. Retrieved from Washinton Post: https://www.washingtonpost.com/apps/g/page/business/how-targeted-advertising-works/412/</li>
            </ul>
            </div>
        </div>
    </div>


<?php

include  $_SERVER['DOCUMENT_ROOT']  . '/phpAssets/footer.php';

 ?>

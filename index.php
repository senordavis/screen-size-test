<!DOCTYPE html>
<html>
    <head>
        <title>Screen Size Test</title>
        <link rel="stylesheet" type="text/css" href="screen.css">
    </head>

    <body>
      <div class="url">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
          <input type="text" name="url" placeholder="Type your URL without http or https" value="<?php renderURL(); ?>">
          <input type="submit" value="View Site">
        </form>


      </div>

        <div class="container">

            <?php
            function renderURL() {
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $url = htmlspecialchars($_REQUEST['url']);
                if (empty($url)) { echo ""; } else { echo $url; }
              }
            }

            ?>

            <div class="first-row">

                <div class="small-mobile">
                    <iframe src="//<?php renderURL(); ?>" id="frameview"></iframe>
                    <p>320 x 568</p>
                </div>


                <div class="mobile">
                    <iframe src="//<?php renderURL(); ?>" class="frameview"></iframe>
                    <p>375 x 667</p>
                </div>


                <div class="tablet-landscape">
                    <iframe src="//<?php renderURL(); ?>" class="frameview"></iframe>
                    <p>1024 x 768</p>
                </div>


                <div class="laptop">
                    <iframe src="//<?php renderURL(); ?>" class="frameview"></iframe>
                    <p>1366 x 768</p>
                </div>

            </div>

            <div class="second-row">

                <div class="large-mobile">
                    <iframe src="//<?php renderURL(); ?>" class="frameview"></iframe>
                    <p>480 x 768</p>
                </div>


                <div class="tablet-portrait">
                    <iframe src="//<?php renderURL(); ?>" class="frameview"></iframe>
                    <p>768 x 1024</p>
                </div>


                <div class="desktop">
                    <iframe src="//<?php renderURL(); ?>" class="frameview"></iframe>
                    <p>1920 x 1024</p>
                </div>

            </div>

        </div>
    </body>
</html>

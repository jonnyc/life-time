<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Life Time Calculated</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <?php
        $birthdate = date_create($_REQUEST[birthdate], timezone_open('America/New_York'));
        $today = new DateTime("now",new DateTimeZone("America/New_York"));
        $interval = date_diff($birthdate, $today);
        $days_alive = $interval->format('%a days');
    ?>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="well clearfix">
                    <h3>You have been alive for: </h3>
                    <p>
                        <?php print number_format(($days_alive/365),2); ?> <strong>Years</strong>. Or,<br>
                        <?php print number_format($days_alive/30,2); ?> <strong>Months</strong>. Or,<br>
                        <?php print number_format($days_alive,2); ?> <strong>Days</strong>. Or,<br>
                        <?php print number_format($days_alive*24,2); ?> <strong>Hours</strong>. Or,<br>
                        <?php print number_format(($days_alive*24)*60,2); ?> <strong>Minutes</strong>. Or,<br>
                        <?php print number_format(($days_alive*24)*60*60,2); ?> <strong>Seconds</strong>.<br>
                    </p>
                    <a class="btn btn-primary pull-right" href="index.php" role="button">Start Again</a>
                    <!-- <div class="pull-right">
                        <a class="btn btn-primary" href="index.php" role="button">Start Again</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
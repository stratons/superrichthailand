<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Super Rich Thailand -- Exchange Rate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap Core CSS -->
    <link href="_/css/bootstrap.css" rel="stylesheet">
    <link href="_/css/superrichth.css" rel="stylesheet">

    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.1.min.js"></script>
  </head>
  
  <body id="exchange">
    <!-- NAVBAR -->
    <?php include '_/components/php/header.php'; ?>

    <!-- CONTENT -->
    <div class="container">
      <div class="row" id="content-margin">
        <div class="col-lg-12">
          <h4 class="currency-tab">EXCHANGE RATE</h4>
          <div class="row">
            <!-- DROPDOWN START -->
            <div class="col-lg-2">
              <select class="form-control input-sm">
                <option value="0">HEADQUARTER</option>
                <option value="1">BRANCH</option>
              </select>
            </div>
            <!-- DROPDOWN END -->

            <!-- TIMESTAMP START -->
            <div class="col-lg-9 tab-content">
                <p><strong>DATE:</strong> 09-11-2013</p>
                <p><strong>TIME:</strong> 15:23:37</p>
                <p><a href="#"><i class="fa fa-rotate-right"></i> Latest Rates</a></p>
                <p><a href="#"><i class="fa fa-print"></i> Print</a></p>
            </div>
            <!-- TIMESTAMP END -->
          </div>
          <!-- /.row -->
          <div class="row">
            <?php include '_/components/php/snippet-currencytable.php'; ?>

            <div class="col-sm-12 col-lg-4">
              <!-- Currency Converter -->
              <?php include '_/components/php/snippet-converter.php'; ?>

              <!-- Latest Announcement -->
              <?php include '_/components/php/snippet-latestnews.php'; ?>

              <!-- Currency Graph -->
              <?php include '_/components/php/snippet-currencygraph.php'; ?>

              <!-- Historical Exchange Rate -->
              <?php include '_/components/php/snippet-historicalexchange.php'; ?>
            </div>
            <!-- /.col-lg-4 -->
          </div>
          <!-- PANEL END -->
        </div>
        <!-- content end -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->

    <!-- FOOTER -->
    <?php include '_/components/php/footer.php'; ?>

    <!-- Scroll To Top --> 
    <a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a>

    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/superrichth.js"></script>

  </body>
</html>
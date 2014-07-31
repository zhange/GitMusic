<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>GitMusic</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="basic.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <!-- VexFlow Compiled Source -->

    <link href='http://fonts.googleapis.com/css?family=OFL+Sorts+Mill+Goudy+TT|Yanone+Kaffeesatz|Tangerine'
   rel='stylesheet' type='text/css'>
    <link href="http://vwww.vexflow.com/vextab/tabdiv.css" media="screen" rel="Stylesheet" type="text/css" />
    <link href="http://www.vexflow.com/vextab/style.css" media="screen" rel="Stylesheet" type="text/css" />

    <script src="vexflow-master/build/vexflow/vexflow-min.js"></script>
    <script src="vextab/support/vexflow-min.js"></script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/lodash.js/2.4.1/lodash.js"></script>
    <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script src="http://www.vexflow.com/support/tabdiv-debug.js"></script>

  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html" class="active">GitMusic</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="about.html">About</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li><a href="account.html">Welcome, ERIC</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

      <div class="starter-template">
	  
        <p class="lead">EDIT</p>
		
		<div class="titles">
			Title:</p>
		</div>
		
		<textarea rows="2" cols="100">New Composition</textarea>
		
		<div class="titles">
			Authors:</p>
		</div>
		
		<textarea rows="2" cols="100">ERIC</textarea>
		</p>
		
		<form action="edit2.php" method="post"> 
		    <textarea class= rows="20" cols="100" name="content"><?php $file2 = file_get_contents('newthing.txt', FILE_USE_INCLUDE_PATH);echo $file2;?>
			</textarea>
		    <br />
		    <input type="submit" value="ENTER" />
		</form>
        
      </div><!-- /.container -->
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>

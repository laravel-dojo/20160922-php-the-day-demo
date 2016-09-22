<?php

include __DIR__.'/inc/database.php';
include __DIR__.'/libs/my_string_mutator.php';

// connect to dabase
try {
    $dsn = 'mysql:host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_DATABASE.';charset='.DB_CHARSET;
    $pdo = new PDO($dsn, DB_USERNAME, DB_PASSWORD);
} catch (PDOException $e) {
    echo  "Error: ".$e->getMessage()."＜br/＞";
    die();
}

$string_mutator = new my_string_mutator();

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laravel 道場示範教材：用 Composer 將 Legacy 專案導入套件生態系</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/3-col-portfolio.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Laravel 道場示範教材</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="http://www.laravel-dojo.com/about/dojo" target="_blank">關於道場</a>
                    </li>
                    <li>
                        <a href="http://www.laravel-dojo.com/workshops" target="_blank">工作坊</a>
                    </li>
                    <li>
                        <a href="http://www.laravel-dojo.com/contact" target="_blank">聯絡我們</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <h1 class="text-center">用 Composer 將 Legacy 專案導入套件生態系</h1>
        </div>
        <!-- /.row -->

        <!-- Article Header -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">文章清單
                    <small><?=date('Y-m-d')?></small>
                </h2>
            </div>
        </div>
        <!-- /.row -->

        <!-- Article Row -->
        <div class="row">
            <?php $statement = $pdo->query("SELECT * FROM `posts` ORDER BY `created_at` DESC LIMIT 3"); ?>
            <?php while($row = $statement->fetch(PDO::FETCH_OBJ)): ?>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#"><?=$row->title?></a>
                </h3>
                <p><?=$string_mutator->trim($row->content)?></p>
                <p class="text-right">
                    <span class="glyphicon glyphicon-time"></span>
                    發表於 <?=$row->created_at?>
                </p>
            </div>
            <?php endwhile; ?>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Laravel 道場示範教材 2016</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo Yii::app()->params['description']; ?>">
        <meta name="author" content="<?php echo Yii::app()->params['author']; ?>">

        <link rel="shortcut icon" href="/images/favicon.png">

        <?php //Yii::app()->getClientScript()->registerCssFile('//ajax.googleapis.com/ajax/libs/dojo/1.9.2/dijit/themes/claro/claro.css'); ?>
        <?php Yii::app()->getClientScript()->registerCssFile('//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css'); ?>
        <?php Yii::app()->getClientScript()->registerCssFile('/css/icrm.css'); ?>

        <?php Yii::app()->getClientScript()->registerScriptFile('//code.jquery.com/jquery-1.10.2.min.js', CClientScript::POS_END); ?>
        <?php //Yii::app()->getClientScript()->registerScriptFile('//ajax.googleapis.com/ajax/libs/dojo/1.9.2/dojo/dojo.js', CClientScript::POS_END); ?>
        <?php Yii::app()->getClientScript()->registerScriptFile('//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js', CClientScript::POS_END); ?>

        <title><?php echo CHtml::encode(isset($this->pageTitle) ? $this->pageTitle : Yii::app()->name); ?></title>
    </head>
    <body class="">

        <div class="container">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo Yii::app()->homeUrl; ?>">icrm</a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                        <button type="button" class="btn btn-default navbar-btn">Sign in</button>
                        <p class="navbar-text navbar-right">Signed in as <a href="#" class="navbar-link">Mark Otto</a></p>
                    </div>
                </div>
            </nav>
            
            <ol class="breadcrumb">
                <li><a href="<?php echo Yii::app()->homeUrl; ?>">Pippo</a></li>
                <li><a href="<?php echo Yii::app()->homeUrl; ?>">Pluto</a></li>
                <li class="active">Paperino</li>
            </ol>

            <?php echo $content; ?>

        </div>

    </body>
</html>
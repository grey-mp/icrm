<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo Yii::app()->params['description']; ?>">
        <meta name="author" content="<?php echo Yii::app()->params['author']; ?>">

        <link rel="shortcut icon" href="/images/favicon.png">

        <?php Yii::app()->getClientScript()->registerCssFile('//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css'); ?>
        <?php Yii::app()->getClientScript()->registerCssFile('/css/icrm.css'); ?>

        <?php Yii::app()->getClientScript()->registerScriptFile('//code.jquery.com/jquery-1.10.2.min.js', CClientScript::POS_END); ?>
        <?php Yii::app()->getClientScript()->registerScriptFile('//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js', CClientScript::POS_END); ?>

        <title><?php echo CHtml::encode(isset($this->pageTitle) ? $this->pageTitle : Yii::app()->name); ?></title>
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
                    <a class="navbar-brand" href="<?php echo Yii::app()->homeUrl; ?>"><?php echo CHtml::encode(Yii::app()->name); ?></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="/about">About</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
        <div class="container">

            <?php echo $content; ?>

        </div>
    </body>
</html>
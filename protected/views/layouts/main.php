<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php echo Html::encode(Yii::app()->params['description']); ?>">
        <meta name="author" content="<?php echo Html::encode(Yii::app()->params['author']); ?>">

        <!-- Caricamento css -->

        <?php $this->css(); ?>

        <!-- Caricamento js -->
        
        <?php $this->js(); ?>

        <title><?php echo Html::encode(Yii::app()->params['title']); ?></title>

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <?php echo $content; ?>

        <script src="https://code.jquery.com/jquery.js"></script>
    </body>
</html>

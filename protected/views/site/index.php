<?php
/**
 * @property CController $this
 */
$this->pageTitle = Yii::app()->name . ' - Home';
?>

<h1><?php echo CHtml::encode(Yii::app()->name); ?> - Home page</h1>
<p>
    <button class="btn btn-default">default</button>
    <button class="btn btn-primary">primary</button>
    <button class="btn btn-danger">danger</button>
    <button class="btn btn-info">info</button>
    <button class="btn btn-success">success</button>
    <button class="btn btn-warning">warning</button>
</p>
<p>
    <button class="btn btn-default btn-lg">default lg</button>
    <button class="btn btn-default">default</button>
    <button class="btn btn-default btn-sm">default sm</button>
    <button class="btn btn-default btn-xs">default xs</button>
</p>
<div style="width: 50%;">
    <button class="btn btn-default btn-lg btn-block">default lg block</button>
    <button class="btn btn-primary btn-lg btn-block" disabled="disabled">default lg block disabled</button>
    <button class="btn btn-primary btn-lg btn-block active">default lg block active</button>
</div>
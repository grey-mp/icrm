<?php
/**
 * @property CController $this
 */
$this->pageTitle = Yii::app()->name . ' - Home';
?>

<h1><?php echo CHtml::encode(Yii::app()->name); ?> - Home page</h1>

<hr />

<h2>Buttons</h2>
<p>
    <?php foreach (array('default', 'primary', 'danger', 'info', 'success', 'warning') as $type) : ?>
        <button class="btn btn-<?php echo $type; ?>"><?php echo $type; ?></button>
    <?php endforeach; ?>
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

<hr />

<h2>Dropdowns</h2>
<div>
    <?php foreach (array('default', 'primary', 'danger', 'info', 'success', 'warning') as $type) : ?>
        <div class="btn-group">
            <button type="button" class="btn btn-<?php echo $type; ?>  dropdown-toggle" data-toggle="dropdown">
                <?php echo $type; ?> <span class="caret"></span>
            </button>    
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
        </div> 
    <?php endforeach; ?>
</div>
<div>
    <?php foreach (array('default', 'primary', 'danger', 'info', 'success', 'warning') as $type) : ?>
        <div class="btn-group">
            <button type="button" class="btn btn-<?php echo $type; ?>"><?php echo $type; ?></button>
            <button type="button" class="btn btn-<?php echo $type; ?>  dropdown-toggle" data-toggle="dropdown">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
            </button>    
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
        </div> 
    <?php endforeach; ?>
</div>
<div>
    <?php foreach (array('lg', 'md', 'sm', 'xs') as $size) : ?>
        <div class="btn-group dropup">
            <button type="button" class="btn btn-default btn-<?php echo $size; ?> dropdown-toggle" data-toggle="dropdown">
                btn-<?php echo $size; ?> <span class="caret"></span>
            </button>    
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
        </div> 
    <?php endforeach; ?>

</div>


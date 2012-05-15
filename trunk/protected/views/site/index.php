<?php $this->pageTitle=Yii::app()->name; ?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>


To test the modified nicedit.js, please go below.

    <?php echo CHtml::link(Yii::app()->createAbsoluteUrl('article/update', array('id'=>1)), Yii::app()->createAbsoluteUrl('article/update', array('id'=>1))); ?>

<?php
$this->title = Yii::t('NewsModule.news', 'News');
$this->breadcrumbs = [Yii::t('NewsModule.news', 'News')];
?>

<h1>Новости</h1>

<?php $this->widget(
    'bootstrap.widgets.TbListView',
    [
        'dataProvider' => $dataProvider,
        'itemView'     => '_item',
    ]
); ?>

<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PostsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hello!';
$this->params['breadcrumbs'][] = 'Home';
?>


<div class="container">
            <img src="chantieee.jpg" alt="Norway" height="600">
            <div class="center">

 <h1>CHANTAL SALDIVAR</h1>

            <p>Hello! Hi! Im Chantal Saldivar but you can call me chanty as well.Im an <stong>APCIAN</strong> student and Im welcoming myself to the website world.<br>I hope html will not be so hard to me,patience is a must! Im so exoited about learning more whoooooooooooooooooooooooooooooooo! :)</p>

            <br>

            <br>

            <h1>Hobbies</h1>

            <p>I can say that I have many hobbies in life.Lets start naming it one by one when it comes to sports I love playing basketball and table tennis.</br>When Im at home spending my spare time, Usually I watch movies,read some inspirational<br>
            quotes and study lectures at day time.At night I kept on browsing facebook till dawn. </p>




<div class="post-index">

    <h1><?= Html::encode('Forms') ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Post', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'firstname',
            'slug',
            'lastname',
            'midname',
            // 'nickname',
            // 'email:email',
            // 'homeadd',
            // 'gender',
            // 'comment:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function()
{
    $("#show").click(function(){
        $("answers").toggle(500);
    });
});
</script>

<h1>Trivias</h1>
<br>
<ul>
<?php foreach ($trivias as $trivia): ?>

    <li>
        <strong><?= Html::encode("{$trivia->question}") ?>:</strong>
		<br></br>	
		<answers style=display:none><?= $trivia->answer ?></answers>
		<br></br>	
    </li>	
<?php endforeach; ?>
<button id="show">Show all answer</button>
</ul>
</div>

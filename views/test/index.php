<?php

use \yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $content */
?>




<div class="container">
    <div class="row">
        <div class="col-6">

            <pre>

            </pre>
            <br />

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Номер зала</th>
                        <th>Вместимость</th>
                        <th>Статус</th>
                        <th>Тренер</th>
                        <th>Вид(инд/групп)</th>
                        <th>Кол-во участников</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($content as $item): ?>
                    <tr>
                        <td>
                            <?= ArrayHelper::getValue($item, 'Gym.Number') ?>
                        </td>
                        <td>
                            <?= ArrayHelper::getValue($item, 'Gym.Capacity') ?>
                        </td>
                        <td>
                            <?= ArrayHelper::getValue($item, 'Gym.Active') ?>
                        </td>
                        <td>
                            <?= ArrayHelper::getValue($item, 'Coach.FIO') ?>
                        </td>
                        <td>
                            <?= ArrayHelper::getValue($item, 'Type.TypeName') ?>
                        </td>
                        <td>
                            <?= ArrayHelper::getValue($item, 'Quantity') ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                
            </table>
        </div>
    </div>
</div>


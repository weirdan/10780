<?php

namespace app\models;

use yii\db\ActiveRecord;

class Subject extends ActiveRecord {
  public function attributes() {
    return [
      123,
      'name',
      'teacher',
      'class',
    ];
  }
}
$db = (new Subject())->getDb();
/** @psalm-trace $db */;

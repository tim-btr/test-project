<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transaction_log".
 *
 * @property int $id
 * @property string|null $from
 * @property string|null $to
 * @property int|null $total_sum
 * @property string|null $date
 * @property int|null $status
 * @property string|null $error
 */
class TransactionLog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaction_log';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['total_sum', 'status'], 'integer'],
            [['date'], 'safe'],
            [['from', 'to', 'error'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'from' => 'From',
            'to' => 'To',
            'total_sum' => 'Total Sum',
            'date' => 'Date',
            'status' => 'Status',
            'error' => 'Error',
        ];
    }
}

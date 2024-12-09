<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "Tbl_Official_Time_Schedule".
 *
 * @property int $time_id
 * @property string $Time_Schedule
 *
 * @property TblOfficialFinalSchedule[] $tblOfficialFinalSchedules
 */
class TblOfficialTimeSchedule extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Tbl_Official_Time_Schedule';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Time_Schedule'], 'required'],
            [['Time_Schedule'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'time_id' => 'Time ID',
            'Time_Schedule' => 'Time Schedule',
        ];
    }

    /**
     * Gets query for [[TblOfficialFinalSchedules]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblOfficialFinalSchedules()
    {
        return $this->hasMany(TblOfficialFinalSchedule::class, ['time_id' => 'time_id']);
    }
}

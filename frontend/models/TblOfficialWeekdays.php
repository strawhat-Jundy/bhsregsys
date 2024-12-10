<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "Tbl_Official_Weekdays".
 *
 * @property int $weekday_id
 * @property string $Day
 *
 * @property TblOfficialFinalSchedule[] $tblOfficialFinalSchedules
 */
class TblOfficialWeekdays extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Tbl_Official_Weekdays';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Day'], 'required'],
            [['Day'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'weekday_id' => 'Weekday ID',
            'Day' => 'Day',
        ];
    }

    /**
     * Gets query for [[TblOfficialFinalSchedules]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblOfficialFinalSchedules()
    {
        return $this->hasMany(TblOfficialFinalSchedule::class, ['weekday_id' => 'weekday_id']);
    }
}

<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "Tbl_Official_Subjects".
 *
 * @property int $subject_id
 * @property string $subject_name
 * @property string $schedule_day
 * @property string $schedule_time
 * @property string $room
 *
 * @property TblOfficialFinalSchedule[] $tblOfficialFinalSchedules
 */
class TblOfficialSubjects extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Tbl_Official_Subjects';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subject_name', 'schedule_day', 'schedule_time', 'room'], 'required'],
            [['subject_name', 'room'], 'string', 'max' => 200],
            [['schedule_day'], 'string', 'max' => 10],
            [['schedule_time'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'subject_id' => 'Subject ID',
            'subject_name' => 'Subject Name',
            'schedule_day' => 'Schedule Day',
            'schedule_time' => 'Schedule Time',
            'room' => 'Room',
        ];
    }

    /**
     * Gets query for [[TblOfficialFinalSchedules]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblOfficialFinalSchedules()
    {
        return $this->hasMany(TblOfficialFinalSchedule::class, ['subject_id' => 'subject_id']);
    }
}

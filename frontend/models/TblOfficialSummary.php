<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "Tbl_Official_Summary".
 *
 * @property int $summary_id
 * @property int|null $Schedule_ID
 * @property int|null $subject_id
 * @property int|null $teacher_id
 * @property int|null $room_id
 * @property int|null $status_id
 * @property int|null $weekday_id
 * @property int|null $time_id
 * @property string|null $student_ids
 */
class TblOfficialSummary extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Tbl_Official_Summary';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Schedule_ID', 'subject_id', 'teacher_id', 'room_id', 'status_id', 'weekday_id', 'time_id'], 'integer'],
            [['student_ids'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'summary_id' => 'Summary ID',
            'Schedule_ID' => 'Schedule ID',
            'subject_id' => 'Subject ID',
            'teacher_id' => 'Teacher ID',
            'room_id' => 'Room ID',
            'status_id' => 'Status ID',
            'weekday_id' => 'Weekday ID',
            'time_id' => 'Time ID',
            'student_ids' => 'Student Ids',
        ];
    }
}

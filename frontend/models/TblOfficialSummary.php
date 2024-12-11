<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "Tbl_Official_Summaries".
 *
 * @property int $Schedule_ID
 * @property int $subject_id
 * @property int $teacher_id
 * @property int $room_id
 * @property int $status_id
 * @property int $weekday_id
 * @property int $time_id
 * @property int $student_id
 *
 * @property TblOfficialFinalSchedule $schedule
 * @property TblOfficialStudents $student
 */
class TblOfficialSummary extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Tbl_Official_Summaries';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Schedule_ID', 'subject_id', 'teacher_id', 'room_id', 'status_id', 'weekday_id', 'time_id', 'student_id'], 'required'],
            [['Schedule_ID', 'subject_id', 'teacher_id', 'room_id', 'status_id', 'weekday_id', 'time_id', 'student_id'], 'integer'],
            [['Schedule_ID'], 'exist', 'skipOnError' => true, 'targetClass' => TblOfficialFinalSchedule::class, 'targetAttribute' => ['Schedule_ID' => 'Schedule_ID']],
            [['student_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblOfficialStudents::class, 'targetAttribute' => ['student_id' => 'student_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Schedule_ID' => 'Schedule ID',
            'subject_id' => 'Subject ID',
            'teacher_id' => 'Teacher ID',
            'room_id' => 'Room ID',
            'status_id' => 'Status ID',
            'weekday_id' => 'Weekday ID',
            'time_id' => 'Time ID',
            'student_id' => 'Student ID',
        ];
    }

    /**
     * Gets query for [[Schedule]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSchedule()
    {
        return $this->hasOne(TblOfficialFinalSchedule::class, ['Schedule_ID' => 'Schedule_ID']);
    }

    /**
     * Gets query for [[Student]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(TblOfficialStudents::class, ['student_id' => 'student_id']);
    }
}

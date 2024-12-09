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
 * @property int $teacher_id
 *
 * @property BalingasaHighSchoolTeachers $teacher
 * @property TblOfficialFinalSchedule[] $tblOfficialFinalSchedules
 */
class BalingasaHighSchoolSubjects extends \yii\db\ActiveRecord
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
            [['subject_name', 'schedule_day', 'schedule_time', 'room', 'teacher_id'], 'required'],
            [['teacher_id'], 'integer'],
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
            'teacher_id' => 'Teacher ID',
        ];
    }

    /**
     * Gets query for [[Teacher]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(BalingasaHighSchoolTeachers::class, ['id' => 'teacher_id']);
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
};
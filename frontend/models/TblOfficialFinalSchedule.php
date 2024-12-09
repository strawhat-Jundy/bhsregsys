<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "Tbl_Official_Final_Schedule".
 *
 * @property int $Schedule_ID
 * @property int $subject_id
 * @property int $teacher_id
 * @property int $room_id
 * @property int $student_id
 * @property int $status_id
 * @property int $weekday_id
 * @property int $time_id
 *
 * @property TblOfficialRoomTable $room
 * @property TblOfficialStatus $status
 * @property TblOfficialStudents $student
 * @property TblOfficialSubjects $subject
 * @property TblOfficialTeachers $teacher
 * @property TblOfficialTimeSchedule $time
 * @property TblOfficialWeekdays $weekday
 */
class TblOfficialFinalSchedule extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Tbl_Official_Final_Schedule';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subject_id', 'teacher_id', 'room_id', 'student_id', 'status_id', 'weekday_id', 'time_id'], 'required'],
            [['subject_id', 'teacher_id', 'room_id', 'student_id', 'status_id', 'weekday_id', 'time_id'], 'integer'],
            [['subject_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblOfficialSubjects::class, 'targetAttribute' => ['subject_id' => 'subject_id']],
            [['teacher_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblOfficialTeachers::class, 'targetAttribute' => ['teacher_id' => 'teacher_id']],
            [['room_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblOfficialRoomTable::class, 'targetAttribute' => ['room_id' => 'room_id']],
            [['student_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblOfficialStudents::class, 'targetAttribute' => ['student_id' => 'student_id']],
            [['time_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblOfficialTimeSchedule::class, 'targetAttribute' => ['time_id' => 'time_id']],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblOfficialStatus::class, 'targetAttribute' => ['status_id' => 'status_id']],
            [['weekday_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblOfficialWeekdays::class, 'targetAttribute' => ['weekday_id' => 'weekday_id']],
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
            'student_id' => 'Student ID',
            'status_id' => 'Status ID',
            'weekday_id' => 'Weekday ID',
            'time_id' => 'Time ID',
        ];
    }

    /**
     * Gets query for [[Room]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoom()
    {
        return $this->hasOne(TblOfficialRoomTable::class, ['room_id' => 'room_id']);
    }

    /**
     * Gets query for [[Status]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(TblOfficialStatus::class, ['status_id' => 'status_id']);
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

    /**
     * Gets query for [[Subject]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubject()
    {
        return $this->hasOne(TblOfficialSubjects::class, ['subject_id' => 'subject_id']);
    }

    /**
     * Gets query for [[Teacher]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(TblOfficialTeachers::class, ['teacher_id' => 'teacher_id']);
    }

    /**
     * Gets query for [[Time]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTime()
    {
        return $this->hasOne(TblOfficialTimeSchedule::class, ['time_id' => 'time_id']);
    }

    /**
     * Gets query for [[Weekday]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWeekday()
    {
        return $this->hasOne(TblOfficialWeekdays::class, ['weekday_id' => 'weekday_id']);
    }

   
}

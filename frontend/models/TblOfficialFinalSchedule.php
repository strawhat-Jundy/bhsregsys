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
 * @property string $Status
 * @property string $Day_Schedule
 * @property string $Time_Schedule
 * @property string $Room
 *
 * @property TblOfficialRoomTable $room
 * @property TblOfficialStudents $student
 * @property TblOfficialSubjects $subject
 * @property TblOfficialTeachers $teacher
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
            [['subject_id', 'teacher_id', 'room_id', 'student_id', 'Status', 'Day_Schedule', 'Time_Schedule', 'Room'], 'required'],
            [['subject_id', 'teacher_id', 'room_id', 'student_id'], 'integer'],
            [['Status'], 'string', 'max' => 18],
            [['Day_Schedule', 'Room'], 'string', 'max' => 255],
            [['Time_Schedule'], 'string', 'max' => 6],
            [['subject_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblOfficialSubjects::class, 'targetAttribute' => ['subject_id' => 'subject_id']],
            [['teacher_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblOfficialTeachers::class, 'targetAttribute' => ['teacher_id' => 'teacher_id']],
            [['room_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblOfficialRoomTable::class, 'targetAttribute' => ['room_id' => 'room_id']],
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
            'student_id' => 'Student ID',
            'Status' => 'Status',
            'Day_Schedule' => 'Day Schedule',
            'Time_Schedule' => 'Time Schedule',
            'Room' => 'Room',
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
}

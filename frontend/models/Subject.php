<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "subject".
 *
 * @property int $id
 * @property string $subject_name
 * @property int $teacher_id
 *
 * @property StudentSubject[] $studentSubjects
 * @property Teacher $teacher
 */
class Subject extends \yii\db\ActiveRecord
{
    public $students;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subject';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subject_name', 'teacher_id'], 'required'],
            [['teacher_id'], 'integer'],
            [['subject_name'], 'string', 'max' => 255],
            [['teacher_id'], 'exist', 'skipOnError' => true, 'targetClass' => Teacher::class, 'targetAttribute' => ['teacher_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'subject_name' => 'Subject Name',
            'teacher_id' => 'Teacher ID',
        ];
    }

    /**
     * Gets query for [[StudentSubjects]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudentSubjects()
    {
        return $this->hasMany(StudentSubject::class, ['subject_id' => 'id']);
    }

    /**
     * Gets query for [[Teacher]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(Teacher::class, ['id' => 'teacher_id']);
    }
}

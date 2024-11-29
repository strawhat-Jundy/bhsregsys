<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $email
 * @property string|null $gender
 *
 * @property StudentSubject[] $studentSubjects
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'email', 'gender'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'gender' => 'Gender',
        ];
    }

    /**
     * Gets query for [[StudentSubjects]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudentSubjects()
    {
        return $this->hasMany(StudentSubject::class, ['student_id' => 'id']);
    }
}

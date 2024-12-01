<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "Tbl_Official_Students".
 *
 * @property int $student_id
 * @property string $lrn
 * @property string $first_name
 * @property string $last_name
 * @property string $gender
 * @property string $birthdate
 * @property string $place_of_birth
 * @property string $address
 * @property string $religion
 * @property string $email
 * @property string $civil_status
 * @property string $nationality
 * @property string $language
 * @property string $middle_name
 *
 * @property TblOfficialFinalSchedule[] $tblOfficialFinalSchedules
 */
class BalingasaHighSchoolStudents extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Tbl_Official_Students';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lrn', 'first_name', 'last_name', 'gender', 'birthdate', 'place_of_birth', 'address', 'religion', 'email', 'civil_status', 'nationality', 'language', 'middle_name'], 'required'],
            [['gender', 'civil_status'], 'string'],
            [['birthdate'], 'safe'],
            [['lrn'], 'string', 'max' => 20],
            [['first_name', 'last_name', 'place_of_birth', 'religion', 'email', 'nationality', 'language', 'middle_name'], 'string', 'max' => 200],
            [['address'], 'string', 'max' => 1000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'student_id' => 'Student ID',
            'lrn' => 'Lrn',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'gender' => 'Gender',
            'birthdate' => 'Birthdate',
            'place_of_birth' => 'Place Of Birth',
            'address' => 'Address',
            'religion' => 'Religion',
            'email' => 'Email',
            'civil_status' => 'Civil Status',
            'nationality' => 'Nationality',
            'language' => 'Language',
            'middle_name' => 'Middle Name',
        ];
    }

    /**
     * Gets query for [[TblOfficialFinalSchedules]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblOfficialFinalSchedules()
    {
        return $this->hasMany(TblOfficialFinalSchedule::class, ['student_id' => 'student_id']);
    }
}

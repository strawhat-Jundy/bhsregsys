<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Tbl_Official_Teachers".
 *
 * @property int $teacher_id
 * @property string $first_name
 * @property string $last_name
 *
 * @property TblOfficialFinalSchedule[] $tblOfficialFinalSchedules
 */
class TblOfficialTeachers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Tbl_Official_Teachers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name'], 'required'],
            [['first_name', 'last_name'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'teacher_id' => 'Teacher ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
        ];
    }

    /**
     * Gets query for [[TblOfficialFinalSchedules]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblOfficialFinalSchedules()
    {
        return $this->hasMany(TblOfficialFinalSchedule::class, ['teacher_id' => 'teacher_id']);
    }
}

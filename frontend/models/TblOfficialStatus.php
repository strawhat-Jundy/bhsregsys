<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "Tbl_Official_Status".
 *
 * @property int $status_id
 * @property string $Status
 *
 * @property TblOfficialFinalSchedule[] $tblOfficialFinalSchedules
 */
class TblOfficialStatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Tbl_Official_Status';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Status'], 'required'],
            [['Status'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'status_id' => 'Status ID',
            'Status' => 'Status',
        ];
    }

    /**
     * Gets query for [[TblOfficialFinalSchedules]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblOfficialFinalSchedules()
    {
        return $this->hasMany(TblOfficialFinalSchedule::class, ['status_id' => 'status_id']);
    }
}

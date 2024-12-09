<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "Tbl_Official_Room_Table".
 *
 * @property int $room_id
 * @property string $Room
 * @property string $Floor
 * @property string $Building
 * @property int $Room_Number
 * @property string $Description
 *
 * @property TblOfficialFinalSchedule[] $tblOfficialFinalSchedules
 */
class TblOfficialRoomTable extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Tbl_Official_Room_Table';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Room', 'Floor', 'Building', 'Room_Number', 'Description'], 'required'],
            [['Room_Number'], 'integer'],
            [['Room', 'Floor'], 'string', 'max' => 11],
            [['Building'], 'string', 'max' => 30],
            [['Description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'room_id' => 'Room ID',
            'Room' => 'Room',
            'Floor' => 'Floor',
            'Building' => 'Building',
            'Room_Number' => 'Room Number',
            'Description' => 'Description',
        ];
    }

    /**
     * Gets query for [[TblOfficialFinalSchedules]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblOfficialFinalSchedules()
    {
        return $this->hasMany(TblOfficialFinalSchedule::class, ['room_id' => 'room_id']);
    }
}

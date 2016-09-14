<?php

namespace yuncms\link\models;

use Yii;
use yii\db\ActiveRecord;
use common\models\Admin;
use common\models\Type;

/**
 * This is the model class for table "{{%link}}".
 *
 * @property integer $id
 * @property integer $type_id
 * @property string $name
 * @property string $description
 * @property string $url
 * @property string $logo
 * @property integer $admin_id
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Admin $admin
 * @property Type $type
 */
class Link extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%link}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type_id', 'admin_id', 'created_at', 'updated_at'], 'integer'],
            [['name', 'url', 'created_at', 'updated_at'], 'required'],
            [['name', 'description', 'url', 'logo'], 'string', 'max' => 255],
            [['admin_id'], 'exist', 'skipOnError' => true, 'targetClass' => Admin::className(), 'targetAttribute' => ['admin_id' => 'id']],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => Type::className(), 'targetAttribute' => ['type_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'type_id' => Yii::t('app', 'Type ID'),
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
            'url' => Yii::t('app', 'Url'),
            'logo' => Yii::t('app', 'Logo'),
            'admin_id' => Yii::t('app', 'Admin ID'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdmin()
    {
        return $this->hasOne(Admin::className(), ['id' => 'admin_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(Type::className(), ['id' => 'type_id']);
    }

    /**
     * @inheritdoc
     * @return LinkQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new LinkQuery(get_called_class());
    }
}
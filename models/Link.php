<?php

namespace yuncms\link\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use yuncms\system\models\Type;

/**
 * This is the model class for table "{{%link}}".
 *
 * @property integer $id
 * @property integer $type_id
 * @property string $name
 * @property string $description
 * @property string $url
 * @property string $logo
 * @property integer $user_id
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property \yii\web\User $user
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
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            'blameable' => [
                'class' => BlameableBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => 'user_id',
                ],
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type_id', 'user_id'], 'integer'],
            [['name', 'url'], 'required'],
            [['name', 'description', 'url', 'logo'], 'string', 'max' => 255],
            [['url'], 'url'],
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
            'type_id' => Yii::t('link', 'Type ID'),
            'name' => Yii::t('link', 'Name'),
            'description' => Yii::t('link', 'Description'),
            'url' => Yii::t('link', 'Url'),
            'logo' => Yii::t('link', 'Logo'),
            'user_id' => Yii::t('link', 'User ID'),
            'created_at' => Yii::t('link', 'Created At'),
            'updated_at' => Yii::t('link', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Yii::$app->user->identityClass, ['id' => 'user_id']);
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

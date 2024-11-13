<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "students".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property string $birth_date
 * @property string $gender
 * @property string|null $address
 * @property string $enrollment_date
 * @property int|null $status
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'students';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'email', 'phone', 'birth_date', 'gender', 'enrollment_date'], 'required'],
            [['birth_date', 'enrollment_date'], 'safe'],
            [['address'], 'string'],
            [['status'], 'integer'],
            [['first_name', 'last_name', 'email'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 20],
            [['gender'], 'string', 'max' => 10],
            [['email'], 'unique'],
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
            'phone' => 'Phone',
            'birth_date' => 'Birth Date',
            'gender' => 'Gender',
            'address' => 'Address',
            'enrollment_date' => 'Enrollment Date',
            'status' => 'Status',
        ];
    }
}

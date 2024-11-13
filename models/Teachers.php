<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teachers".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property string $birth_date
 * @property string $gender
 * @property string|null $address
 * @property string $hire_date
 * @property string|null $department
 * @property int|null $status
 */
class Teachers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teachers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'email', 'phone', 'birth_date', 'gender', 'hire_date'], 'required'],
            [['birth_date', 'hire_date'], 'safe'],
            [['address'], 'string'],
            [['status'], 'integer'],
            [['first_name', 'last_name', 'email', 'department'], 'string', 'max' => 255],
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
            'hire_date' => 'Hire Date',
            'department' => 'Department',
            'status' => 'Status',
        ];
    }
}

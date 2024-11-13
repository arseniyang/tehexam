<?php

use yii\db\Migration;

/**
 * Class m241113_020728_Teachers
 */
class m241113_020728_Teachers extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // Создание таблицы teachers с 10 полями
        $this->createTable('{{%teachers}}', [
            'id' => $this->primaryKey(), // ID преподавателя, автоматически создается как первичный ключ
            'first_name' => $this->string(255)->notNull(), // Имя преподавателя
            'last_name' => $this->string(255)->notNull(), // Фамилия преподавателя
            'email' => $this->string(255)->notNull()->unique(), // Электронная почта (должна быть уникальной)
            'phone' => $this->string(20)->notNull(), // Телефон
            'birth_date' => $this->date()->notNull(), // Дата рождения
            'gender' => $this->string(10)->notNull(), // Пол
            'address' => $this->text(), // Адрес преподавателя
            'hire_date' => $this->date()->notNull(), // Дата найма
            'department' => $this->string(255), // Кафедра или департамент
            'status' => $this->smallInteger()->defaultValue(1), // Статус (1 - активный, 0 - неактивный)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // Удаление таблицы teachers
        $this->dropTable('{{%teachers}}');
    }
}

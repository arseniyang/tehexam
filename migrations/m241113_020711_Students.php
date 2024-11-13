<?php

use yii\db\Migration;

/**
 * Class m241113_020711_Students
 */
class m241113_020711_Students extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // Создание таблицы students с 10 полями
        $this->createTable('{{%students}}', [
            'id' => $this->primaryKey(), // ID студента, автоматически создается как первичный ключ
            'first_name' => $this->string(255)->notNull(), // Имя студента
            'last_name' => $this->string(255)->notNull(), // Фамилия студента
            'email' => $this->string(255)->notNull()->unique(), // Электронная почта (должна быть уникальной)
            'phone' => $this->string(20)->notNull(), // Телефон
            'birth_date' => $this->date()->notNull(), // Дата рождения
            'gender' => $this->string(10)->notNull(), // Пол (можно использовать ENUM или строку)
            'address' => $this->text(), // Адрес студента
            'enrollment_date' => $this->date()->notNull(), // Дата поступления
            'status' => $this->smallInteger()->defaultValue(1), // Статус (1 - активный, 0 - не активный)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // Удаление таблицы students
        $this->dropTable('{{%students}}');
    }
}

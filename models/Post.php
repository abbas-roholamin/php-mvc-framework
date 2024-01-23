<?php


namespace app\models;


use thecodeholic\phpmvc\db\DbModel;


class Post extends DbModel
{
    public int $id = 0;
    public string $title = '';
    public string $content = '';

    public static $fieldable = ['title', 'content'];


    public static function tableName(): string
    {
        return 'posts';
    }

    public function attributes(): array
    {
        return ['title', 'content'];
    }


    public function labels(): array
    {
        return [
            'title' => 'Title',
            'content' => 'Content'
        ];
    }

    public function rules()
    {
        return [
            'title' => [self::RULE_REQUIRED],
            'content' => [self::RULE_REQUIRED]
        ];
    }

    public function save()
    {
        return parent::save();
    }
}

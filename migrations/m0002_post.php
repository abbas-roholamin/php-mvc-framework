<?php

class m0002_post
{
    public function up()
    {
        $db = \thecodeholic\phpmvc\Application::$app->db;
        $SQL = "CREATE TABLE posts (
                id INT AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(255) NOT NULL,
                content VARCHAR(255) NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )  ENGINE=INNODB;";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \thecodeholic\phpmvc\Application::$app->db;
        $SQL = "DROP TABLE posts;";
        $db->pdo->exec($SQL);
    }
}

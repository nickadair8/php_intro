<?php
require 'validator.php';

$config = require "config.php";
$db = new Database($config['database']);

$heading = "Create a Note";


if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    //dd($_POST);
    $errors = [];
    if (validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = "A body is required";
    }


    if (empty($errors)) {
        $db->query(
            'INSERT INTO notes(body, user_id) VALUES(:body, :user_id)',
            [
                'body' => $_POST['body'],
                'user_id' => 1
            ]
        );
    }
}

require "views/notes/note-create.view.php";

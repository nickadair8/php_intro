<?php
$config = require "config.php";
$currentUserId = 1;

$db = new Database($config['database']);

$heading = "Note";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->findOrFail();

    authorize($note['user_id'] === $currentUserId);

    $db->query('delete from notes where id = :id', [
        'id' => $_GET['id']
    ]);

    header('location: /notes');
} else {

    $note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->findOrFail();

    authorize($note['user_id'] === $currentUserId);
}


require "views/notes/note.view.php";

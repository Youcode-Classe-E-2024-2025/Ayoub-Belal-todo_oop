<?php 
    require_once  '../models/model.php';
    require_once '../config/database.php';
    $id_task = $_GET['id'];
    $taskUser = new TaskUser($db);
    $taskUser->unassignAll($id_task);
    $task=Task::delete($id_task, $db);
    header('location: /');
?>
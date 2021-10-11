<!DOCTYPE html>
<html lang="en">
<head>
    <title>Setting up database</title>
</head>
<body>
    <h3>Setting up...</h3>

    <?php
        require_once 'functions.php';

        createTable('students',
                        'name VARCHAR(32),
                        user VARCHAR(16),
                        pass VARCHAR(16),
                        INDEX(user(6))');

        createTable('professor',
                        'name VARCHAR(32),
                        user VARCHAR(16),
                        pass VARCHAR(16),
                        INDEX(user(6))');
        

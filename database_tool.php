<?php
// create_db.php
try {
    $db = new PDO('sqlite:database.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database 'database.db' created successfully!";
} catch (PDOException $e) {
    echo "Error creating database: " . $e->getMessage();
}
?>

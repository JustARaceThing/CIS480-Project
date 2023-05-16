<?php
//Output page for successful or unsuccessful database conenction (for testing)
require_once('../model/database.php');

error_reporting(E_ERROR);

$db = new Database();
?>

<html>
    <head>
        <title>Connection Status</title>
    </head>

    <body>
        <h1>Database Connection Status</h1>
        <ul>
            <li><?php echo "Database Name: " . $db->getDbName(); ?></li>
            <li><?php echo "Database Host: " . $db->getDbHost(); ?></li>
            <li><?php echo "Database Username: " . $db->getDbUser(); ?></li>
            <li><?php echo "Database Password: " . $db->getDbUserPw(); ?></li>
        </ul>
        <?php if (strlen($db->getDbError())) : ?>
            <h2><?php echo 'Connection Unsuccessful ' . $db->getDbError(); ?></h2>
        <?php else : ?>
            <h2><?php echo 'Connection Successful ' . $db->getDbName(); ?></h2>
        <?php endif; ?>
    </body>
</html>
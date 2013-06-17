<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gpathi
 * Date: 5/10/13
 * Time: 2:12 AM
 * To change this template use File | Settings | File Templates.
 */

if( $_FILES['file']['name'] != "" )
{
    copy( $_FILES['file']['name'], "/var/www/html" ) or
        die( "Could not copy file!");
}
else
{
    die("No file specified!");
}
?>
<html>
<head>
    <title>Uploading Complete</title>
</head>
<body>
<h2>Uploaded File Info:</h2>
<ul>
    <li>Sent file: <?php echo $_FILES['file']['name'];  ?>
    <li>File size: <?php echo $_FILES['file']['size'];  ?> bytes
    <li>File type: <?php echo $_FILES['file']['type'];  ?>
</ul>
</body>
</html>
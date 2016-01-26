<!DOCTYPE html>
<html>
    <head>
        <title> FileBoard </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <form id="createThread" action="createThread.php" method="post" enctype="multipart/form-data">
            <input id="threadTitle" name="threadTitle" type="text" placeholder="Thread Title"/>
            <input id="threadAttachment" name="threadAttachment" type="file"/>
            <input type="submit" value="Create Thread"/>
        </form>
        <div id="postsContainer">
            <?php include 'loadThreads.php'; ?>
        </div>
    </body>
</html>

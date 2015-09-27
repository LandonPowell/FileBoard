<!DOCTYPE html>
<html>
    <head>
        <title> MessageBoard </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <form id="createThread" action="createThread.php" method="post" enctype="multipart/form-data">
            <input id="threadTitle" name="threadTitle" type="text" placeholder="Thread Title"/>
            <br>
            <input id="threadAttachment" name="threadAttachment" type="file"/>
            <br>
            <input type="submit" value="Create Thread"/>
        </form>
        <hr>
        <div id="postsContainer">
            <?php include 'loadThreads.php'; ?>
        </div>
    </body>
</html>

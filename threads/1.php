<!DOCTYPE html>
<html>
    <head>
        <title> bruno's test </title>
        <link rel="stylesheet" type="text/css" href="threadAssets/style.css">
    </head>
    <body>
        <div id="titlePost">
            <h1> bruno's test </h1>
            <div id="titleUpload">
                <a href="fileUploads/2.png">
                    <img src="threadAssets/attachment.png">
                </a>
            </div>
        </div>

        <div id="postBox">
            <form id="postForm" action="threadAssets/post.php" method="post" enctype="multipart/form-data">
                <textarea id="postMessage"  name="postMessage"></textarea>
                <input id="postAttachment"  name="postAttachment" type="file"/>
                <input style="display:none" name="threadID" value="threads/1.php"/>
                <br>
                <input type="submit"/>
            </form>
        </div>

        <div id="userPosts">
                <!--{userPosts}-->
        </div>

    </body>
</html>

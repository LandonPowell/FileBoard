<!DOCTYPE html>
<html>
    <head>
        <title> So is Chrome </title>
        <link rel="stylesheet" type="text/css" href="threadAssets/style.css">
    </head>
    <body>
        <div id="titlePost">
            <h1> So is Chrome </h1>
            <div id="titleUpload">
                <a href="fileUploads/27.ex">
                    <img src="threadAssets/attachment.png">
                </a>
            </div>
        </div>

        <div id="postBox">
            <form id="postForm" action="threadAssets/post.php" method="post" enctype="multipart/form-data">
                <textarea id="postMessage"  name="postMessage"></textarea>
                <input id="postAttachment"  name="postAttachment" type="file"/>
                <input style="display:none" name="threadID" value="threads/25.php"/>
                <br>
                <input type="submit"/>
            </form>
        </div>

        <div id="userPosts">
                <!--{userPosts}-->
        </div>

    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <title> <!--{titleText}--> </title>
        <link rel="stylesheet" type="text/css" href="threadAssets/style.css">
    </head>
    <body>
        <div id="titlePost">
            <h1> <!--{titleText}--> </h1>
            <div id="titleUpload">
                <a href="<!--{uploadURL}-->">
                    <img src="threadAssets/attachment.png">
                </a>
            </div>
        </div>

        <div id="postBox">
            <form id="postForm" action="threadAssets/post.php" method="post" enctype="multipart/form-data">
                <textarea id="postMessage"  name="postMessage"></textarea>
                <input id="postAttachment"  name="postAttachment" type="file"/>
                <input style="display:none" name="threadID" value="<!--{threadID}-->"/>
                <br>
                <input type="submit"/>
            </form>
        </div>

        <div id="userPosts">
                <!--{userPosts}-->
        </div>

    </body>
</html>

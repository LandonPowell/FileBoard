<!DOCTYPE html>
<html>
    <head>
        <title> Nigger! </title>
        <link rel="stylesheet" type="text/css" href="threadAssets/style.css">
    </head>
    <body>
        <div id="titlePost">
            <h1> Nigger! </h1>
            <div id="titleUpload">
                <a href="fileUploads/0.png">
                    <img src="threadAssets/attachment.png">
                </a>
            </div>
        </div>

        <div id="postBox">
            <form id="postForm" action="threadAssets/post.php" method="post" enctype="multipart/form-data">
                <textarea id="postMessage"  name="postMessage"></textarea>
                <input id="postAttachment"  name="postAttachment" type="file"/>
                <input style="display:none" name="threadID" value="threads/0.php"/>
                <br>
                <input type="submit"/>
            </form>
        </div>

        <div id="userPosts">
                <!--{userPosts}-->
                      <div class="singlePost">
                          <a class="postAttachment" href="fileUploads/3.png">
                              <img src="threadAssets//thumb.php?i=fileUploads/3.png">
                          </a>
                          <p class="postMessage">Rate my meme? </p>
                      </div>
                        <div class="singlePost">
                            <p class="postMessage">Oy Vey! It's worse than the holocustard! </p>
                        </div>
        </div>

    </body>
</html>

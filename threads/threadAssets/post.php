<?php
    $threadHTML = file_get_contents("../../" . $_POST["threadID"]);

    $postMessage = htmlspecialchars($_POST["postMessage"]); // These two lines make the
    $postMessage = str_replace("\n", "<br>", $postMessage); // user's message html safe.
    $uploadCounter = file_get_contents("uploadNameCounter.txt");

    $postAttachment = $_FILES["postAttachment"];
    $ext = pathinfo($postAttachment["name"], PATHINFO_EXTENSION);
    $fileURL = "fileUploads/" . $uploadCounter . "." . $ext;

    $blacklist = array("php", "php5", "htm", "html"); // Any malicious extensions go here.

    if ((move_uploaded_file($postAttachment["tmp_name"], "../" . $fileURL)
          or (strlen($postMessage) >= 10))
          and !in_array($ext, $blacklist)) {

        if (file_exists("../" . $fileURL)) { //If the user uploaded a file.
            $postHTML = "<!--{userPosts}-->
                      <div class=\"singlePost\">
                          <a class=\"postAttachment\" href=\"$fileURL\">
                              <img src=\"threadAssets/attachment.png\">
                          </a>
                          <p class=\"postMessage\">$postMessage</p>
                      </div>";
        }
        else { //If the user didn't upload a file.
            $postHTML = "<!--{userPosts}-->
                        <div class=\"singlePost\">
                            <p class=\"postMessage\">$postMessage</p>
                        </div>";
        }

        $threadHTML = str_replace("<!--{userPosts}-->", $postHTML, $threadHTML);
        file_put_contents("uploadNameCounter", intval($uploadCounter) + 1);
        file_put_contents("../../" . $_POST["threadID"], $threadHTML);
        header("Location:../../" . $_POST["threadID"]);
    }
    else {
        echo "<body style=\"background-color: black; color: red;\">
                <h1> Please let me try again. ;~; </h1>
                <p> At least I added your issue to our error log. </p>
              </body>";

        if (in_array($ext, $blacklist)) {
            $errorType = "SKIDDIE TRIED TO HACK ";
        }
        else if (!empty($postMessage)) {
            $errorType = "USER TRIED TO BLANKPOST ";
        }
        else {
            $errorType = "POST UPLOAD ERROR ";
        }

        $errorLog = file_get_contents("../../errorLog.txt");
        $errorLog .= $errorType . date('H:i M.d.Y') . "$fileURL \n";
        file_put_contents("../../errorLog.txt", $errorLog);
    }

?>

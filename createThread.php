<?php
    $threadHTML = file_get_contents("threads/threadAssets/defaultTemplate.php");
    $title = htmlspecialchars($_POST["threadTitle"]);

    $upCount = file_get_contents("threads/threadAssets/uploadNameCounter.txt");     // I use the counter files
    $threadCount = file_get_contents("threadNameCounter.txt");                      // to pick file names.

    $ext = pathinfo($_FILES["threadAttachment"]["name"], PATHINFO_EXTENSION);
    $fileURL = "threads/fileUploads/" . $upCount . "." . $ext;                       // Concatonate vars
    $threadURL = "threads/" . $threadCount . ".php";                                // into file names.

    $blacklist = array("php", "php5", "htm", "html" ); // Any malicious extensions go here.

    if (move_uploaded_file($_FILES["threadAttachment"]["tmp_name"], $fileURL)
          and !in_array($ext, $blacklist)
          and (strlen($title) >= 3)
          and (strlen($title) <= 20)){
        $fileURL =  trim($fileURL, "threads/");                                     // Makes the URL friendly to thread page.
        $threadHTML = str_replace("<!--{titleText}-->", $title,   $threadHTML);     // Adds the title to the thread page.
        $threadHTML = str_replace("<!--{uploadURL}-->", $fileURL, $threadHTML);     // Adds the file URL to the thread page.
        $threadHTML = str_replace("<!--{threadID}-->", $threadURL,$threadHTML);     // Adds the threadURL to the page,
                                                                                    // but it still contains /threads/.

        file_put_contents("threads/threadAssets/uploadNameCounter.txt", intval($upCount) + 1); // I cry a little when a line is 80+ chars
        file_put_contents("threadNameCounter.txt", intval($threadCount) + 1);                  // These lines add 1 to the counters though.

        file_put_contents($threadURL, $threadHTML);                                 // This creates the thread.

        header("Location:" . $threadURL);
    }
    else {
        echo "<body style=\"background-color: #000; color: #F00;\">
                  <h1> ERROR: YOUR FILE UPLOAD WASN'T COMPLETED.</h1>
                  <p style=\"font-family: monospace; font-size: 1.3em;\">
                      Your error and date has been added to the error log. <br>
                      I'm sorry I didn't try hard enough for you. ;~; <br>
                      I promise I'll try harder next time. <br>
                      <a href=\"index.php\">Click here to let me try again. </a>
                      <br> FILE TYPE = $ext
                      <br> TITLE = $title
                  </p>
              </body>";

        $errorLog = file_get_contents("errorLog.txt");
        $errorLog .= "FILE UPLOAD ERROR " . date('H:i M.d.Y') . "$fileURL \n";
        file_put_contents("errorLog.txt", $errorLog);
    }
?>

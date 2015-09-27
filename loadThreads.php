<?php
    $threads = array_reverse(scandir('threads/'));

    foreach ($threads as $thread) {
        $thread = 'threads/' . $thread;

        if (is_file($thread)) {  // Don't print folders as threads.
            echo "<a class=\"threadLink\" href=$thread>";
            echo "<div class=\"singleThread\">";

            $thread_content = file_get_contents($thread);
            $index_1 = strpos($thread_content, "<title>") + 7;                      // Where title text
            $index_2 = strpos($thread_content, "</title>") - $index_1;              // begins and ends.
            echo substr($thread_content, $index_1, $index_2);
            echo "</div>";
            echo "</a>" . PHP_EOL; // PHP_EOL is an end of line.
        }
    }
?>

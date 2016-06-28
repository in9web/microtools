<?php

function fb_comment_count($url)
{
      $json = json_decode(file_get_contents('https://graph.facebook.com/?ids=' . $url));
        return isset($json->$url->comments) ? $json->$url->comments : 0;
}

echo 'Total: '.fb_comment_count('https://developers.facebook.com/docs/plugins/comments').PHP_EOL;
//echo 'Total: '.fb_comment_count('https://www.facebook.com/in9web').PHP_EOL;

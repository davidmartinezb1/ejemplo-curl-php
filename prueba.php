<?php
    $res="http://juniorfc.co/wp-content/uploads/2016/09/IMG_8237.jpg";
    $uri=explode('/', $res);

$filename=$uri['7'];
    unset($uri['0']);
    unset($uri['1']);
    unset($uri['2']);
    unset($uri['3']);
    unset($uri['4']);
    unset($uri['5']);
    unset($uri['6']);


    print $filename;

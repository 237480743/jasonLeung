<?php
    //文件代理，解决跨域问题
    @$data = file_get_contents($_GET["url"]);
    echo $data;

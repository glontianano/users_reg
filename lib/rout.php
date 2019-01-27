<?php



function router($url, $controller = [])
{

    if(isset($_SERVER['PATH_INFO'])){
        if(strpos($url,"{")  !== false){
            $paths = explode("/",$_SERVER['PATH_INFO']);
            $urls = explode('/',$url);

            if($paths[1]==$urls[1]){
                include __ROOT__ . '/controller/' . $controller[0];
                $function = $controller[1];
                $id = $paths[2];
                $function($id);
            }


        }
    }

    //print_r($_SERVER);
    if ($url == $_SERVER['PATH_INFO']) {

        include __ROOT__ . '/controller/' . $controller[0];
        $function = $controller[1];
        $function();
    }
}


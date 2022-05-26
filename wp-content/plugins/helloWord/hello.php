<?php
/* plugin name: hello word
plugin URI: github.com
author: yousra benslimane
author URI: 
version: 0.1
*/

add_action('the_content', 'sey_hello');

function sey_hello($content){
    return $content ="<h1> hello Yousra </h1>";
    
}
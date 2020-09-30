<?php

function postCount(){
    return App\Post::count();
    }

function byTitle(){

    $cookie = cookie('order', 'title', 5);
    return response('Hello World')->cookie($cookie);
}

function byCreated(){
    $cookie = cookie('order', 'cas', 5);
    return response('Hello World')->cookie($cookie);
}
function byUpdate(){
    $cookie = cookie('order', 'asf', 5);
    return response('Hello World')->cookie($cookie);
}

?>

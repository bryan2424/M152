<?php
require_once './model/backend.php';
function showListPosts($data) {
    $post = '';
    foreach ($data as $value) {
        $post .= '<div class="divImgPosts"><img class="imagePosts" src="./upload/'.$value['nomMedia'].'"></div>';
        $post .= '<br>';
        $post .= '<h5 id="commentaire">' . $value['commentaire'] . '</h5>';
        $post .= '<p class="float-right">' . $value['datePost'] . '</p>';
        $post .= '<br>';
        $post .= '<hr>';
    }
    return $post;
}

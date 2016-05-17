<?php

require_once '../model/accountModel.php';

function user_avatar($user_id, $user_gender) {

    $avatar_path = '/content/img/avatars/';
    $avatar_class = 'user-avatar ';

    if (file_exists('../content/img/avatars/'.$user_id.'.jpg')) {
        $avatar_class .= 'user-avatar-custom';
        $avatar_path .= $user_id.'.jpg';
    } else {
        $avatar_class .= 'user-avatar-default';
        if ($user_gender == 'Mrs') {
            $avatar_path .= 'avatar_default_woman.png';
        } else {
            $avatar_path .= 'avatar_default_man.png';
        }
    }
    return '<img class="'.$avatar_class.'" src="'.$avatar_path.'" alt="" />';
}

require_once '../view/profileView.php';

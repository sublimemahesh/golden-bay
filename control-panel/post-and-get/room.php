<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

if (isset($_POST['create'])) {

    $ROOM = new Room(NULL);
    $VALID = new Validator();

    $ROOM->title = $_POST['title'];
    $ROOM->short_description = $_POST['short_description'];
    $ROOM->description = $_POST['description'];
    $ROOM->no_of_rooms = $_POST['no_of_rooms'];
    $ROOM->price = $_POST['price'];

    $dir_dest = '../../upload/room/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 361;
        $handle->image_y = 250;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $ROOM->image_name = $imgName;
    $ROOM->create();
    $result = ["id" => $ROOM->id];
    echo json_encode($result);
    exit();
}

if (isset($_POST['update'])) {
    $dir_dest = '../../upload/room/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST ["oldImageName"];
        $handle->image_x = 361;
        $handle->image_y = 250;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $ROOM = new Room($_POST['id']);

    $ROOM->image_name = $_POST['oldImageName'];
    $ROOM->title = $_POST['title'];
    $ROOM->short_description = $_POST['short_description'];
    $ROOM->description = $_POST['description'];
    $ROOM->no_of_rooms = $_POST['no_of_rooms'];
    $ROOM->price = $_POST['price'];
    $ROOM->update();


    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}


if (isset($_POST['save-data'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $ROOM = Room::arrange($key, $img);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
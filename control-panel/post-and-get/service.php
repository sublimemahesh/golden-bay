<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

if (isset($_POST['create'])) {

    $SERVICE = new Service(NULL);
    $VALID = new Validator();

    $SERVICE->title = $_POST['title'];
    $SERVICE->short_description = $_POST['short_description'];
    $SERVICE->description = $_POST['description'];

    $dir_dest = '../../upload/service/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 570;
        $handle->image_y = 450;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $SERVICE->image_name = $imgName;
    $SERVICE->create();

    $result = ["id" => $SERVICE->id];
    echo json_encode($result);
    exit();
}

if (isset($_POST['update'])) {
    $dir_dest = '../../upload/service/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST ["oldImageName"];
        $handle->image_x = 570;
        $handle->image_y = 450;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $SERVICE = new Service($_POST['id']);

    $SERVICE->image_name = $_POST['oldImageName'];
    $SERVICE->title = $_POST['title'];
    $SERVICE->short_description = $_POST['short_description'];
    $SERVICE->description = $_POST['description'];

    $SERVICE->update();
    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

if (isset($_POST['save-data'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $SERVICE = Service::arrange($key, $img);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
<?php
// Small helper utilities for simple input validation and file upload checks
function safe_int($val){
    return intval($val);
}

function validate_image_upload(array $file){
    // returns array: [ok:boolean, filename:string, error:string]
    if(!isset($file['name']) || $file['error'] !== UPLOAD_ERR_OK){
        return [false, '', 'No file uploaded or upload error'];
    }

    $allowed_ext = ['png','jpg','jpeg','gif'];
    $name = basename($file['name']);
    $tmp = $file['tmp_name'];
    $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));

    if(!in_array($ext, $allowed_ext, true)){
        return [false, '', 'Invalid file extension'];
    }

    $size = filesize($tmp);
    if($size === false || $size > 5 * 1024 * 1024){ // 5MB limit
        return [false, '', 'File too large'];
    }

    $img = @getimagesize($tmp);
    if($img === false){
        return [false, '', 'Uploaded file is not a valid image'];
    }

    // generate a safer filename to avoid collisions / path issues
    $safeName = time() . '_' . preg_replace('/[^A-Za-z0-9_\-\.]/', '_', $name);
    return [true, $safeName, ''];
}

?>

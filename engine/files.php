<?php
/**
 * @param string $destination
 * @param string $attributeName
 */

function uploadFile(string $destination, string $attributeName = 'file'){
    move_uploaded_file(
        $_FILES[$attributeName]['tmp_name'],
        $destination
    );
}

/**
 * @param string $type
 * @param int $size
 * @return bool
 */
function validateImage(string $type, int $size): bool {
   $permittedTypes = ['image/gif', 'image/png', 'image/jpeg'];
   if (!in_array($type, $permittedTypes)){
       return false;
   }
   elseif ($size > 512000){
       return false;
   }
   return true;
}
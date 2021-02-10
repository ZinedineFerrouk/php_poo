<?php

function uploadValid($errors,$key,$file,$sizeMax = 2000000,$extensions = array( '.jpg','.jpeg', '.png'),$extensionsmime = array('image/jpeg','image/png','image/jpg'), $empty = true)
{
    if(!empty($file)) {
        if ($file['error'] > 0) {
            if ($file['error'] != 4) {
              $errors[$key] = 'Problem: ' . $file['error'] . '<br />';
            }else {
            if($empty) {
                  $errors[$key] = 'Aucun fichier n\'a été téléchargé';
            }
            }
        } else {
            $file_name = $file['name']; // le nom du fichier
            $file_size = $file['size']; // la taille ( peu fiable depend du navigateur)
            $file_tmp  = $file['tmp_name'];  // le chemin du fichier temporaire
            $file_type = $file['type'];  // type MIME (peu fiable, depend du navigateur)

            // Taille du fichier
            //$sizeMax = 2000000;
            if($file_size > $sizeMax || filesize($file_tmp) > $sizeMax){ //limite le fichier a 2mo
                $errors[$key] = 'Le fichier est trop gros (max '. $sizeMax/1000000 .'mo)';
            }
            else {
                    $i_point = strrpos($file_name,'.');
                    $fileExtension = substr($file_name, $i_point ,strlen($file_name) - $i_point);

                    if (!in_array($fileExtension, $extensions)) {
                        $errors[$key] = 'Veuillez télécharger une image de type jpg,jpeg ou png';
                    } else {

                        // alternative, sécurité +++++
                        $finfo = finfo_open(FILEINFO_MIME_TYPE); // return mime type ala mimetype extension
                        $mime = finfo_file($finfo, $file_tmp);
                        finfo_close($finfo);

                        if (!in_array($mime, $extensionsmime)) {
                            $errors[$key] = 'Veuillez télécharger une image de type jpg,jpeg ou png';
                        }
                    }
                }
            }
    }
    return $errors;
}

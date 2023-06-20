<?php
function file_encod($file_path, $data)
{
    file_put_contents($file_path, json_encode($data, JSON_PRETTY_PRINT));
}


function file_decod($file)
{
    return json_decode(file_get_contents($file), true);
}
?>
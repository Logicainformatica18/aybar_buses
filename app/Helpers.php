<?php

function datebirth($day, $month, $year)
{
    //       datebirth
    if ($day < 10) {
        $day = "0" . $day;
    }
    if ($month < 10) {
        $month = "0" . $month;
    }
    $datebirth =    $year . "-" . $month . "-" . $day;
    return $datebirth;
}
function fileStore($photo, $directory)
{
    if ($photo != "") {
        $uniqueId = uniqid(); // Genera un identificador único
    
       
        //get imageName
        $imageName =  time() . "_" .$uniqueId. $photo->getClientOriginalName();
        //move imageFile
        $photo->move($directory, $imageName);
        return    $imageName;
    }
}
function fileUpdate($photo, $directory)
{
    fileDestroy($photo, $directory);
    return fileStore($photo, $directory);
   
   
}
function fileDestroy($photo, $directory)
{
    try {
        $image_path = public_path() . '/' . $directory . '/' . $photo;
        unlink($image_path);
    } catch (\Exception $e) {
               //   return  $e->getMessage();
               return "<div style='background-color:red'> ERROR </div>";
    }
}
function saludo(){
    return "hola";
}

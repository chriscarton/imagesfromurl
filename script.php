<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);

$url = 'data.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$projects = json_decode($data); // decode the JSON feed

if(!empty($projects)):
    foreach($projects as $project):
        if(!empty($project->medias)){
            foreach($project->medias as $media):
                if($media->type==="image"){

                    $url = $media->src;

                    $explode = explode('/',$url);

                    $name = end($explode);

                    if(!copy($url, './images/'.$name)){
                        echo 'pas de copie';
                    }

                    echo '<br>';
                }
            endforeach;
        }
    endforeach;
endif;
?>
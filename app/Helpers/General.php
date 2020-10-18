<?php
#################################################################################
/**
 * @todo This file was created by Ibrahim Sadour 06-10-2020
 * @todo here a defined method is created
 * @todo I can use this method throughout the website.
 */
##################################################################################

use Illuminate\Support\Facades\Config;



/**
 * get_languages
 *@todo this to Select all active languages
 * @todo Selection () this is scope (created in the Languages models)
 * @todo active () this a global scope to display an active Languages with Method (where ('active', 1))
 * @return void
 */
function get_languages(){

    return \App\Models\Language::active() -> Selection() -> get();
}

/**
 * get_default_lang
 * @todo this method package the current language
 * @return void
 */
function get_default_lang(){
  return   Config::get('app.locale');
}


/**
 * uploadImage
 * @todo made this method for inserting the images
 * @param  mixed $folder
 * @param  mixed $image
 * @return void
 */
function uploadImage($folder, $image)
{
    $image->store('/', $folder);
    $filename = $image->hashName();
    $path = 'images/' . $folder . '/' . $filename;
    return $path;
}



/**
 * uploadVideo
 * @todo made this method for inserting the video
 * @param  mixed $folder
 * @param  mixed $video
 * @return void
 */
function uploadVideo($folder, $video)
{
    $video->store('/', $folder);
    $filename = $video->hashName();
    $path = 'video/' . $folder . '/' . $filename;
    return $path;
}

/**
 * define
 * @todo  PAGINATION_COUNT: a fixed variable to show only 10 items around the page
 */
define('PAGINATION_COUNT',10); 

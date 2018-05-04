<?php
//application/models/Pics_model.php
class Pics_model extends CI_Model {
    
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pics_model');
    }

public function get_pics(){    
      
    $api_key = 'eiowuqr9852413355dsjfdskjaupoua4ccbdsasjfs';
    //$getTagName = tagname(); 
    $tags = 'Cow,Cows';
    

    $perPage = 25;
    $url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search';
    $url.= '&api_key=' . $api_key;
    $url.= '&tags=' . $tags;
    $url.= '&per_page=' . $perPage;
    $url.= '&format=json';
    $url.= '&nojsoncallback=1';

    $response = json_decode(file_get_contents($url));
    $pics = $response->photos->photo;

    /*
    echo "<pre>";
    echo var_dump($response);
    echo "</pre>";
    die;
    */

     foreach($pics as $pic){

    $size = 'm';
    $photo_url = '
    http://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';

    echo "<img title='" . $pic->title . "' src='" . $photo_url . "' />";
 
}//end get_pics
     
     
 }
}// END News_model

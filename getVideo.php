function getVideoImagePost($youtubeimageurl, $imageselection){

     

        if($imageselection == "youtube"){
        echo "image is youtube";
        $image = $youtubeimageurl; 
        }

    elseif($imageselection == "other"){

        // get the image object from acf
        $imageObject = get_field('image');

        //get the right size image from image object
        $image = $imageObject['sizes']['large'];
        

    }

    else {

        $image = "http://placehold.it/1800x1125";
    }
    

    return $image; 

}
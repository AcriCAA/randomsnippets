<?php
    /**
     * @package csh-coresite
     */
    ?>


<?php 
    
    $fieldNameArray = array();
    
    

    $initialNumberOfColumns = get_sub_field('number_of_columns');

    

    $numberOfColumns = normalizeColumns($initialNumberOfColumns);


    $colWidth = calculateColWidth($numberOfColumns);

    // opening row for the x number of columns

    echo '<div class="row area-start flex ag-eqht">';

    for ($i = 1;$i <= $numberOfColumns;$i++){




        $fieldNameArray = createFieldNameArray($i); 



        
        

        drawColumn($colWidth, $fieldNameArray);
        

    }

    // closing row
    echo '</div>'; 

    ?>


    

<?php 


function normalizeColumns($numberOfColumns) {
    // Limit max no. of columns to 4
    if($numberOfColumns > 4) {

        $numberOfColumns = 4; 
    }

    // limit min number of columns to 2
    if($numberOfColumns < 2){

        $numberOfColumns = 2; 
    }


    return $numberOfColumns;

}


function calculateColWidth($numberOfColumns){

    $gridWidth = 12; 
    $colwidth = $gridWidth/$numberOfColumns; 

    return $colwidth; 


}


function drawColumn($colwidth, $fieldNameArray) {

    // echo "Draw Column function";
    // echo '<pre>';
    // print_r($colwidth);
    // print_r($fieldNameArray);
    // echo '</pre>';

    // the imageobject variable holds the Wordpress Image Object and size grabs the user selected WP Size.  The $image variable combines those two.  

    $imageObject = get_sub_field($fieldNameArray['imageFieldName']);
    
    // echo '<pre>';
    // var_dump($imageObject);
    // echo '</pre>';

    $imagesize = get_sub_field($fieldNameArray['imageSize']);

    //  echo '<pre>';
    // var_dump($imagesize);
    // echo '</pre>';

    $header = get_sub_field($fieldNameArray['headerContent']);
    $paragraphContent = get_sub_field($fieldNameArray['paragraphContent']);
    $buttonLink = get_sub_field($fieldNameArray['buttonLink']);
    $buttonText = get_sub_field($fieldNameArray['buttonText']);
    
    

    // set imagesize to medium if user does not set one 
    if (empty($imagesize)){

        $imageSize = "medium";
    }

    
    //  echo '<pre>';
    // var_dump($imagesize);
    // echo '</pre>';

    // set the image to be loaded based on the size 
    $image = $imageObject['sizes'][$imagesize];


        echo '<div class="col-xs-12 col-sm-'. $colwidth . ' col-md-' . $colwidth . '">
            <div class="eqht-wrapper gray-border">
                <div class="eqht-wrapper-body">
                    
                    <a href="#">';
                       
                        
                        if( !empty($image)) {
                        echo '<img class="img-responsive" src="' . $image . '" />';
                        }
                        
                    echo '</a>
                    <div class="pad-10">
                    <h3>' . $header . '</h3>
                    <p class="top-margin-10 bottom-margin-10">' .
                        $paragraphContent .
                    '</p>
                      
                      </div>
                </div>';

                  
    

            
            if( !empty($buttonLink) && !empty($buttonText)){
                                            
                echo '<p class="text-center"><a href="' 
                . $buttonLink . 
                '" class="btn btn-learn-more-ag">' 
                . $buttonText .
                '</a></p>';       

            }
                    
        echo '</div></div>';


    }


/// appends the row number to the field name so that we are grabbing the 
    // right value from acf
function createFieldNameArray($col) {

     
     $colString = "$col"; 

    
// set default field names
    $imageFieldName = "image_content";
    $headerContent = "header_content";
    $paragraphContent = "paragraph_content";
    $buttonLink = "button_link";
    $buttonText = "button_text";
    
// image size is a constant for all columns so it doesn't need to have the number of the column appended to it like the other variables 
    $imageSize = "image_size";



    $imageFieldName.= $colString; 
    $headerContent.= $colString; 
    $paragraphContent.= $colString; 
    $buttonLink.= $colString; 
    $buttonText.= $colString; 

        $fieldArray = array(
                "imageFieldName" => $imageFieldName,
                "headerContent" => $headerContent,
                "paragraphContent" => $paragraphContent,
                "buttonLink" => $buttonLink,
                "buttonText" => $buttonText, 
                "imageSize" => $imageSize
                ); 



    return $fieldArray; 



}       
                      



?>
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

    $offsetLeft = false; 

    $offsetRight = false; 

    // opening row for the x number of columns

    echo '<div class="row area-start flex ag-eqht">';

    for ($i = 1;$i <= $numberOfColumns;$i++){



        // get an array of field names based on the current column we are working on
        $fieldNameArray = createFieldNameArray($i); 

        // get the image object from acf
        $imageObject = get_sub_field($fieldNameArray['imageFieldName']);

        //get the right size image from image object
        $image = getImage($imageObject);

        //get the image alt text from acf
        $alt = $imageObject['alt'];

        // get header text from acf
        $header = get_sub_field($fieldNameArray['headerContent']);

        // get the paragraph text from acf 
        $paragraphContent = get_sub_field($fieldNameArray['paragraphContent']);

        // get the button link from acf
        $buttonLink = get_sub_field($fieldNameArray['buttonLink']);

        // get the button text from acf; 
        $buttonText = get_sub_field($fieldNameArray['buttonText']);




        
        // print column name in html comments
        echo '<!-- Column ' . $i . '-->';

        $offsetLeft = determineLeftOffset($i);
        $offsetRight = determineRightOffset($numberOfColumns, $i);

        echo '<!-- Offset left is  ' . $offsetLeft . '-->';
        echo '<!-- Offset right is  ' . $offsetRight . '-->';

        // echo the html for the current column by passing in field values 
        drawColumn($offsetLeft, $offsetRight, $colWidth, $image, $alt, $header, $paragraphContent, $buttonLink, $buttonText);
        

    }

    // closing row
    echo '</div>'; 

    ?>


    

<?php 


function determineLeftOffset($i){

    // if there are two columns offsetLeft and offsetRight are both true
    if($i == 1){

        return true; 

    }

    else 
        return false; 


}

function determineRightOffset($numberOfColumns, $i){


    //if there are 2 columns then offset 
    if($numberOfColumns == 2)
        return true; 
  

    if($numberOfColumns == 3 && $i == 3)
        return true; 
 

    if($numberOfColumns == 4 && $i == 4)
        return true; 


}



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

function getImage($imageObject) {


    // Set col values to compare below. User can choose 2, 3, or 4 columns which corresponds to col-sm-6, col-sm-4, and col-sm-3 respectively 

    // two columns 
    $colsmsix = 6; 

    // three columns
    $colsmthree = 4; 

    // four columns 
    $colsmfour = 3; 


     // initilize image size variable to medium 
    $imagesize = "medium";

    // set the image to be loaded based on the number of columns 
    if($colwidth == $colsmsix) {
        $imagesize = "large";
    }
    elseif ($colwidth == $colsmthree) {
        $imagesize = "medium";
    }
    elseif ($colwidth == $colsmfour) {
        $imagesize = "medium";
    }

    // set the image url using image size 
     $image = $imageObject['sizes'][$imagesize];


     return $image;



}



function drawColumn($offsetLeft, $offsetRight, $colwidth, $image, $alt, $header, $paragraphContent, $buttonLink, $buttonText) {
        
        // echo this div with col-lg-offset-2 if it is the first column 
        if ($offsetLeft == true)
            echo '<div class="col-lg-offset-2 col-xs-12 col-sm-'. $colwidth . ' col-md-' . $colwidth . '">';
        
        // echo this div with col-lg-offset-right-2 if it is the last column 
        elseif ($offsetRight == true)
            echo '<div class="col-lg-offset-right-2 col-xs-12 col-sm-'. $colwidth . ' col-md-' . $colwidth . '">';
        
        // echo just a regular column 
        else 
            echo '<div class="col-xs-12 col-sm-'. $colwidth . ' col-md-' . $colwidth . '">';

        // the rest of the column code 
        echo   '<div class="eqht-wrapper gray-border">
                <div class="eqht-wrapper-body">
                    
                    <a href="' . $buttonLink . '">';

        // image 
                        if( !empty($image)) {
                        echo '<img class="img-responsive" src="' . $image . '" alt="' . $alt . '" />';
                        }
                        
                    echo '</a>
                    

                    <div class="pad-10">
                        <h3>' . $header . '</h3>
                        <p class="top-margin-10 bottom-margin-10">' .
                            $paragraphContent .
                        '</p>
                      
                    </div>
                </div>';

                  
    

            // buttons
            if( !empty($buttonLink) && !empty($buttonText)){
                                            
                echo '<p class="text-center"><a href="' 
                . $buttonLink . 
                '" class="btn btn-learn-more-ag">' 
                . $buttonText .
                '</a></p>';       

            }

        // closing divs          
        echo '</div></div>';


    }


/// appends the row number to the field name so that we are grabbing the right value from acf
function createFieldNameArray($col) {

     //column number e.g. in three columns, the first column is "1", second is "2", third is "3"
     $colString = "$col"; 

    
    // set the base name string for acf field names
    $imageFieldName = "image_content";
    $headerContent = "header_content";
    $paragraphContent = "paragraph_content";
    $buttonLink = "button_link";
    $buttonText = "button_text";
    
// image size is a constant for all columns so it doesn't need to have the number of the column appended to it like the other variables 
    $imageSize = "image_size";


    // create unique column name by appending the column number to the base field name string
    $imageFieldName.= $colString; 
    $headerContent.= $colString; 
    $paragraphContent.= $colString; 
    $buttonLink.= $colString; 
    $buttonText.= $colString; 

    //load the field values into an array 
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
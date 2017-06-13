//////////////////////////////////////////////////////////////////
// Get the youtube share code alone from a share url
/////////////////////////////////////////////////////////////////

        function parseShareCode($youtubeurl){

            
        	//we wan to work backwards from the youtube url to grab the code, it is easier to reverse it so we only have to find the one / 
        	//for example: 
        	//https://youtu.be/1nV2P8qN3Cw
        	//becomes
        	// wC3Nq8P2Vn1/eb.utuoy//:sptth
        	// so we loop through:  "w C 3 N q 8 P 2 V n 1" and stop at "/"



        	 //check if there is an "&feature" in the url and remove it
	         //https://www.youtube.com/watch?v=bzDR0DQjG04&feature=youtu.be
			$findme = "&"; 
			$checkforamp = $youtubeurl;
			$pos = strpos($checkforamp, $findme);

			if($pos !== false){

		    
			    $cleanyoutubeurl = cleanURL($youtubeurl, $pos);

	            $reversedurl = strrev($cleanyoutubeurl);

	            //first check for the "="" sign just in case used the full url
	            $findme = "=";
	            $pos = strpos($reversedurl, $findme);

	 			if($pos !== false){


	             $cleanyoutubeurl = cleanURL($reversedurl, $pos);
		        

		         } // close second else


            } // close first else


            //if there is no "=" in the string look for the first "/"
            else {

			$reversedurl = strrev($youtubeurl);
            // find the / 
            $findme  = '/';
            $pos = strpos($reversedurl, $findme);

            $cleanyoutubeurl = cleanURL($reversedurl, $pos);


       	 	} // close else
            
          

            //reverse the string back so you have the correct code
            $filename = strrev($cleanyoutubeurl);  



            return $filename;    

        }


//////////////////////////////////////////////////////////////////
// This function is use by parseShareCode() to cleansa url 
// depending on the position of the character you are looking for
/////////////////////////////////////////////////////////////////

     function cleanURL($url, $pos){

     	 		//convert the  url to an array 
	            $urlarray = str_split($url);

	            //count the length of the url array 
	            $arrayLength = count($urlarray);

	            $filenamearray = array();

	            //push the characters from the urlarray to the filename array until you reach the / 
	            for ($i = 0; $i < $pos; $i++) {
	                array_push($filenamearray, $urlarray[$i]);
	            }


	        $newurl = implode($filenamearray);

	 
	        return $newurl;


     }

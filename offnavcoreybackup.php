<!-- drawer.css -->

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">-->
<style>
    .drawer-open {
        overflow: hidden!important
    }   
    .drawer-nav {
        position: fixed;
        z-index: 2;
        top: 0;
        overflow: hidden;
        width: 16.25rem;
        height: 100%;
        color: #222;
        background-color: #fff
    }    
    .drawer-brand {
        font-size: 1.5rem;
        font-weight: 700;
        line-height: 3.75rem;
        display: block;
        padding-right: .75rem;
        padding-left: .75rem;
        text-decoration: none;
        color: #222
    }    
    .drawer-menu {
        margin: 0;
        padding: 0;
        list-style: none
    }
    
    .drawer-menu-item {
        font-size: 1rem;
        display: block;
        padding: .75rem;
        text-decoration: none;
        color: #222
    }
    
    .drawer-menu-item:hover {
        text-decoration: underline;
        color: #555;
        background-color: transparent
    }
    
    .drawer-overlay {
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        display: none;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, .2)
    }
    
    .drawer-open .drawer-overlay {
        display: block
    }
    
    .drawer--top .drawer-nav {
        top: -100%;
        left: 0;
        width: 100%;
        height: auto;
        max-height: 100%;
        -webkit-transition: top .6s cubic-bezier(.19, 1, .22, 1);
        transition: top .6s cubic-bezier(.19, 1, .22, 1)
    }
    
    .drawer--top.drawer-open .drawer-nav {
        top: 0
    }
    
    .drawer--top .drawer-hamburger,
    .drawer--top.drawer-open .drawer-hamburger {
        right: 0
    }
    
    .drawer--left .drawer-nav {
        left: -16.25rem;
        -webkit-transition: left .6s cubic-bezier(.19, 1, .22, 1);
        transition: left .6s cubic-bezier(.19, 1, .22, 1)
    }
    
    .drawer--left .drawer-hamburger,
    .drawer--left.drawer-open .drawer-nav,
    .drawer--left.drawer-open .drawer-navbar .drawer-hamburger {
        left: 0
    }
    
    .drawer--left.drawer-open .drawer-hamburger {
        left: 16.25rem
    }
    
    .drawer--right .drawer-nav {
        right: -16.25rem;
        -webkit-transition: right .6s cubic-bezier(.19, 1, .22, 1);
        transition: right .6s cubic-bezier(.19, 1, .22, 1)
    }
    
    .drawer--right .drawer-hamburger,
    .drawer--right.drawer-open .drawer-nav,
    .drawer--right.drawer-open .drawer-navbar .drawer-hamburger {
        right: 0
    }
    
    .drawer--right.drawer-open .drawer-hamburger {
        right: 16.25rem
    }
    
    .drawer-hamburger {
        position: fixed;
        z-index: 4;
        top: 0;
        display: block;
        box-sizing: content-box;
        width: 3rem;
        padding: 0;
        padding: 18px 1rem 30px;
        -webkit-transition: all .6s cubic-bezier(.19, 1, .22, 1);
        transition: all .6s cubic-bezier(.19, 1, .22, 1);
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
        border: 0;
        outline: 0;
        background-color: transparent;
    }
    
    .drawer-hamburger:hover {
        cursor: pointer;
        background-color: transparent;
    }
    
    .drawer-hamburger-icon {
        position: relative;
        display: block;
        margin-top: 9px;
        -webkit-transform: unset;
        transform: unset;
    }
    
    .drawer-hamburger-icon,
    .drawer-hamburger-icon:after,
    .drawer-hamburger-icon:before {
        width: 100%;
        height: 2px;
        -webkit-transition: all .6s cubic-bezier(.19, 1, .22, 1);
        transition: all .6s cubic-bezier(.19, 1, .22, 1);
        background-color: #222
    }
    
    .drawer-hamburger-icon:after,
    .drawer-hamburger-icon:before {
        position: absolute;
        top: -9px;
        left: 0;
        content: " ";
    }
    
    .drawer-hamburger-icon:after {
        top: 9px;
    }
    
    .drawer-open .drawer-hamburger-icon {
        background-color: transparent
    }
    
    .drawer-open .drawer-hamburger-icon:after,
    .drawer-open .drawer-hamburger-icon:before {
        top: 0
    }
    
    .drawer-open .drawer-hamburger-icon:before {
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg)
    }
    
    .drawer-open .drawer-hamburger-icon:after {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }
    
    .sr-only {
        position: absolute;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        width: 1px;
        height: 1px;
        margin: -1px;
        padding: 0;
        border: 0
    }
    
    .sr-only-focusable:active,
    .sr-only-focusable:focus {
        position: static;
        overflow: visible;
        clip: auto;
        width: auto;
        height: auto;
        margin: 0
    }
    
    .drawer--sidebar,
    .drawer--sidebar .drawer-contents {
        background-color: #fff
    }
    
    @media (min-width:64em) {
        .drawer--sidebar .drawer-hamburger {
            display: none;
            visibility: hidden
        }
        .drawer--sidebar .drawer-nav {
            display: block;
            -webkit-transform: none;
            transform: none;
            position: fixed;
            width: 12.5rem;
            height: 100%
        }
        .drawer--sidebar.drawer--left .drawer-nav {
            left: 0;
            border-right: 1px solid #ddd
        }
        .drawer--sidebar.drawer--left .drawer-contents {
            margin-left: 12.5rem
        }
        .drawer--sidebar.drawer--right .drawer-nav {
            right: 0;
            border-left: 1px solid #ddd
        }
        .drawer--sidebar.drawer--right .drawer-contents {
            margin-right: 12.5rem
        }
        .drawer--sidebar .drawer-container {
            max-width: 48rem
        }
    }
    
    @media (min-width:75em) {
        .drawer--sidebar .drawer-nav {
            width: 16.25rem
        }
        .drawer--sidebar.drawer--left .drawer-contents {
            margin-left: 16.25rem
        }
        .drawer--sidebar.drawer--right .drawer-contents {
            margin-right: 16.25rem
        }
        .drawer--sidebar .drawer-container {
            max-width: 60rem
        }
    }
    
    .drawer--navbarTopGutter {
        padding-top: 3.75rem
    }
    
    .drawer-navbar .drawer-navbar-header {
        border-bottom: 1px solid #ddd;
        background-color: #fff
    }
    
    .drawer-navbar {
        z-index: 3;
        top: 0;
        width: 100%
    }
    
    .drawer-navbar--fixed {
        position: fixed
    }
    
    .drawer-navbar-header {
        position: relative;
        z-index: 3;
        box-sizing: border-box;
        width: 100%;
        height: 3.75rem;
        padding: 0 .75rem;
        text-align: center
    }
    
    .drawer-navbar .drawer-brand {
        line-height: 3.75rem;
        display: inline-block;
        padding-top: 0;
        padding-bottom: 0;
        text-decoration: none
    }
    
    .drawer-navbar .drawer-brand:hover {
        background-color: transparent
    }
    
    .drawer-navbar .drawer-nav {
        padding-top: 3.75rem
    }
    
    .drawer-navbar .drawer-menu {
        padding-bottom: 7.5rem
    }
    
    @media (min-width:64em) {
        .drawer-navbar {
            height: 3.75rem;
            border-bottom: 1px solid #ddd;
            background-color: #fff
        }
        .drawer-navbar .drawer-navbar-header {
            position: relative;
            display: block;
            float: left;
            width: auto;
            padding: 0;
            border: 0
        }
        .drawer-navbar .drawer-menu--right {
            float: right
        }
        .drawer-navbar .drawer-menu li {
            float: left
        }
        .drawer-navbar .drawer-menu-item {
            line-height: 3.75rem;
            padding-top: 0;
            padding-bottom: 0
        }
        .drawer-navbar .drawer-hamburger {
            display: none
        }
        .drawer-navbar .drawer-nav {
            position: relative;
            left: 0;
            overflow: visible;
            width: auto;
            height: 3.75rem;
            padding-top: 0;
            -webkit-transform: translateZ(0);
            transform: translateZ(0)
        }
        .drawer-navbar .drawer-menu {
            padding: 0
        }
        .drawer-navbar .drawer-dropdown-menu {
            position: absolute;
            width: 16.25rem;
            border: 1px solid #ddd
        }
        .drawer-navbar .drawer-dropdown-menu-item {
            padding-left: .75rem
        }
    }
    
    .drawer-dropdown-menu {
        display: none;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        padding: 0;
        background-color: #fff
    }
    
    .drawer-dropdown-menu>li {
        width: 100%;
        list-style: none
    }
    
    .drawer-dropdown-menu-item {
        line-height: 3.75rem;
        display: block;
        padding: 0;
        padding-right: .75rem;
        padding-left: 1.5rem;
        text-decoration: none;
        color: #222
    }
    
    .drawer-dropdown-menu-item:hover {
        text-decoration: underline;
        color: #555;
        background-color: transparent
    }
    
    .drawer-dropdown.open>.drawer-dropdown-menu {
        display: block
    }
    
    .drawer-dropdown .drawer-caret {
        display: inline-block;
        width: 0;
        height: 0;
        margin-left: 4px;
        -webkit-transition: opacity .2s ease, -webkit-transform .2s ease;
        transition: opacity .2s ease, -webkit-transform .2s ease;
        transition: transform .2s ease, opacity .2s ease;
        transition: transform .2s ease, opacity .2s ease, -webkit-transform .2s ease;
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
        vertical-align: middle;
        border-top: 4px solid;
        border-right: 4px solid transparent;
        border-left: 4px solid transparent
    }
    
    .drawer-dropdown.open .drawer-caret {
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg)
    }
    
    .drawer-container {
        margin-right: auto;
        margin-left: auto
    }
    
    @media (min-width:64em) {
        .drawer-container {
            max-width: 60rem
        }
    }
    
    @media (min-width:75em) {
        .drawer-container {
            max-width: 70rem
        }
    }
    /*!------------------------------------*\
    Right
\*!------------------------------------*/
    
    .drawer-nav {
        position: fixed;
        z-index: 10000000;
        top: 0;
        overflow: hidden;
        width: 250px;
        height: 100%;
        color: #222;
        background-color: #fff;
    }
    
    .drawer--right .drawer-nav {
        right: -300px;
        -webkit-transition: right .6s cubic-bezier(0.190, 1.000, 0.220, 1.000);
        transition: right .6s cubic-bezier(0.190, 1.000, 0.220, 1.000);
        padding: 5px 5px 0 5px;
    }
    
    .drawer--right .drawer-nav ul li a {
        font-family: Source Sans Pro;
    }
    
    .drawer--right .drawer-nav ul li {
        list-style-type: none;
        border-bottom: 1px dotted #999;
        width: 90%;
    }
    
    .drawer--right .drawer-hamburger,
    .drawer--right.drawer-open .drawer-navbar .drawer-hamburger {
        right: 25px;
    }
    
    .drawer--right.drawer-open .drawer-hamburger {
        right: 250px;
        top: 30px !important;
    }
    
    #main > div > button.drawer-hamburger {
        top: 15px;
    }
    
    .drawer-hamburger-icon,
    .drawer-hamburger-icon:after,
    .drawer-hamburger-icon:before {
        background-color: #004982;
    }
    
    ul.drawer-menu {
        padding-bottom: 30px;
    }
    
    .insite-nav {
        position: fixed;
        top: 4px;
        right: 18px;
        width: auto;
        height: auto;
        z-index: 10000;
        color: #004982;
        font-size: 10px;
        font-family: 'Source Sans Pro';
        text-transform: uppercase;
        /*	background:rgba(0, 73, 130, 0.9);*/
    }
    /* testing styles rcg */
    
    ul.drawer-menu {
        margin-left: 10px;
        padding: 5px;
    }
    
    .drawer-menu li {
        font-weight: normal;
    }
    
    ul.children {
        margin-left: -7px;
    }
    
    #main > nav > ul > li.ancestors a,
    h3.ancestors {
        margin-left: -9px;
    }
</style>

<!--  iScroll -->
<!--will enqeue once approved final rcg -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
<!-- drawer.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>

<?php 

    // This PHP block is displaying the proper section name

    $curr_postID = $post->ID;

    // intiatize section title to say "SECTION" in case of error
    $sectionTitle = "SECTION";
    
    // get the title of the current page
    $currentTitle = get_the_title($post);

    // get the title of the current page's oldests parent (main nav)
    $parent_title = getOldestParent();

    // get the section title 
    $sectionTitle = setSectionTitle($parent_title);


    $sectionTitle = checkForTitleOverrides($sectionTitle, $currentTitle, $parent_title);

    // append menu to end of section name
    $sectionTitle.= " MENU";    

function setSectionTitle($parent_title){    
    
            // find the space between the title name
            $pos = strpos($parent_title," ");

            // if you find a space truncate the string to display the first word
              if ($pos !== false) {


              //convert string for parent_title to an array
                $explodedParent = str_split($parent_title);

              //count the length of the  array
                $arrayLength = count($explodedParent);

              //create variable for the message array
                $titleArray = array();

            //iterate through the  array until you reach the the position of the space
            //push each character on to the title array  
                for ($i = 0; $i < $pos; $i++) {
                  array_push($titleArray, $explodedParent[$i]);
                }
                // set the section title to the imploded (stringified) trucated title array 
                $sectionTitle = implode($titleArray);


            } // close if 

        else {

            $sectionTitle = $parent_title;
        }

        return $sectionTitle;


} // close setSectionTitle function


function checkForTitleOverrides($sectionTitle, $currentTitle, $parent_title){


    //menu labels
    $watsonTitle = "WATSON";
    $banburyTitle = "BANBURY";
    $educationTitle = "EDUCATION";
    $eventsTitle = "EVENTS";

// if(strcasecmp($parent_title, 'Education') == 0)
//     $sectionTitle = $educationTitle;

if(strcasecmp($parent_title, 'Public Events') == 0)
    $sectionTitle = $eventsTitle;


if(strpos($currentTitle, 'Watson') !== false)
        $sectionTitle = $watsonTitle;

if(strpos($parent_title, 'Watson') !== false)
        $sectionTitle = $watsonTitle;
    

if(strpos($currentTitle, 'Banbury') !== false)
        $sectionTitle = $banburyTitle; 

if(strpos($parent_title, 'Banbury') !== false)
        $sectionTitle = $banburyTitle; 


    return $sectionTitle;

} // close checkForTitleOverrides


function getOldestParent(){


    // if( is_page() ) { 
    // global $post;

    // GET THE TITLE OF THE FIRST PARENT
    // Get an array of Ancestors and Parents if they exist 
    $parents = get_post_ancestors( $post->ID );
    // Get the top Level page->ID count base 1, array base 0 so -1 
    $id = ($parents) ? $parents[count($parents)-1]: $post->ID;
    
    // Get the parent using the post id
    $parent = get_post( $id );

    // get the title of the parent
    $parent_title = get_the_title($parent);

    return $parent_title;

} // close getOldestParent

?> 




<div class="insite-nav">
    <span style="display:inline-block;margin: 12px 0 0 15px; "><?php echo $sectionTitle?></span>

    <button type="button" class="drawer-toggle drawer-hamburger">
        <span class="sr-only">toggle navigation</span>
        <span class="drawer-hamburger-icon"></span>
    </button>

</div>


<nav class="drawer-nav" role="navigation">



    <ul class="drawer-menu">

        <!-- <?php wp_title(''); ?></h3> -->
        <h3 class="ancestors"><?php single_post_title(); ?></h3>

<!-- Show the ancestors rcg -->
<?php

$ancestors = get_post_ancestors( $curr_postID );
if( sizeOf($ancestors) > 0 ){
$ancestors = array_reverse($ancestors);
//echo ' <li>    <a href="';
//echo bloginfo('url');
//echo '">Home</a></li>';
foreach( $ancestors as $ancestor ) {
$a_title = get_the_title( $ancestor );
$a_permalink = get_permalink( $ancestor );
echo '<li class="ancestors">';
echo '<a href="'.$a_permalink.'">'.$a_title.'</a>';
echo '</li>';
}
}
?>
<!-- List the pages in context rcg -->
<?php
if ( $post->post_parent ) {
    $children = wp_list_pages( array(
        'title_li' => '',
        'child_of' => $post->post_parent,
        'echo'     => 0
    ) );
} else {
    $children = wp_list_pages( array(
        'title_li' => '',
        'child_of' => $post->ID,
        'echo'     => 0
    ) );
}
 
if ( $children ) : ?>
                <!-- <ul> -->
                <?php echo $children; ?>
                    <!--  </ul> -->
                    <?php endif; ?>

    </ul>
</nav>
<!-- Bold the current page with an inline style so it wins rcg -->
<script type="text/javascript">
    $(".current_page_item").css("font-weight", "bold"); 
     $(document).ready(function () {
        $('.drawer').drawer();
    });
    $(document.body).addClass('drawer drawer--right');   
</script>
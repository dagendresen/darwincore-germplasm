<?php
/**
 *	################################################################
 *	### This script will show all pictures in the current folder ###
 *	################################################################
 *	
 *	This is the prototype of this script, copy accross to list images in the sub-folders
 *
 *	Version 2007-12-06, Dag Endresen
 *	Version 2009-09-01, Dag Endresen
 */

    $title = "All pictures in the current folder";
    $dir = dir(".");
    $dir->rewind();
    while ($file = $dir->read()) {
	if ($file != "." && $file != ".." 
		&& !ereg("\.php", $file) && !ereg("\.htm", $file) 
		&& $file != ".DS_Store"
		&& $file != "Thumbs.db"
		&& $file != ".svn" 
#		&& $file != 'taxon' 
	) {

	    $filelist[] = $file; // Add to file list
	}
    }
    $cnt = sizeof($filelist);
    sort($filelist); // alphabetical order
    $total_file_size = 0; // init
    $total_images_size = 0; // init
    $total_directory_size = 0; // init
    ###
    ### INIT ARRAYS
    ###
    $directories = '';
    $images = '';
    $documents = '';
    ### INIT object counter
    $nd = 0; // directories
    $ni = 0; // images
    $nd = 0; // documents
    ###

    echo "<html>\n";
    echo "<head><title>$title</title></head>\n";
    echo "<body \n";
    echo "bgcolor='#DDDDDD'\n";
    echo "text='#447744'\n";
    echo "link='#5577dd'\n";
    echo "vlink='#3322ee'\n";
    echo "alink='#ff0011'>\n";
    echo "<div align='center'>\n";
    echo "<h2><font size='5' color='darkslateblue'>$title</font></h2>\n\n";
    echo "<div><a href='./..'>[UP ONE LEVEL]</a></div>\n";


    ###
    ### LOOP OBJECTS
    ###
    for ($i=0; $i<$cnt; $i++) {
	if ( is_dir ($filelist[$i]) ) {
	    $directories[$nd] = $filelist[$i]; $nd++; // NEW ARRAY of directories
	} elseif ( is_file($filelist[$i]) ) {
	    $images[$ni] = $filelist[$i]; $ni++; // NEW ARRAY of images
	}
    }


    ###
    ### DIRECTORIES
    ###
    $cnt_dir = sizeof($directories);
 if ($cnt_dir > 1) {
    echo "<table border='0'>\n";
    echo "<tr><td colspan='3'><hr height='1'></td></tr>";
    echo "<tr><td colspan='3'>DIRECTORIES ($cnt_dir)</td></tr>";
    echo "<tr><td colspan='3'><hr height='1'></td></tr>";
    for ($i=0; $i<$cnt_dir; $i++) {
	echo "<tr><td align='right'>". ($i + 1) ."&nbsp;</td><td align='left' nowrap>\n";
	echo "<a href='$directories[$i]'>$directories[$i]</a>&nbsp;&nbsp;\n";
	echo "</td><td>\n";
	$files = scandir($directories[$i]);
	echo sizeof($files) . " files";
	$dir_total_file_size = 0;
	foreach ($files as $file) {
	    if ( is_file($file) ) {
		$size = filesize($file);
		$dir_total_file_size += $size;
	    }
	}
	echo ", total size: ". file_size_readable($dir_total_file_size) ."\n";
	$total_directory_size += $dir_total_file_size; // counter
	echo "</td></tr>\n";
	//echo "<tr><td colspan='4'><hr height='1'></td></tr>";
    }
    echo "<tr><td colspan='3'><hr height='1'></td></tr>";
    echo "</table>\n";
    echo "<div>Total of $cnt_dir directories</div>\n";
    echo "<br /><br />\n";
 }

    ###
    ### IMAGES
    ###
    $cnt_img = sizeof($images);
    ###
    ### IMAGES ICON MAP
    ###
    echo "<div class='text_small'>\n";
    for ($i=0; $i<$cnt_img; $i++) {
	preview_icon_image($images[$i], '30'); // IMAGE MAP
    }
    echo "</div><br clear='all' />\n";
    ###
    ### IMAGES DETAIL LIST
    ###
    echo "<table border='0'>\n";
    echo "<tr><td colspan='4'><hr height='1'></td></tr>";
    echo "<tr><td colspan='4'>IMAGES ($cnt_img)</td></tr>";
    echo "<tr><td colspan='4'><hr height='1'></td></tr>";
    for ($i=0; $i<$cnt_img; $i++) {
	echo "<tr><td align='right'>". ($i + 1) . "&nbsp;</td><td align='left' nowrap>\n";
	echo "<a href='$images[$i]'>$images[$i]</a>&nbsp;&nbsp;\n";
	echo "</td><td>\n";
	###
	$total_file_size += filesize($images[$i]);
	$image_size = getimagesize($images[$i]);
	//$image_width=$image_size[0];
	if ( intval($image_size[0]) > 400 ) : $image_width = '400'; else : $image_width = $image_size[0]; endif;

	echo "<img src='./" . $images[$i] . "' width='$image_width'>\n";
	echo "</td><td>\n";
	echo "<div style='margin:2px'>\n";
	echo "File size : " . file_size_readable( filesize($images[$i]) ) . " <br />\n";
	echo "Width : ". $image_size[0] ." pix<br />\n";
	echo "Height : ". $image_size[1] ." pix<br />\n";
	//echo $image_size[3] ."<br />\n";
	echo "Image type : " . $image_size['mime'] . "<br />\n";
	//echo "<pre>"; print_r($image_size); echo "</pre>";
	echo "</div>\n";
	//$total_images_size += $image_size; // counter
	echo "</td></tr>\n";
	echo "<tr><td colspan='4'><hr height='1'></td></tr>";
    }
    echo "</table>\n";
    echo "<div>Total of $cnt_img images</div>\n";
    echo "<br /><br />\n";




####################################
/*
    echo "<br />\n";
    echo "<table border='0' cellspacing='0' cellpadding='0'>\n";
    for ($i=0; $i<$cnt; $i++) {
	echo "<tr>\n";
	echo "<td align='right'>\n";
	echo "$i &nbsp;\n";
	echo "</td><td align='left' nowrap>\n";
	echo "<a href='$filelist[$i]'>$filelist[$i]</a>&nbsp;&nbsp;\n";
	echo "</td><td>\n";

	###
	### Directory folder
	###
	if ( is_dir ($filelist[$i]) ) {
	    $directories[$nd] = $filelist[$i]; $nd++; // NEW ARRAY of directories
	    //echo "<b>Directory Folder</b>: &nbsp;\n";
	    //echo "</td><td>\n";
	    $files = scandir($filelist[$i]);
	    echo sizeof($files) . " files";
	    $dir_total_file_size = 0;
	    foreach ($files as $file) {
		if ( is_file($file) ) {
		    $size = filesize($file);
		    $dir_total_file_size += $size;
		}
	    }
	    echo ", total size: ". file_size_readable($dir_total_file_size) ."\n";
	    $total_directory_size += $dir_total_file_size; // counter

	###
	### File info 
	### Assumed to be an image when not folder...
	### TODO: sense other file formats ...
	###
	} elseif ( is_file($filelist[$i]) ) {
	    $images[$ni] = $filelist[$i]; $ni++; // NEW ARRAY of images
	    $total_file_size += filesize($filelist[$i]);
	    $image_size = getimagesize($filelist[$i]);
	    //$image_width=$image_size[0];
	    if ( intval($image_size[0]) > 400 ) : $image_width = '400'; else : $image_width = $image_size[0]; endif;

	    echo "<img src='./$filelist[$i]' width='$image_width'>\n";
	    echo "</td><td>\n";
	    echo "<div style='margin:10px'>\n";
	    echo "File size : " . file_size_readable( filesize($filelist[$i]) ) . " <br />\n";
	    echo "Width : ". $image_size[0] ." pix<br />\n";
	    echo "Height : ". $image_size[1] ." pix<br />\n";
	    //echo $image_size[3] ."<br />\n";
	    echo "Image type : " . $image_size['mime'] . "<br />\n";
	    //echo "<pre>"; print_r($image_size); echo "</pre>";
	    echo "</div>\n";
	}
	echo "</td>\n";
	echo "</tr>\n";
	echo "<tr><td colspan='4'><hr height='1'></td></tr>";
    }
    echo "</table><br /><br />\n";
*/
#####################################






#########################################
    echo "<div>\n";
    echo "<span>Total of $cnt objects</span> :: \n";
    //echo "<span>Total file size: " . number_format($total_file_size, 0, ',', ' ') . " bytes</span>\n";
    echo "<span>Total file size: " . file_size_readable($total_file_size) . "</span> :: \n";
    echo "<span>Total directory size: " . file_size_readable($total_directory_size) . "</span>\n";
    echo "</div>\n";
    echo "<div><a href='./..'>[UP ONE LEVEL]</a></div>\n";


    echo "</div>\n";
    echo "</body>\n";
    echo "</html>\n";



    ###
    ### Function to render the file size more readable
    ### B, kB, MB, ... instead of plain bytes
    ###
    function file_size_readable ($size, $retstring = null) {
	// adapted from code at http://aidanlister.com/repos/v/function.size_readable.php
	$sizes = array('B', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
	if ($retstring === null) { $retstring = '%01.2f %s'; }
	$lastsizestring = end($sizes);
	foreach ($sizes as $sizestring) {
    	    if ($size < 1024) { break; }
    	    if ($sizestring != $lastsizestring) { $size /= 1024; }
	}
	if ($sizestring == $sizes[0]) { $retstring = '%01d %s'; } // Bytes aren't normally fractional
	return sprintf($retstring, $size, $sizestring);
    }


    ###
    ### Function for small icon preview
    ###
    function preview_icon_image ($image, $size='20') {
	//echo "<span style='float:left; margin:3px;' title='$image'><img src='./$image' alt='$image' height='20' /><br />$image</span>\n"; // IMAGE NAME	
	//echo "<span style='float:left; margin:3px;' title='$image'><img src='./$image' alt='$image' height='$size' /></span>\n"; // PLAIN IMAGE MAP
	$img_style = " style= 'max-height: ". $size ."px; max-width: ". (4 * $size) ."px; overflow: hidden;' ";
	echo "<span style='float:left; margin:3px;' title='$image'>\n";
	echo "<img src='./$image' alt='$image' height='$size' $img_style />\n";
	echo "</span>\n"; // DETAIL
    }
    //echo "<div class='text_small'>\n";
    //preview_icon_image('info.png'); // DETAIL
    //echo "</div>\n";


?>



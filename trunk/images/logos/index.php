<?php
/**
 *	################################################################
 *	### This script will show all pictures in the current folder ###
 *	################################################################
 *	
 *	Version 2007-12-06, Dag Endresen
 */

    $title = "All pictures in the current folder";
    $dir = dir(".");
    $dir->rewind();
    while ($file = $dir->read()) {
	if ($file != "." && $file != ".." && !ereg("\.php", $file) && !ereg("\.htm", $file) && $file != 'taxon' ) {
	    $filelist[] = $file;
	}
    }
    $cnt = sizeof($filelist);
    $total_file_size = 0; // init

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
    echo "<div><a href='./..'>[BACK]</a></div>\n";
    echo "<br /><table border='0' cellspacing='0' cellpadding='0'>\n";
    for ($i=0; $i<$cnt; $i++) {
	sort($filelist);
	echo "<tr>\n";
	echo "<td align='right'>\n";
	echo "$i &nbsp;\n";
	echo "</td><td align='left' nowrap>\n";
	echo "<a href='$filelist[$i]'>$filelist[$i]</a>&nbsp;&nbsp;\n";
	echo "</td><td>\n";

	### Directory folder
	if ( is_dir ($filelist[$i]) ) {
	    echo "Directory Folder";
	    echo "</td><td>\n";
	    $files = scandir($filelist[$i]);
	    echo sizeof($files) . " files";
	    $dir_total_file_size = 0;
	    foreach ($files as $file) {
		if ( is_file($file) ) {
		    $size = filesize($file);
		    $dir_total_file_size += $size;
		}
	    }
#	    echo "total size: ". number_format($dir_total_file_size, 0, ',' , ' ') ." bytes\n";
	    echo ", total size: ". file_size_readable($dir_total_file_size) ."\n";

	### File info (presumed to be an image)
	} elseif ( is_file($filelist[$i]) ) {
	    $total_file_size += filesize($filelist[$i]);
	    $image_size = getimagesize($filelist[$i]);
#	    $image_width=$image_size[0];
	    if ( intval($image_size[0]) > 400 ) : $image_width = '400'; else : $image_width = $image_size[0]; endif;

	    echo "<img src='./$filelist[$i]' width='$image_width'>\n";
	    echo "</td><td>\n";
	    echo "<div style='margin:10px'>\n";
#	    echo "File size : " . number_format( filesize($filelist[$i]), 0, ',', ' ') . " bytes<br />\n";
	    echo "File size : " . file_size_readable( filesize($filelist[$i]) ) . " <br />\n";
	    echo "Width : ". $image_size[0] ." pix<br />\n";
	    echo "Height : ". $image_size[1] ." pix<br />\n";
#	    echo $image_size[3] ."<br />\n";
	    echo "Image type : " . $image_size['mime'] . "<br />\n";
#	    echo "<pre>"; print_r($image_size); echo "</pre>";
	    echo "</div>\n";
	}
	echo "</td>\n";
	echo "</tr>\n";
	echo "<tr><td colspan='4'><hr height='1'></td></tr>";
    }
    echo "</table><br /><br />\n";

    echo "<div>Total of $cnt pictures</div>\n";
#    echo "<div>Total file size: " . number_format($total_file_size, 0, ',', ' ') . " bytes</div>\n";
    echo "<div>Total file size: " . file_size_readable($total_file_size) . "</div>\n";
    echo "<div><a href='./..'>[BACK]</a></div>\n";

    echo "</div>\n";
    echo "</body>\n";
    echo "</html>\n";




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

?>



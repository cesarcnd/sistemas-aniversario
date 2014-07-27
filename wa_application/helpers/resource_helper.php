<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	function titleShort($title,$limitLengthTitle){
		$length_title=strlen($title);
    	if($length_title>$limitLengthTitle)
    	{	$title_new=array();
    		unset($title_new);
    		$title_new=$title;
    		$title_new = explode(" ", $title_new);
    		$title_print=" ";
    		for($i=0; $i<$length_title; $i++)
    			{	$title_print=$title_print.$title_new[$i]." ";
    				if(strlen(trim($title_print))>=$limitLengthTitle)
    				{ $title_album=trim($title_print)."..."; 
    				 break;}
    			}
    	}
		else
    	{ $title_album=trim($title);}
    	return $title_album;
	}
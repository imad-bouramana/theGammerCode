<?php

function get_category_h(){
	$CI = get_instance();
	$categories = $CI->Product_model->get_category();
	return $categories;
}
function get_popular_h(){
	$CI = get_instance();
	$CI->load->model('Product_model');
	$popular = $CI->Product_model->get_popular();
	return $popular;
}
function getTittle(){

     global $tittlepage;

     if(isset($tittlepage)){
     
 	echo $tittlepage;

    }else{

 	echo 'page faild';
    }
}
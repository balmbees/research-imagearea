<?

if( empty($_POST) ){
	$res=false;
}else{
	$image=new Image;
	$res= $image->submit($_POST);
}

?>

<?

$image=new Image;


if( $tmp=$image->getImage() ){
	$res['image']=$tmp;
}

$res['completed_count']=$image->getCompletedImageCount();
$res['rest_count']=$image->getRestImageCount();

?>

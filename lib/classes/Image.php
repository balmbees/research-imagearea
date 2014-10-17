<?

class Image{
	private $db;

	function __construct(){
		$this->db=new DB\Mysql;
	}

	function getImage(){
		$sql="select * from images where status='0' order by RAND() limit 1";
		if( $obj=$this->db->query($sql)->nfo() ){
			return $obj;
		}
		return false;
	}

	function getCompletedImageCount(){
		$sql="select count(*) as cnt from images where status='1'";
		$ret=$this->db->query($sql)->nfo();
		return $ret->cnt;
	}

	function getRestImageCount(){
		$sql="select count(*) as cnt from images where status='0'";
		$ret=$this->db->query($sql)->nfo();
		return $ret->cnt;
	}

	function submit($arr){
		$model=new \sexyModel("images");

		$arr['idx']=$this->db->escape_string($arr['idx']);
		$arr["status"]=1;

		$model->_update(array("status", "ori_width", "ori_height", "sel_width", "sel_height", "sel_x1", "sel_x2", "sel_y1", "sel_y2"), $arr, "idx='$arr[idx]'");

		return true;
	}
}

?>

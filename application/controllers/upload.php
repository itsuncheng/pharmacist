<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = array();
		$this->parser->parse('upload',$data);
	}

	public function fileUpLoad () {
		$tmp_name = $_FILES["UpFile"]["tmp_name"];
		$name = $_FILES["UpFile"]["name"];
		$type = $_FILES["UpFile"]["type"];
		$size = $_FILES["UpFile"]["size"];
		$error = $_FILES["UpFile"]["error"];
		$data = array();
	//	echo $tmp_name.",".$name.",".$type.",".$size.",".$error;
		
		if($error== UPLOAD_ERR_OK){
			$fname5 = iconv("UTF-8","BIG5",$name);
			$fname8 = iconv("UTF-8","UTF-8",$name);
		//	$ftmp_name = iconv("UTF-8","BIG5",$tmp_name);
		//	$str = "SELECT * FROM `file` WHERE 1";
		//	$query = $this->db->query($str);
		//	$i = count($query->result_array());
		//	$str = "INSERT INTO `a0328393`.`file` ( `index` , `filename` , `refilename` ) VALUES (".($i=$i+1)." , '".$fname8."' , 'test".$i."');";
		//	$this->db->query($str);
			if(move_uploaded_file($tmp_name,"./public/pic/".$name)){
				$data["result"]=true;
			}	
		}else {
			$data["result"]=false;
		}
		
		$this->parser->parse('upload',$data);
	}
}

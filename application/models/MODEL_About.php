<?php
class MODEL_About extends CI_Model{
	function GetAllData()
	{		
		return $rs->result();
	}
}
<?php
namespace Controller\Admin;
use Controller\Controller;
use Model\Db;

class active extends Controller
{
	public function show()
	{
		$this->display('/active/index');
	}
	

}
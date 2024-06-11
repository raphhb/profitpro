<?php 

class Expenses
{
	use Controller;

	public function index()
	{

		$this->view('expenses');
	}

}

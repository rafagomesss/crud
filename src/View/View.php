<?php

namespace Crud\View;

class View
{
	private $view;
	private $data = [];

	public function __construct($view)
	{
		$this->view = $view;
		require VIEWS_INCLUDES_PATH . 'header.php';
	}

	public function __set($index, $value)
	{
		$this->data[$index] = $value;
	}

	public function __get($index)
	{
		return $this->data[$index];
	}

	public function render()
	{
		require VIEWS_PATH . $this->view;
	}

	public function __destruct()
	{
		require VIEWS_INCLUDES_PATH . 'footer.php';
	}
}



?>
<?php

class Paginate{

	public $current_page;
	public $items_per_page;
	public $items_total_count;

	public function __construct($page = 1 , $items_per_page, $items_total_count = 0){

		$this->current_page = (int)$page;
		$this->items_per_page = (int)$items_per_page;
		$this->items_total_count = (int)$items_total_count;

	}

	public function nextPage(){

		return $this->current_page + 1;

	}

	public function has_nextPage(){

		return $this->nextPage() <= $this->totalPages() ? true : false;

	}

	public function previousPage(){

		return $this->current_page - 1;

	}

	public function has_previousPage(){

		return $this->previousPage() >= 1 ? true : false; 

	}

	public function totalPages(){

		return ceil($this->items_total_count/$this->items_per_page);
	}

	public function offset(){

		return ($this->current_page - 1) * $this->items_per_page;

	}

}

?>
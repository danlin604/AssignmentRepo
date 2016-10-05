<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sales_Controller extends Application
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/
	 * 	- or -
	 * 		http://example.com/welcome/index
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$items = $this->stock_model->all();

		foreach($items as $item)
		{
			$cells[] = $this->parser->parse('_sales_cell', (array) $item, true);
		}

		$this->load->library('table');

		$params = array
		(
			'table_open' => '<table class="menu_table">',
			'cell_start' => '<td class="menu_item">',
			'cell_alt_start' => '<td class="menu_item">',
		);
		$this->table->set_template($params);

		$rows = $this->table->make_columns($cells, 3);
		$this->data['sales_table'] = $this->table->generate($rows);

		$this->data['pagebody'] = 'sales_view';
		$this->render(); 
	}
}

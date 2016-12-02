<?php

/*
 * The admin page will be able to edit all data tables.
 * this means we will have to send 3 groups of data from
 * all 3 models. No idea how to do that, they will be represented using HTML tables
 * and have edit and delete buttons beside each row to make changes. Not sure if these
 * changes are too be applied to the model but that makes sense. Also an add function
 * to add to the tables. 
 * @author Manveer Bhangu
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class administrator_controller extends Application
{
    
    function __construct() {
        parent::__construct();
        $this->load->helper('formfields');
        $this->error_messages = array();
    }

    public function index()
    {
        $userrole = $this->session->userdata('userrole');
        if ($userrole != 'admin') {
            $message = 'You are not authorized to access this page. Go away';
            $this->data['content'] = $message;
        }

        //view we want to show
        $this->data['pagebody'] = 'admin_view';

        // go through the sources and store the data in there respective arrays
        $result_supplies = ' ';
        foreach ($this->supplies->all() as $record)
        {
                $result_supplies .= $this->parser->parse('supplies_admin', $record, true);
        }
        $this->data['supplies'] = $result_supplies;

        $result_recipes = ' ';
        foreach ($this->recipes->all() as $record)
        {
                $result_recipes .= $this->parser->parse('recipes_admin', $record, true);
        }
        $this->data['recipes'] = $result_recipes;

        $result_stock = ' ';
        foreach ($this->stock->all() as $record)
        {
                $result_stock .= $this->parser->parse('stock-admin', $record, true); 
        }
        $this->data['stock'] = $result_stock;
        $this->render();
    }
        
    function edit($id=null) {
        
        // try the session first
        $key = $this->session->userdata('key');
        $record = $this->session->userdata('record');

        // if not there, get them from the database
        if (empty($record) && ($id !== null)) {
            $record = $this->stock->get($id);
            $key = $id;
            $this->session->set_userdata('key',$id);
            $this->session->set_userdata('record',$record);
        }

        $this->data['action'] = (empty($key)) ? 'Adding' : 'Editing';

        // build the form fields
        //$this->data['fid'] = makeTextField('Menu code', 'id', $record->id);
        //$this->data['fname'] = makeTextField('Item name', 'name', $record->name);
        //$this->data['fdescription'] = makeTextArea('Description', 'description', $record->description);
        //$this->data['fprice'] = makeTextField('Price, each', 'price', $record->price);
        //$this->data['fpicture'] = makeTextField('Item image', 'picture', $record->picture);

        //$cats = $this->categories->all(); // get an array of category objects
        //foreach ($cats as $code => $category) // make it into an associative array
        //    $codes[$category->id] = $category->name;
        //$this->data['fcategory'] = makeCombobox('Category', 'category', $record->category, $codes);          
        //$this->data['zsubmit'] = makeSubmitButton('Save', 'Submit changes');

        // show the editing form
        $this->data['pagebody'] = "stock-edit";
        //$this->show_any_errors();
        $this->render();
    }
}

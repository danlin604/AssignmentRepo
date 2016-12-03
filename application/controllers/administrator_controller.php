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
        
    function edit($table=null, $id=null) {       
        // try the session first
        $key = $this->session->userdata('key');
        $record = $this->session->userdata('record');

        // if not there, get them from the database
        if (empty($record) && ($id !== null)) {
            
            if ($table == 'stock') {
                $record = $this->stock->get($id);
            } elseif ($table == 'recipes') {
                $record = $this->recipes->get($id);
            } elseif ($table == 'supplies') {
                $record = $this->supplies->get($id);
            } else {
                echo 'Route accepts only stock, recipes, or supplies!'; 
            }
            
            $key = $id;
            $this->session->set_userdata('key',$id);
            $this->session->set_userdata('record',$record);
        }

        $this->data['action'] = (empty($key)) ? 'Adding' : 'Editing';

        // build the form fields
        
        $this->data['fid'] = makeTextField('Code', 'id', $record->id);
        $this->data['fname'] = makeTextField('Name', 'name', $record->name);
        $this->data['fdescription'] = makeTextArea('Description', 'description', $record->description);
        
        if ($table == 'stock') {
            $this->data['fprice'] = makeTextField('Price, each', 'price', $record->price);
            $this->data['fcurrAvail'] = makeTextField('Availiable Quantity', 'currAvail', $record->currAvail);
        } elseif ($table == 'recipes') {
            $this->data['pickel'] = makeTextField('Pickle', 'pickel', $record->pickel);
            $this->data['ketchup'] = makeTextField('Ketchup', 'ketchup', $record->ketchup);
            $this->data['tomato'] = makeTextField('Tomato', 'tomato', $record->tomato);
            $this->data['mustard'] = makeTextField('Mustard', 'mustard', $record->mustard);
            $this->data['onions'] = makeTextField('Onions', 'onions', $record->onions);
            $this->data['buns'] = makeTextField('Buns', 'buns', $record->buns);
            $this->data['meat_patty'] = makeTextField('Meat patty', 'meat patty', $record->meat_patty);
            $this->data['mac_sauce'] = makeTextField('Mac sauce', 'mac_sauce', $record->mac_sauce);
            $this->data['fish_patty'] = makeTextField('Fish patty', 'fish_patty', $record->fish_patty);
            $this->data['fries'] = makeTextField('Fries', 'fries', $record->fries);
            $this->data['soft_drink'] = makeTextField('Soft drink', 'soft_drink', $record->soft_drink);            
        } elseif ($table == 'supplies') {
            $this->data['receiving_unit'] = makeTextField('Receiving unit', 'receiving_unit', $record->receiving_unit);            
            $this->data['receiving_cost'] = makeTextField('Receiving unit', 'receiving_cost', $record->receiving_cost);
            $this->data['stock_unit'] = makeTextField('Stock unit', 'stock_unit', $record->stock_unit);
            $this->data['quantities_on_hand'] = makeTextField('Quantities on hand', 'quantities_on_hand', $record->quantities_on_hand);   
        } else {
            echo 'Route accepts only stock, recipes, or supplies!'; 
        }

        //$cats = $this->categories->all(); // get an array of category objects
        //foreach ($cats as $code => $category) // make it into an associative array
        //    $codes[$category->id] = $category->name;
        //$this->data['fcategory'] = makeCombobox('Category', 'category', $record->category, $codes);          
        $this->data['zsubmit'] = makeSubmitButton('Save', 'Submit changes');

        // show the editing form
        if ($table == 'stock') {
            $this->data['pagebody'] = "stock-edit";
        } elseif ($table == 'recipes') {
            $this->data['pagebody'] = "recipes-edit";
        } elseif ($table == 'supplies') {
            $this->data['pagebody'] = "supplies-edit";
        } else {
            echo 'Route accepts only stock, recipes, or supplies!'; 
        }
        
        $this->show_any_errors();
        $this->render();
    }
    
    function cancel() {
        $this->session->unset_userdata('key');
        $this->session->unset_userdata('record');
        $this->index();
    }   
    
    function show_any_errors() {
        $result = '';
        if (empty($this->error_messages)) {
            $this->data['error_messages'] = '';
            return;
        }
        // add the error messages to a single string with breaks
        foreach($this->error_messages as $onemessage)
            $result .= $onemessage . '<br/>';
        // and wrap these per our view fragment
        $this->data['error_messages'] = $this->parser->parse('admin-errors', ['error_messages' => $result], true);
    }
}

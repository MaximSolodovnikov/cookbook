<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rules_model extends CI_Model {
    /*Rules for adding recipe*/
    public $recipes = array
        (
            array
                (
                    'field' => 'title',
                    'label' => 'Название',
                    'rules' => 'required'
                ),
            
            array
                (
                    'field' => 'description',
                    'label' => 'Описание',
                    'rules' => 'required'
                )
        );
    
    /*Rules for adding ingredient*/
    public $ingredients = array
        (
            array
                (
                    'field' => 'name',
                    'label' => 'Название',
                    'rules' => 'required'
                )
        );   
}
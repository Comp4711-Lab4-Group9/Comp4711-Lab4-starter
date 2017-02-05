<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{
    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->get('6');
        
        $this->data = array_merge($this->data, $source);
        $this->render();
    }
}
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class About extends Application {
    //put your code here
    public function about()
    {
        //$this->load->view('about');
        $this->data['pagebody'] = 'about';
        $this->render();
    }
}

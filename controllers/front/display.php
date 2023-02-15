<?php

class myklarnapaymentsdisplayModuleFrontController extends ModuleFrontController
{
    protected $my_content;

    public function displayAjax() 
    {
        header('Content-type: application/json');
        print(json_encode($this->my_content));
    }

    public function initContent()
    {
        parent::initContent();

        $this->my_content = ['display'=>'MyKlarna'];
        $this->context->smarty->assign('myklarnapayments',$this->my_content);
        $this->setTemplate('module:myklarnapayments/views/templates/front/display.tpl');
    }

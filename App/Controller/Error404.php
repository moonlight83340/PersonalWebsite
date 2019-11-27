<?php
/**
 * Description of Error404
 *
 * @author Gaëtan
 */
namespace App\Controller;
class Error404 extends \PoireauFramework\Arch\Controller{
    
    /**
     *
     * @var \App\Model\Account\Account
     */
    //private $model;
    public function __construct(\PoireauFramework\PoireauFramework $app) {
        parent::__construct($app);
    }
    
    public function indexAction(){
        
    }    
}

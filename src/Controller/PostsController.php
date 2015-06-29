<?php
 
namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
 
class PostsController extends AppController {
 
    public function index(){
        $poststable = TableRegistry::get('Posts');
        $this->set('xxx', $poststable->find('all'));
    }
     
}
?>

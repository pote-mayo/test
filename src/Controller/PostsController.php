<?php
 
namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
 
class PostsController extends AppController {

	// My Componentを読み込むには！
    public $components = array('Atfxml');
 
    public function index(){
		$poststable = TableRegistry::get('Posts');
$this->log('--- $poststable ---', 'debug');
$this->log($poststable, 'debug');
		$post = $poststable->find('all');
$this->log('--- $post ---', 'debug');
$this->log($post, 'debug');
        $this->set('xxx', $poststable->find('all'));

		$userstable = TableRegistry::get('Users');
$this->log('--- $userstable ---', 'debug');
$this->log($userstable, 'debug');
        $user = $userstable->find('all')->all();
$this->log('--- $user ---', 'debug');
$this->log($user, 'debug');

		// My Componentを使ってみる！
		$this->Atfxml->LoadXmlFile();


	}
     
}
?>

<?php
$scaf = NULL;
if(!$scaf){
    class TodosController extends AppController {    
        public function index() {
            $this->set('todos', $this->Todo->find('all'));
        }
        public function details($id = NULL){
            $this->set('todo', $this->Todo->findById($id));
        }
        public function add(){
  //    
        }
    }
}else{
    class TodosController extends AppController {
        public $scaffold;
    }
}
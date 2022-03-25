<?php

use Phalcon\Mvc\Controller;


class IndexController extends Controller
{
    public function indexAction()
    {

        $this->view->users = Users::find();
        // return '<h1>Hello World!</h1>';
    }
    public function editAction($id)
    {
        print_r($id);
        $this->view->users = Users::find($id);
        // $this->view->users->delete();
        // foreach ($this->view->users as $user){
        //     print_r($user->user_id);
        // }
        // return '<h1>Hello World!</h1>';
    }
    public function updateAction()
    {
       
        $id = $this->request->getPost('id');
        
        $this->view->users = Users::find($id);

        $name = $this->request->getPost('name');
        $this->view->users[0]->username = $name;
        $email = $this->request->getPost('email');
        $this->view->users[0]->email = $email;
        $this->view->users[0]->save();
        // $users[->user_id = $id;
        // print_r(json_encode($users));
        header('Location: http://localhost:8080/');
    
        
        
        // $users->save();

        // $users->save();
        // die();
        // print_r($email);
        // $this->view->users = Users::find($id);
        // $this->view->users->delete();
        // foreach ($this->view->users as $user){
        //     print_r($user->user_id);
        // }
        // return '<h1>Hello World!</h1>';
    }
    public function deleteAction($id)
    {
        print_r($id);
        $this->view->users = Users::find($id);
        $this->view->users->delete();
        header('Location: http://localhost:8080/');
        // foreach ($this->view->users as $user){
        //     print_r($user->user_id);
        // }
        // return '<h1>Hello World!</h1>';
    }
}

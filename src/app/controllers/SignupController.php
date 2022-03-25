<?php

use Phalcon\Mvc\Controller;

class SignupController extends Controller
{
    public function IndexAction()
    {
    }

    public function testAction()
    {
        echo "hell";
    }

    public function registerAction()
    {
        $user = new Users();
        $postArr = array(
            'username' => $this->escaper->escapeHtml($this->request->getPost('username')),
            'email' => $this->escaper->escapeHtml($this->request->getPost('email')),
            'description' => $this->escaper->escapeHtml($this->request->getPost('description')),

        );
        
        $user->assign(
            $postArr,
            [
                'username',
                'email',
                'description'
            ]
        );

        $success = $user->save();

        $this->view->success = $success;

        if ($success) {
            $this->view->message = "Register succesfully";
        } else {
            $this->view->message = "Not Register succesfully due to following reason: <br>" . implode("<br>", $user->getMessages());
        }
    }
}

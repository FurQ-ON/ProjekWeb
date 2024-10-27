<?php
require_once 'app/models/User.php';
class UserController {
    private $userModel;
    public function __construct($dbConnection) {
        $this->userModel = new User($dbConnection);
    }
    public function index()
    {
        // Get all users
        $users = $this->userModel->getAllUsers();
        require_once 'app/views/userView.php';
    }

    public function show($id)
    {
        // Get user data by ID
        $user = $this->userModel->getUserById($id);
        require_once 'app/views/userDetail.php';
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Handle form submission
            $name = $_POST['name'];
            $email = $_POST['email'];
            $this->userModel->updateUser($id, $name, $email);
            header('Location: index.php');
        } else {
            // Show edit form
            $user = $this->userModel->getUserById($id);
            require_once 'app/views/userEdit.php';
        }
    }

    public function delete($id)
    {
        // Delete user and redirect back to user list
        $this->userModel->deleteUser($id);
        header('Location: index.php');
    }
    
}
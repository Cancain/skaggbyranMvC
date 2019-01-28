<?php

class Users extends Controller{
    public function __construct(){
        $this->userModel = $this->model('User');
    }

    public function login(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Sanitize the data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //Get all data from POST and put into data array
            $data = [
                'userName' => $_POST['user'],
                'password' => $_POST['password'],
                'userErr' => ''
            ];

            //Validate user input
            if(empty($data['userName'])){
                $data['userErr'] = 'Du måste ange ett användarnamn';
            }

            //Validate password input
            if(empty($data['password'])){
                $data['userErr'] = 'Du måste ange ett lösenod';
            } 

            //if the errors are empty
            if(empty($data['userErr'])){
                //get user from database
                $loggedInUser = $this->userModel->getUserFromUserName($data['userName']);

                if($loggedInUser){
                    //check that passwords match
                    if(password_verify($data['password'], $loggedInUser->password)){
                        //passwords match
                        //start the user session
                        $this->startUserSession($loggedInUser);
                        flash('loginSuccess', 'Du är nu inloggad');
                        //redirect to index
                        redirect('pages/index');
                    } else {
                        $data['userErr'] = 'Fel lösenord eller användarnamn';
                        //return to login page with errors
                        $this->view('users/login', $data);
                    }
                } else {
                    $data['userErr'] = 'Fel lösenord eller användarnamn';
                    //return to login page with errors
                    $this->view('users/login', $data);
                }
            } else {
                //return to login page with errors
                $this->view('users/login', $data);
            }

        } else {
            $data = [
                'userName' => '',
                'password' => '',
                'userErr' => ''
            ];

            //load the login page
            $this->view('users/login', $data);
        }
    }

    public function startUserSession($user){
        $_SESSION['userId'] = $user->id;
        $_SESSION['userName'] = $user->userName;

    }

    public function register(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Sanitize the data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //Get all data from POST and add to an array
            $data = [
                'firstName' => htmlspecialchars(trim($_POST['firstName'])),
                'lastName' => htmlspecialchars(trim($_POST['lastName'])),
                'email' => htmlspecialchars(trim($_POST['email'])),
                'userName' => htmlspecialchars(trim($_POST['userName'])),
                'password' => htmlspecialchars(trim($_POST['password'])),
                'confirmPassword' => htmlspecialchars(trim($_POST['confirmPassword'])),
                'firstNameErr' => '',
                'lastNameErr' => '',
                'emailErr' => '',
                'userNameErr' => '',
                'passwordErr' => '',
                'confirmPasswordErr' => ''
            ];
            
            //Validate first name
            if(empty($data['firstName'])){
                $data['firstNameErr'] = 'Du måste ange ett förnamn';
            } 

            //Validate last name
            if(empty($data['lastName'])){
                $data['lastNameErr'] = 'Du måste ange ett efternamn';
            }

            //Validate email
            if(empty($data['email'])){
                $data['emailErr'] = 'Du måste ange en korrekt emailadress';
            }
            //Validate username
            if(empty($data['userName'])){
                $data['userNameErr'] = 'Du måste ange ett användarnamn';
            }
            //Validate password
            if(empty($data['password'])){
                $data['passwordErr'] = 'Du måste ange ettt lösenord';
            } elseif (strlen($data['password']) < 6) {
                //if the password has less then 6 characters
                $data['passwordErr'] = 'Ditt lösenord måste vara åtminstone 6 tecken';
            }
            //Validate confirm password
            if(empty($data['confirmPassword'])){
                $data['confirmPasswordErr'] = 'Du måste bekräfta ditt lösenord';
            } elseif($data['password'] != $data['confirmPassword']){
                //if password and confirm password does not match
                $data['confirmPasswordErr'] = 'The passwords does not match';
            }

            //make sure all errormessages are empty
            if(empty($data['firstNameErr']) && empty($data['lastNameErr']) && empty($data['emailErr']) && empty($data['userNameErr']) &&
            empty($data['passwordErr']) && empty($data['confirmPasswordErr'])){
                //Hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //add user to database
                if($this->userModel->registerUser($data)){
                    //redirect to index
                    redirect('users/login');
                } else {
                    die('Något gick fel, försök igen senare');
                }                
            } else {
                //return to the register page with errors
                $this->view('users/register', $data);
            }           

        } else {
            $data = [
                'firstName' => '',
                'lastName' => '',
                'email' => '',
                'userName' => '',
                'password' => '',
                'confirmPassword' => '',
                'firstNameErr' => '',
                'lastNameErr' => '',
                'emailErr' => '',
                'userNameErr' => '',
                'passwordErr' => '',
                'confirmPasswordErr' => ''
            ];

            $this->view('users/register', $data);
        }
    }

    public function profile(){
        $data = $this->userModel->getUserById($_SESSION['userId']);
        if($data){
            $this->view('users/profile', $data);
        } else {
            die('Något gick fel, försök igen senare');
        }        
    }

    public function logout(){
        unset($_SESSION);
        session_destroy();

        redirect('pages/index');
    }

    public function showUsers(){
        $data = $this->userModel->getAllUsers();
        $this->view('users/showUsers', $data);
    }

    public function editUser($id){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Sanitize data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
            $data = [
                'userName' => htmlspecialchars(trim($_POST['userName'])),
                'firstName' => htmlspecialchars(trim($_POST['firstName'])),
                'lastName' => htmlspecialchars(trim($_POST['lastName'])),
                'email' => htmlspecialchars(trim($_POST['email'])),
                'password' => htmlspecialchars(trim($_POST['password'])),
                'confirmPassword' => htmlspecialchars(trim($_POST['confirmPassword'])),
                'isAdmin' => '',
                'superAdmin' => '',
                'userNameErr' => '',
                'firstNameErr' => '',
                'lastNameErr' => '',
                'emailErr' => '',
                'passwordErr' => '',
                'confirmPasswordErr' => ''
            ];

            //Verify username
            if(empty($data['userName'])){
                $data['userNameErr'] = 'Du måste ange ett användarnamn';
            }
            //Verify username
            if(empty($data['firstName'])){
                $data['firstNameErr'] = 'Du måste ange ett förnamn';
            }
            //Verify username
            if(empty($data['lastName'])){
                $data['lastNameErr'] = 'Du måste ange ett efternamn';
            }
            //Verify username
            if(empty($data['email'])){
                $data['emailErr'] = 'Du måste ange en email';
            }
            //Verify username
            if(empty($data['password'])){
                $data['passwordErr'] = 'Du måste ange ett lösenord';
            } elseif (strlen($data['password']) < 6) {
                $data['passwordErr'] = 'Lösenordet måste innehålla minst 6 tecken';
            }
            //Verify username
            if(empty($data['confirmPassword'])){
                $data['confirmPasswordErr'] = 'Du måste bekräfta ditt lösenord';
            }


            // die($data['isAdmin']);
            //check if user has been set to admin
            if(isset($_POST['isAdmin']) &&
                $_POST['isAdmin'] == 'true'){
                    $data['isAdmin'] = true;
                } else {
                    $data['isAdmin'] = false;
                }

            //check if user has been set to admin
            if(isset($_POST['superAdmin']) &&
                $_POST['superAdmin'] == 'true'){
                    $data['superAdmin'] = true;
                } else {
                    $data['superAdmin'] = false;
                }
                
            //Check that passwords match
            if($data['password'] != $data['confirmPassword']) {
                $data['confirmPasswordErr'] = 'Lösenorden matchar inte';
            }


            //confirm that all errors are empty
            if(empty($data['usernameErr']) && empty($data['firstNameErr']) && empty($data['lastNameErr']) && 
            empty($data['emailErr']) && empty($data['passwordErr']) && empty($data['confirmPassword'])){

                

            } else {
                //return with errors
                die(var_dump($data));
                $this->view('users/editUser', $data);
            }

        } else {
            $user = $this->userModel->getUserById($id);
            $data = [
                'userId' => $user->id,
                'userName' => $user->userName,
                'firstName' => $user->firstName,
                'lastName' => $user->lastName,
                'email' => $user->email,
                'password' => $user->email,
                'isAdmin' => $user->isAdmin,
                'superAdmin' => $user->superAdmin,
                'confirmPassword' => '',
                'userNameErr' => '',
                'firstNameErr' => '',
                'lastNameErr' => '',
                'emailErr' => '',
                'passwordErr' => '',
                'confirmPasswordErr' => ''
            ];

            $this->view('users/editUser', $data);
        }
    }
}
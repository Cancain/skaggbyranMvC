<?php
class Pages extends Controller{
    public function __construct(){
        $this->pageModel = $this->model('Page');
        $this->userModel = $this->model('User');
    }

    public function index(){
        $this->view('pages/index');
    }

    public function about(){
        $aboutMain = $this->pageModel->getContentByName('aboutMain');
        $aboutSubLeft = $this->pageModel->getContentByName('aboutSubLeft');
        $aboutSubRight = $this->pageModel->getContentByName('aboutSubRight');

        $data = [
            'currentUser' => $this->userModel->getUserById($_SESSION['userId']),
            'aboutHeadLine' => $aboutMain->headLine,
            'aboutText' => $aboutMain->text,
            'aboutSubLeft' => $aboutSubLeft->text,
            'aboutSubRight' => $aboutSubRight->text,

        ];

        $this->view('pages/about', $data);
    }

    public function arbetstraning(){
        $arbetstraningMain = $this->pageModel->getContentByName('arbetstraningMain');
        $arbetstraningSubLeft = $this->pageModel->getContentByName('arbetstraningSubLeft');
        $arbetstraningSubRight = $this->pageModel->getContentByName('arbetstraningSubRight');

        $data = [
            'currentUser' => $this->userModel->getUserById($_SESSION['userId']),
            'arbetstraningHeadLine' => $arbetstraningMain->headLine,
            'arbetstraningText' => $arbetstraningMain->text,
            'arbetstraningSubLeft' => $arbetstraningSubLeft->text,
            'arbetstraningSubRight' => $arbetstraningSubRight->text,

        ];
        $this->view('pages/arbetstraning', $data);
    }

    public function contact(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            //Sanitize data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //Trim and remove any tags from data and add to the data array
            $data = [
                'name' => htmlspecialchars(trim($_POST['name'])),
                'email' => htmlspecialchars(trim($_POST['email'])),
                'message' => htmlspecialchars(trim($_POST['message'])),
                'errMsg' => ''
            ];

            //Validate name
            if(empty($data['name'])) {
                $data['errMsg'] = 'Du måste ange ett namn';
            }

            //Validate email
            if(empty($data['email'])) {
                $data['errMsg'] = 'Du måste ange en email';
            }

            //Validate the message
            if(empty($data['message'])) {
                $data['errMsg'] = 'Snälla, skicka inte oss ett tomt meddelande';
            }
            

            //Check that the error is empty
            if(empty($data['errMsg'])) {
                $toEmail = "eriksson.tomas@gmail.com";
                $subject = "Meddelande från" . $data['name'];
                $body = '<h2>Meddelande från Skäggbyrån gävle <h2>
                <h4>Namn</h4><p>'.$data['name'].'</p>
                <h4>Email</h4><p>'.$data['email'].'</p>
                <h4>Meddelande</h4><p>'.$data['message'].'</p>';
                //Email headers
                $headers = "MIME-Version: 1.0" ."\r\n";
                $headers .= "Content-Type:text/hmtl;charset=UTF-8" . "\r\n";
                
                //additional headers
                $headers .= "From: " .$data['name']. "<".$data['email'].">"."\r\n";
                
                if(mail($toEmail, $subject, $body, $headers)){
                  $data['errMsg'] = 'Bokningsönskan skickad';
                  redirect('pages/contact');
                } else {
                  $data['errMsg'] = 'Något gick fel, försök igen senare';
                  $this->view('pages/contact', $data);
                }
            } else {

            $this->view('pages/contact', $data);
        
        }
    } else {
        $data = [
            'name' => '',
            'email' => '',
            'message' => '',
            'errMsg' => ''
        ];
        $this->view('pages/contact', $data);
    }
}

    public function book(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            //Sanitize data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //Trim and remove any tags from data and add to the data array
            $data = [
                'name' => htmlspecialchars(trim($_POST['name'])),
                'date' => htmlspecialchars(trim($_POST['date'])),
                'email' => htmlspecialchars(trim($_POST['email'])),
                'message' => htmlspecialchars(trim($_POST['message'])),
                'errMsg' => ''
            ];

            //Validate message
            if(empty($data['message'])){
                $data['errMsg'] = 'Du måste ange ett meddelande';
            }

            //Validate email
            if(empty($data['email'])){
                $data['errMsg'] = 'Du måste ange en korrekt mailadress';
            }

            //validate data
            if(empty($data['date'])){
                $data['errMsg'] = 'Du måste ange ett datum';
            }

            //Validate name
            if(empty($data['name'])){
                $data['errMsg'] = 'Du måste ange ett namn';
            }

            //Make sure the error message is empty
            if(empty($data['errMsg'])){
                //Create email markup
                $toEmail = "eriksson.tomas@gmail.com";
                $subject = "Bokningsönskan från" . $data['name'];
                $body = '<h2>Bokningsönskan<h2>
                <h4>Namn</h4><p>'.$data['name'].'</p>
                <h4>Email</h4><p>'.$data['email'].'</p>
                <h4>Datum</h4><p>'.$data['date'].'</p>
                <h4>Meddelande</h4><p>'.$data['message'].'</p>';
          
                //Email headers
                $headers = "MIME-Version: 1.0" ."\r\n";
                $headers .= "Content-Type:text/hmtl;charset=UTF-8" . "\r\n";
          
                //additional headers
                $headers .= "From: " .$data['name']. "<".$data['email'].">"."\r\n";
          
                //Try to send mail
                if(mail($toEmail, $subject, $body, $headers)){
                    //if mail succeds
                    $data['errMsg'] = 'Bokningsönskan skickad';
                    $this->view('pages/book', $data);
                } else {
                    //if mail fails
                    $data['errMsg'] = 'Något gick fel, försök igen senare';
                    $this->view('pages/book', $data);
                }
            } else {
                //Get back to the bookpage with errors
                $this->view('pages/book', $data);
            }

        } else {
            $data = [
                'name' => '',
                'date' => '',
                'email' => '',
                'message' => '',
                'errMsg' => ''
            ];
            $this->view('pages/book', $data);
        }        
    }

    public function editText($content) {



        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $data = [
                'name' => $_POST['name'],
                'currentUser' => $this->userModel->getUserById($_SESSION['userId']),
                'headLine' => $_POST['headLine'],
                'text' => $_POST['text'], 
                'headLineErr' => '',
                'textErr' => ''
            ];

            //Validate the text

            if(empty($data['text'])){
                $data['textErr'] = 'Inlägget måste ha något sorts innehåll';
            }

            //make sure errors are empty
            if(empty($data['headLineErr']) && empty($data['textErr'])){
                $this->pageModel->updateContentByName($data);
                redirect('pages/index');
            } else {
                //return to edit-page with errors
                $this->view('pages/editText', $data);
            }


        } else {

            $query = $this->pageModel->getContentByName($content);

            $data = [
                'currentUser' => $this->userModel->getUserById($_SESSION['userId']),
                'name' => $query->name,
                'headLine' => $query->headLine,
                'text' => $query->text, 
                'headLineErr' => '',
                'textErr' => ''
            ];

            $this->view('pages/editText', $data);
        }        
    }

    public function uploadImage() {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){

        } else {
            $this->view('pages/upload');
        }
    }
}
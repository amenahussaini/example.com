<?php

class Validate
{
  public $validation = [];
  public $errors = [];
  public $data = [];

  public function notEmpty($value){
    if(!empty($value)){
      return true;
    }
    return false;
  }

  public function email($value){
    if(filter_var($value, FILTER_VALIDATE_EMAIL)){
      return true;
    }
    return false;
  }

  public function check($data){
    $this->date = $data;

    foreach(array_keys($this->validation) as $fieldName){
      $this->rules($fieldName);
    }
  }

  public function rules($field){
    foreach($this->validation[$field] as $rule){
      if($this->{$rule['rule']}($this->data[$field]) === false){
        $this->errors[$field] = $rule;
      }
    }
  }

  public function error($field){
    if(!empty($this->errors[$field])){
      return $this->errors[$field]['message'];
    }
  }
  public function userInput($field){
    return !empty($this->data[$field])?$this->data[$field]:null;
  }
}

$message = null;
$valid = new Validate();

$input = filter_input_array(INPUT_POST);

if(!empty($input)){
  $valid->validation = [
    'email'=>[[
      'rule'=>'email',
      'message'=>'Please enter a valid email'
    ]],
    'name'=>[[
      'rule'=>'notEmpty',
      'message'=>'Please add a message'
    ]],
    'message'=>[[
      'rule'=>'notEmpty',
      'message'=>'Please add a message'
    ]]
  ];
  $valid->check($input);
 // echo '<br><br><br><pre>';
//  var_dump($valid->$errors);
//  echo '<pre>';

  if(empty($valid->errors)){
    $message = "<div class=\"alert alert-sucess\">Your form has been submitted!</div>";
  }else{
    $message = "<div class=\"alert alert-sucess\">Your form has errors!</div>";
  }

}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./dist/css/main.css">
        <title>Amena Hussaini</title>
    </head>
    <body>
        <header>
                <span class="logo">My Website</span>
                <a id="toggleMenu">Menu</a>
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="resume.php">Resume</a></li>

                    </ul>
                </nav>
            </header>
            <main>
            <br><br><br>
            <?php echo $message; ?>
                <form action="contact.php" method="POST" nonvalidate>
                    <h1>Contact Form</h1>
                    <div>
                      <label for="name">Name</label>
                      <input class="form-control" id="name" type="text" name="name" value="<?php echo $valid -> userInput('name'); ?>">
                      <div class="text-danger"><?php echo $valid->error('name'); ?></div>
                  </div>

                  <div>
                    <label for="name">Email</label>
                    <input class="form-control" id="email" type="email" name="email" value="<?php echo $valid -> userInput('email'); ?>">
                    <div class="text-danger"><?php echo $valid->error('email'); ?></div>
                    </div>

                    <div>
                        <label for="name">Message</label>
                        <textarea class="form-control" id="message" name="message"></textarea>
                        <div class="text-danger"><?php echo $valid->error('message'); ?></div>
                    </div>
                    <div>
                        <input type="hidden" name="subject" value="New submission!">

                    </div>
                    <div>
                        <input type="submit" value="Send">
                    </div>
            </form>
            </main>
            <script>
                    var toggleMenu = document.getElementById('toggleMenu');
                    var nav = document.querySelector('nav');
                    toggleMenu.addEventListener(
                        'click',
                        function(){
                        if(nav.style.display=='block'){
                            nav.style.display='none';
                        }else{
                            nav.style.display='block';
                        }
                        }
                    );
                </script>
    </body>
</html>

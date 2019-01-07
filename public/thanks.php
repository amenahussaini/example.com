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
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
            </header>
            <main>
                  <h1>Thanks!</h1>
                  <p>Thank you for contacting me, I'll get back to you ASAP!</p>
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

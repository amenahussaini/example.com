<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./dist/css/resume.css">
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

                    <div id="personal">
                        <h1 style="text-align: center">Amena Hussaini</h1>
                        <div style="width: 100%; text-align: center">
                            <span><span> Street Address</span><span>&#</span>
                            <span><span>City, ST Zip</span><span>*</span>
                            <span>Phone</span><span>*</span>
                            <span>Email Address</span>
                        </div>
                    </div> <!--end of personal div-->
                    <div id="overview">
                        <h2>Full Stack Web and Hybrid Mobile Applications Developer</h2>
                        <p>Full stack web and hybrid mobile applications developer specializing in full stack JavaScript applications and architectures. Experienced in all stages of the development life cycle, well versed in numerous programming languages. </p>
                        <ul>
                            <li>Hands-on experience leading all stages of system development efforts, including requirements in definition design, architecture, testing and support.</li>
                            <li>Outstanding leadership abilities; able to coordinate and direct all phases of project-based efforts.</li>
                        </ul>
                    </div>
                    <div id="skills">
                        <h2>Core Competencies</h2>
                        <div class="clearfix skills-width">
                        <ul class="float-left">
                            <li>Full Stack Development</li>
                            <li>Strong Analytical Skills</li>
                            <li>Prioritizes Tasks</li>
                        </ul>
                        <ul class="float-right">
                            <li>Hybrid Mobile Development</li>
                            <li>Savvy Problem Solver</li>
                            <li>Strong Leadership Skills</li>
                        </ul></div>
                    </div>
                    <div>
                        <h2>CERTIFICATIONS/TECHNICAL PROFICIENCIES</h2>
                        <p><em>Certifications: </em>Agile Certified Scrum Master</p>
                        <p><em>Platforms: </em>Agile Certified Scrum Master</p>
                        <p><em>Database: </em>Agile Certified Scrum Master</p>
                        <p><em>Tools: </em>Agile Certified Scrum Master</p>
                        <p><em>Languages: </em>Agile Certified Scrum Master</p>
                    </div>
                    <div>
                        <h2>PROFESSIONAL EXPERIENCE</h2>
                        <div class="clearfix">
                            <p class="float-left">Bob's Custom Websites - Chicago, IL</p>
                            <p class="float-right">2015-Present</p>
                        </div>
                        <p>Bob's Custom Websites builds custom web applications for clients across a large number of industries.</p>
                        <h3>Web Developer</h3>
                        <ul>
                            <li>Work with ES6, NodeJS, HTML, JavaScript, Work with ES6, NodeJS, HTML, JavaScript </li>
                            <li>Work with ES6, NodeJS, HTML, JavaScript</li>
                            <li>Work with ES6, NodeJS, HTML, JavaScript, Work with ES6, NodeJS, HTML, JavaScript, Work with ES6, NodeJS, HTML, JavaScript</li>
                        </ul>
                        <em>Key Contributions:</em>
                        <ul>
                            <li>Work with ES6, NodeJS, HTML, JavaScript, Work with ES6, NodeJS, HTML, JavaScript, Work with ES6, NodeJS, HTML, JavaScript</li>
                            <li>Work with ES6, NodeJS, HTML, JavaScript, Work with ES6</li>
                        </ul>
                    </div>
                    <div>
                        <h2>EDUCATION</h2>
                        <div>
                            <p>DeVry</p>
                        </div>
                    </div>
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

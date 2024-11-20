<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./res/services/servicesStyle.css">
    <link rel="stylesheet" href="./res/style.css">
    <title>myGym|Services</title>
</head>
<body class="m-p-o">
    <header>
        <div class="nav-behind"></div>
        <nav>
            
            <div><a href="index.html">Home</a></div>
            <ul class="m-p-o">
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="team.html">Our Team</a></li>
                <li><a href="quiz.html">Quiz</a></li>
            </ul>
        </nav>
        <div class="below">
            <div class = "article m-auto"><h1>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1><span class="ita">"Consectetur, adipisci dolore iure porro et maiores at quibusdam eos modi voluptates labore optio esse, asperiores perferendis aperiam magni delectus earum ut."</span></div>
            <img src="./media/services/services_1.jpg">
        </div>
    </header>
    <main>
        <div class="workouts-header">
            <div>
                <h1>Members joined:</h1>
                <div class="member">1272</div>
            </div>
            <div>
                <h1>Competitions won:</h1>
                <div class="comp">465</div>
            </div>
            <div>
                <h1>Jaws broken:</h1>
                <div class="jaw">50</div>
            </div>
        </div>
        <div class = "workouts m-auto">
            <div>
                <img class = "img_left" src="./media/services/workout-1.jpg">
                <div class="workout-text text-r">
                    <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
                    <p>Aut dolorum fugiat laboriosam unde eos iste, velit pariatur culpa vero rerum laudantium quia fuga nesciunt eligendi atque nulla numquam sit ducimus? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt veritatis voluptatum ad reiciendis eius dolorum quas, magnam quidem dignissimos et necessitatibus, rerum quisquam non adipisci eligendi atque libero, beatae reprehenderit.</p>
                    <a href="" class="btn">See More</a>
                </div>
                
            </div>
            <hr>
            <div>
                <div class="workout-text text-l">
                    <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
                    <p>Aut dolorum fugiat laboriosam unde eos iste, velit pariatur culpa vero rerum laudantium quia fuga nesciunt eligendi atque nulla numquam sit ducimus? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt veritatis voluptatum ad reiciendis eius dolorum quas, magnam quidem dignissimos et necessitatibus, rerum quisquam non adipisci eligendi atque libero, beatae reprehenderit.</p>
                    <a href="" class="btn">See More</a>
                </div>
                <img class = "img_right" src="./media/services/workout-2.jpg">
                
            </div>
            <hr>
            <div>
                <img class="img_left" src="./media/services/workout-3.jpg">
                <div class="workout-text text-r">
                    <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
                    <p>Aut dolorum fugiat laboriosam unde eos iste, velit pariatur culpa vero rerum laudantium quia fuga nesciunt eligendi atque nulla numquam sit ducimus? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt veritatis voluptatum ad reiciendis eius dolorum quas, magnam quidem dignissimos et necessitatibus, rerum quisquam non adipisci eligendi atque libero, beatae reprehenderit.</p>
                    <a href="" class="btn">See More</a>
                </div>
                
            </div>
        </div>
        <div class="parallax parallax-1">
                <h1 class="parallaxtext">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                <span class="ita parallaxtext">"Consectetur, adipisci dolore iure porro et maiores at quibusdam eos modi voluptates labore optio esse, asperiores perferendis aperiam magni delectus earum ut."</span>
        </div>
        <div class="memberships">
            <div class="prices glass">
                <div class="prices-header m-auto">One Time Entry Prices</div>
                <div>
                    <ul class="m-p-o m-auto">
                        <li>
                            <p>Felnőtt</p>
                            <span class="separator"></span>
                            <p>1500 Ft</p>
                        </li>
                        <li>
                            <p>Diák</p>
                            <span class="separator"></span>
                            <p>1200 Ft</p>
                        </li>
                        <li>
                            <p>Nyugger</p>
                            <span class="separator"></span>
                            <p>1200 Ft</p>
                        </li>
                        <li>
                            <p>PSN dolgozó</p>
                            <span class="separator"></span>
                            <p>1000 Ft</p>
                        </li>
                    </ul>
                    <div class="details-wrapper">
                        <div class="details">
                            <p>Details</p>
                            <div id="onetimeDropdown" class="triangle" onclick="toggleDropdown(this,'onetimeContent')"></div>
                        </div>
                        <div id = "onetimeContent" class="dropdown-content">
                            <p>This is the dropdown content. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, ipsa.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="prices glass">
                <div class="prices-header m-auto">Membership Prices</div>
                <div>
                    <ul class="m-p-o m-auto">
                        <li>
                            <p>Felnőtt</p>
                            <span class="separator"></span>
                            <p>15000 Ft</p>
                        </li>
                        <li>
                            <p>Diák</p>
                            <span class="separator"></span>
                            <p>13000 Ft</p>
                        </li>
                        <li>
                            <p>Nyugger</p>
                            <span class="separator"></span>
                            <p>12000 Ft</p>
                        </li>
                        <li>
                            <p>PSN dolgozó</p>
                            <span class="separator"></span>
                            <p>10000 Ft</p>
                        </li>
                    </ul>
                    <div class="details-wrapper">
                        <div class="details">
                            <p>Details</p>
                            <div id="membershipDropdown" class="triangle" onclick="toggleDropdown(this,'membershipContent')"></div>
                        </div>
                        <div id = "membershipContent" class="dropdown-content">
                            <p>This is the dropdown content. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, ipsa.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="parallax parallax-2">
            <h1 class="parallaxtext">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
            <span class="ita parallaxtext">"Consectetur, adipisci dolore iure porro et maiores at quibusdam eos modi voluptates labore optio esse, asperiores perferendis aperiam magni delectus earum ut."</span>
        </div>
        <div class="contact">
            <div class="contact-wrapper m-auto">
                <div class="contact-info glass-left">
                    <div class="contact-info-wrapper">
                        <div class="address">
                            <h4>Where can you find us?</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="phone">
                            <div class="phone-info">
                                <h4>Phone</h4>
                                <p>+3671324761</p>
                            </div>
                        </div>
                        <div class="email">
                            <div class="email-info">
                                <h4>Email</h4>
                                <p>adsfasd@asfdsf.com</p>
                            </div>
                        </div>
                        <div>
                            <h4>What we look like from the outside</h4>
                            <img class="m-auto" src="./media/services/frontview.jpg">
                        </div>
                    </div>
                </div>
                <div class="contact-form glass-right">
                    <div class="contact-form-wrapper">
                        <div><h2>Send us a message!</h2></div>
                        <form action="">
                        
                            <div>
                                <label for="name">Név</label>
                                <input type="text" id="name">
                            </div>
                            
                            <div>
                                <label for="email">E-mail cím</label>
                                <input type="email" id="email">
                            </div>

                            <div>
                                <label for="phone">Telefonszám</label>
                                <input type="text" id="phone">
                            </div>
                            
                            <div>
                                <label for="message">Üzeneted szövege</label>
                                <textarea id="message"></textarea>
                            </div>
                            <div class="form-btn">
                                <button href="">Elküldöm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="end">
            <div class="social">
                <h2 class="m-auto">Our social media pages</h2>
                <ul>
                    <li>
                        <a href="https://www.facebook.com/"><img src="./media/services/facebook.png"></a>
                        <a href="https://www.facebook.com/"><p>Facebook</p></a>
                    </li>                    
                    <li>
                        <a href="https://www.instagram.com/"><img src="./media/services/instagram.png"></a>
                        <a href="https://www.instagram.com/"><p>Instagram</p></a>
                    </li>                    
                    <li>
                        <a href="https://www.youtube.com/"><img src="./media/services/youtube.png"></a>
                        <a href="https://www.youtube.com/"><p>Youtube</p></a>
                    </li>                    
                    <li>
                        <a href="https://www.tiktok.com/"><img src="./media/services/tik-tok.png"></a>
                        <a href="https://www.tiktok.com/"><p>Tiktok</p></a>
                    </li>
                </ul>
            </div>
            <div class="opening">
                <ul class="m-p-o">
                    <li>
                        <p>Monday</p>
                        <span class="separator"></span>
                        <p>8:00-20:00</p>
                    </li>
                    <li>
                        <p>Tuesday</p>
                        <span class="separator"></span>
                        <p>8:00-20:00</p>
                    </li>
                    <li>
                        <p>Wednesday</p>
                        <span class="separator"></span>
                        <p>8:00-20:00</p>
                    </li>
                    <li>
                        <p>Thursday</p>
                        <span class="separator"></span>
                        <p>8:00-20:00</p>
                    </li>
                    <li>
                        <p>Friday</p>
                        <span class="separator"></span>
                        <p>8:00-20:00</p>
                    </li>
                    <li>
                        <p>Saturday</p>
                        <span class="separator"></span>
                        <p>6:00-24:00</p>
                    </li>
                    <li>
                        <p>Sunday</p>
                        <span class="separator"></span>
                        <p>6:00-22:00</p>
                    </li>
                </ul>
            </div>
            <div class="logo">
                <a href="index.html"><img src="./media/services/ring.png"></a>
                <a href="index.html"><h1>Gloved Glory</h1></a>
                <a href="index.html"><h2>Boxing Club</h2></a>
            </div>
        </div>
    </footer>
    <script src = "./res/services/servicesScript.js"></script>
    <script src = "./res/script.js"></script>
</body>
</html>
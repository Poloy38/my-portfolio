<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfoio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.8.1/css/foundation.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.8.1/css/foundation-float.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="container">
        <img class="logo" src="me1.png" alt="">
        <h1 class="name">Rattaphon Siriphan</h1>
        <p class="bio">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, soluta fugit ea totam incidunt ad sequi eos possimus corrupti est earum error, animi, illo id distinctio modi pariatur provident eum!</p>
        <hr>
        <h3>My Skill</h3>
        <div class="row">
            <div class="small-6 columns">
                <div class="work">
                    <h5>sql</h5>
                    <br>
                    <img src="https://images.unsplash.com/photo-1598520106864-72ed7919100b?q=80&w=1776&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </div>
            </div>
            <div class="small-6 columns">
                <div class="work">
                    <h5>Python</h5>
                    <br>
                    <img src="https://images.unsplash.com/photo-1598520106864-72ed7919100b?q=80&w=1776&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </div>
            </div>
            <div class="small-6 columns">
                <div class="work">
                    <h5>PHP</h5>
                    <br>
                    <img src="https://images.unsplash.com/photo-1598520106864-72ed7919100b?q=80&w=1776&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </div>
            </div>
            <div class="small-6 columns">
                <div class="work">
                    <h5>HTML</h5>
                    <br>
                    <img src="https://images.unsplash.com/photo-1598520106864-72ed7919100b?q=80&w=1776&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </div>
            </div>
            <div class="small-6 columns">
                <div class="work">
                    <h5>CSS</h5>
                    <br>
                    <img src="https://images.unsplash.com/photo-1598520106864-72ed7919100b?q=80&w=1776&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </div>
            </div>
            <div class="small-6 columns">
                <div class="work">
                    <h5>C#</h5>
                    <br>
                    <img src="https://images.unsplash.com/photo-1598520106864-72ed7919100b?q=80&w=1776&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </div>
            </div>
        </div>

        <h3>Contact Me</h3>
        <hr>
        <form action="sendmail.php" method="post">
            <div class="row">
                <div class="medium-6 columns">
                    <label for="name">Name:
                        <input type="text" placeholder="Your name" name="name" id="">
                    </label>
                </div>
                <div class="medium-6 columns">
                    <label for="email">Email:
                        <input type="text" placeholder="Your Email" name="email" id="">
                    </label>
                </div>
                <div class="medium-12 columns">
                    <label for="message">Message:
                        <textarea name="message"></textarea>
                    </label>
                    <button class="button" type="submit" name="sendmail">Send</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
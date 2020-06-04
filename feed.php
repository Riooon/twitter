<?php

$id = $_POST["id"];
$pass = $_POST["pass"];
$tweet = $_GET["tweet"];
// var_dump($tweet);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/feed.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body>
    <div class="left">
        <dl class="list-entire">
            <dl>
                <dt><i class="fab fa-twitter"></i></dt>
                <dd></dd>
            </dl>
            <dl>
                <dt><i class="fas fa-home"></i></dt>
                <dd>Home</dd>
            </dl>
            <dl>
                <dt><i class="fas fa-hashtag"></i></dt>
                <dd>Explore</dd>
            </dl>
            <dl>
                <dt><i class="far fa-bell"></i></dt>
                <dd>Notifications</dd>
            </dl>
            <dl>
                <dt><i class="far fa-envelope"></i></dt>
                <dd>Messages</dd>
            </dl>
            <dl>
                <dt><i class="far fa-bookmark"></i></i></dt>
                <dd>Bookmarks</dd>
            </dl>
            <dl>
                <dt><i class="far fa-list-alt"></i></i></dt>
                <dd>Lists</dd>
            </dl>
            <dl>
                <dt><i class="fas fa-user-alt"></i></dt>
                <dd>Profile</dd>
            </dl>
            <dl>
                <dt><i class="fas fa-ellipsis-h"></i></dt>
                <dd>More</dd>
            </dl>
        </dl>
        <div class="tweet">
            <a href="#">Tweet</a>
        </div>
    </div>

    <div class="center">
        <div class="center-fixed">
            <div class="arrow">
                <i class="fas fa-arrow-left"></i>
            </div>
            <div class="names">
                <h4>Rio</h4>
                <p>0 tweets</p>
            </div>
        </div>
        <div class="center-profile">
            <div class="center-pic">
                <img src="img/profile.jpg" alt="">
            </div>
            <div class="profile-box">
                <div class="edit-profile">
                    <a href="#">Edit profile</a>
                </div>
                <div class="profile-name">
                    <h3>Rio</h3>
                    <p>@riodelion</p>
                </div>
                <div class="profile-tagline">
                    <p>すもももももももものうち。</p>
                </div>
                <div class="profile-info">
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i>Tokyo-to, Japan</li>
                        <li><i class="fas fa-link"></i>rio.tanaka.jp</li>
                        <li><i class="fas fa-golf-ball"></i>Born December 30, 1997</li>
                        <li><i class="far fa-calendar-alt"></i>Joined March 2020</li>
                    </ul>
                </div>
                <div class="profile-follows">
                    <h4><span>0</span> following</h4>
                    <h4><span>0</span> followers</h4>
                </div>
            </div>
            
            <div class="tweet-list">
                <ul>
                    <li>Tweets</li>
                    <li>Tweets & replies</li>
                    <li>Media</li>
                    <li>Likes</li>
                </ul>
            </div>
        </div>

        <!-- JSで制御、クラス追加で表示されるように -->
        <div class="tweet-card">
            <div class="picture">
                <img src="img/profile.jpg" alt="">
            </div>
            <div class="text">
                <div class="info">
                    <h4>Rio</h4>
                    <p>@riodelion</p>
                </div>
                <div class="description">
                    <p id="insertHere"><?php echo $tweet; ?></p>
                </div>
                <div class="reaction">
                    <i class="far fa-comment"></i>
                    <i class="fas fa-retweet"></i>
                    <i class="far fa-heart"></i>
                    <i class="fas fa-external-link-alt"></i>
                    <i class="far fa-chart-bar"></i>
                </div>
            </div>
        </div>

        <div class="popup">
            <form method="get" action="" target="#insertHere">
                <textarea name="tweet" id="" cols="30" rows="7"></textarea>
                <input type="submit" value="Tweet">
            </form>
        </div> 
    </div>

    <div class="right">
        <h2>おかえりなさい<br><span class="colored"><?= htmlspecialchars($id, ENT_QUOTES); ?></span>さん！</h2>
        <h2>パスワードは<br><span class="colored"><?= htmlspecialchars($pass, ENT_QUOTES); ?></span>だよ！</h2>
    </div>

<!-- ここからJavascript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(".tweet").on("click", function(){
    $(".popup").fadeIn();
});

// $(".popup:not(.popup form)").on("click", function(){
//     $(".popup").fadeOut();
// });

$("textarea").focus();


</script>
</body>
</html>
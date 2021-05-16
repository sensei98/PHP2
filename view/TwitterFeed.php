<?php
    include '../controller/TwitterOAuth.php';
    $ppic = str_replace("normal","400x400",$feedData[0]->user->profile_image_url_https);

    $username = $feedData[0]->user->name;
    $userScreenName = $feedData[0]->user->screen_name;
    $tweetsNum = $feedData[0]->user->statuses_count;
    $followers = $feedData[0]->user->followers_count;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Twitter feed</title>
</head>
<body>
<main data-router-wrapper>
    <section class="feed-container" data-router-view="feed">
        <section class= "user-info">
            <img src = "<?php echo $ppic; ?>" class="img-thumbnail" />
            <h2><?php echo $username;?></h2>
            <a href="https://twitter.com/<?php echo $userScreenName; ?>" target="_blank">@<?php echo $userScreenName?></a>
        </section>
        <section class="tweet-info">
            <article class="fnum"><article>Tweets</article><article class="badge"><?php echo $tweetsNum; ?></article></article>
            <article class="fnum"><article>Followers</article><article class="badge"><?php echo $followers; ?></article></article>
        </section>

        <section class="tweet-box">
            <h2>Latest tweets</h2>
            <section class="tweets-widget">
                <ul class="tweet-list">
                <?php
                    foreach($feedData as $tweet){
                            $latestTweet = $tweet->text;
                            $latestTweet = preg_replace('/https:\/\/([a-z0-9_\.\-\+\&\!\#\~\/\,]+)/i', '<a href="https://$1" target="_blank">https://$1</a>', $latestTweet);
                            $latestTweet = preg_replace('/@([a-z0-9_]+)/i', '<a class="tweet-author" href="https://twitter.com/$1" target="_blank">@$1</a>', $latestTweet);
                            $tweetTime = date("D M d H:i:s",strtotime($tweet->created_at));
                ?>
                <li class="tweet-wrapper">
                    <section class="tweet-thumb">
                        <span><a href="<?php echo $tweet->user->url; ?>" title="<?php echo $tweet->user->name; ?>"><img alt="" src="<?php echo $tweet->user->profile_image_url; ?>"></a></span>
                    </section>
                    <section class="tweet-content">
                        <h3 class="title" title="<?php echo $tweet->text; ?>"><?php echo $latestTweet; ?></h3>
                        <span class="meta"><?php echo $tweetTime; ?> - <?php echo $tweet->favorite_count; ?> Favorite</span>
                    </section>
                </li>
                <?php }?>
                </ul>
            </section>
        </section>
    </section>
</main>
    
    <script src = "../scripts/scripts.js"></script>
</body>
</html>
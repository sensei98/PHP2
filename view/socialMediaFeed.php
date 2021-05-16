<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter feed</title>
</head>
<body>
    <?php include './inc/header.php' ?>
    <section class="twitterFeed-container">
        <section class="feed-inner-container">
            <article class="widget-container" style="text-align: center; ">
                <a href="https://twitter.com/elonmusk?ref_src=twsrc%5Etfw" 
                    class="twitter-follow-button" data-size="large" 
                    data-show-count="false">Follow @elonmusk</a>
                    <script async src="https://platform.twitter.com/widgets.js" 
                        charset="utf-8"></script>
                <br>

                <a class="twitter-timeline" data-width="900" data-height="900" data-theme="dark" 
                href="https://twitter.com/elonmusk?ref_src=twsrc%5Etfw">Tweets by elonmusk</a> 
                <script async src="https://platform.twitter.com/widgets.js" 
                    charset="utf-8"></script>
            </article>
        </section>
    </section>
</body>
</html>
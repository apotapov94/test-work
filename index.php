<?include 'includes/header.php';?>
    <main class="main container">
        <div class="content">
            <h1 class="heading">Полезная информация</h1>
            <?if($articlesArr):?>
                <?include 'includes/pagination.php';?>
                    <div class="articles">
                        <?foreach($articlesArr as $article):?>
                            <div class="article">
                                <?if(!empty($article['preview'])):?>
                                    <img class="article_preview" src="data:image/jpeg;base64,<?= base64_encode($article['preview'])?>" alt="<?=$article['title']?>">
                                <?else:?>
                                    <img src="img/300.png" class="article_preview" alt="article-img">
                                <?endif;?>
                                <div class="article-text" id="<?=$article['id']?>">
                                    <span class="article_title"><?=$article['title']?> <?=$article['id']?></span>
                                    <p class="article_desc"><?=$article['description']?></p>
                                </div>
                            </div>
                        <?endforeach;?>
                    </div> 
                <?include 'includes/pagination.php';?>  
            <?else:?>
                <span class="message-text">В данном разделе пока нет статей.</span>    
            <?endif;?>
        </div>
    </main>
<?include 'includes/footer.php';?>    
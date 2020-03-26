<div class="pagination-wrap">
                <div class="pagination">
                    <?if($pagesCount > 7):?>
                        <a href="?page=1" class="page-link <?=($page == 1)? "active" : ""?>">1</a>
                        <div class="dev-dots">
                            <?if(($page - 1) > 3):?>
                                <?$hidePage = 2;?>
                                <span>...</span>
                            <?endif;?>
                        </div>
                        <div class="tab-dots">
                            <?if(($page - 1) > 2):?>
                                <?$hidePage = 2;?>
                                <span>...</span>
                            <?endif;?>
                        </div>
                        <div class="mobile-dots">
                            <?if(($page - 1) > 2):?>
                                <?$hidePage = 2;?>
                                <span>...</span>
                            <?endif;?>
                        </div>
                        <div class="dev">
                            <?for($i = $page - 3; $i <= $page + 3; $i++):?>
                                <?if($i > $hidePage && $i < $pagesCount):?>
                                    <a href="?page=<?=$i?>" class="page-link <?=($i == $page)? "active" : ""?>"><?=$i?></a>
                                <?endif;?>    
                            <?endfor;?>
                        </div>
                        <div class="tab">
                            <?for($i = $page - 2; $i <= $page + 2; $i++):?>
                                <?if($i > $hidePage && $i < $pagesCount):?>
                                    <a href="?page=<?=$i?>" class="page-link <?=($i == $page)? "active" : ""?>"><?=$i?></a>
                                <?endif;?>    
                            <?endfor;?>
                        </div>
                        <div class="mobile">
                            <?for($i = $page - 1; $i <= $page + 1; $i++):?>
                                <?if($i > $hidePage && $i < $pagesCount):?>
                                    <a href="?page=<?=$i?>" class="page-link <?=($i == $page)? "active" : ""?>"><?=$i?></a>
                                <?endif;?>    
                            <?endfor;?>
                        </div>
                        <div class="dev-dots">
                            <?if(($page + 1) < ($pagesCount - 3)):?>
                                <span>...</span>
                            <?endif;?>
                        </div> 
                        <div class="tab-dots">
                            <?if(($page + 1) < ($pagesCount - 2)):?>
                                <span>...</span>
                            <?endif;?>
                        </div> 
                        <div class="mobile-dots">
                            <?if(($page + 1) < ($pagesCount - 1)):?>
                                <span>...</span>
                            <?endif;?>
                        </div>   
                        <a href="?page=<?=$pagesCount?>" class="page-link <?=($page == $pagesCount)? "active" : ""?>"><?=$pagesCount?></a>
                    <?else:?>    
                        <?for($i = 1; $i <= $pagesCount; $i++):?>
                            <a href="?page=<?=$i?>" class="page-link <?=($i == $page)? "active" : ""?>"><?=$i?></a>  
                        <?endfor;?>
                    <?endif;?>    
                </div>
            </div>
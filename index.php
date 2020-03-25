<?
    function getDataArray($result){
		$arr = array();
        while($row = $result->fetch_assoc()){
			$arr[] = $row; 
		}
		return $arr;
    }
	$server = "localhost";
	$username = "root";
	$password = "";
	$dbName = "test-work.ru";
    $mysqli = new mysqli($server,$username,$password,$dbName);
    $mysqli->query("SET NAMES 'utf8'");

    $result = $mysqli->query("SELECT * FROM `articles`");

    $mysqli->close();
    $articlesArr = getDataArray($result);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/adaptive.css">
</head>
<body>
    <div class="mobile-menu-mask hide"></div> 
    <header class="header">
        <div class="header-top">
            <ul class="header_menu container">
                <li>О компании</li>
                <li>Доставка</li>
                <li>Оплата</li>
                <li>Сервис</li>
                <li>Возврат</li>
                <li>Статьи</li>
                <li>Контакты</li>
            </ul>
        </div>
        <div class="header-middle-wrap">
            <div class="header-middle container">
                <img src="img/logo.png" class="header_logo" alt="logo">
                <form class="header_search dev" action="#">
                    <input type="text" placeholder="Поиск по товарам" class="header_search">
                    <img src="img/search-submit.png" alt="">
                </form>
                <div class="header_contacts">
                    <span class="phone">8 (800) 707 -99-24</span><br>
                    <span class="work-hours">9.00 - 20.00 ежедневно</span>
                </div>
                <div class="header_info-icons">
                    <div class="icon">
                        <img src="img/stat-icon.png" alt="stat">
                        <span>0</span>
                    </div>
                    <div class="icon">
                        <img src="img/like-icon.png" alt="like">
                        <span>6</span>
                    </div>
                    <div class="icon">
                        <img src="img/basket-icon.png" alt="basket">
                        <span>17</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom-wrap">
            <div class="header-bottom container">
                <div class="header_catalog">
                    <div class="catalog-item">
                        Продукция
                        <img src="img/energotech.png" alt="">
                    </div>
                    <div class="catalog-item">Стабилизаторы 220В</div>
                    <div class="catalog-item">Стабилизаторы 380В</div>
                    <div class="catalog-item">Генераторы 220В</div>
                    <div class="catalog-item">Генераторы 380В</div>
                    <div class="catalog-item">ИБП и батареи</div>
                    <div class="catalog-item">Прочая техника</div>
                </div>
                <div class="header_services">Услуги</div>
                <div class="header_stocks">Акции</div>
            </div>
            <div class="header_panel-mobile container">
                <form class="header_search mobile" action="#">
                    <input type="text" placeholder="Поиск по товарам" class="header_search">
                    <img src="img/search-submit.png" alt="">
                </form>
                <img src="img/menu-icon.png" class="header_mobile-menu-icon" alt="mobile menu">
            </div>
        </div>
        <div class="breadcrumps-wrap">
            <ul class="breadcrumps container">
                <li>Главная</li>
                <li>Статьи</li>
            </ul>
        </div>  
        <div class="header_mobile-menu hide-mobile">
            <img src="img/white-cross.png" class="header_mobile-close-icon">
            <ul class="header_menu">
                <li>О компании</li>
                <li>Доставка</li>
                <li>Оплата</li>
                <li>Сервис</li>
                <li>Возврат</li>
                <li>Статьи</li>
                <li>Контакты</li>
            </ul>
            <div class="header_catalog">
                <div class="catalog-item">
                    Продукция
                    <img src="img/energotech.png" alt="">
                </div>
                <div class="catalog-item">Стабилизаторы 220В</div>
                <div class="catalog-item">Стабилизаторы 380В</div>
                <div class="catalog-item">Генераторы 220В</div>
                <div class="catalog-item">Генераторы 380В</div>
                <div class="catalog-item">ИБП и батареи</div>
                <div class="catalog-item">Прочая техника</div>
            </div>
            <div class="header_services">Услуги</div>
            <div class="header_stocks">Акции</div>
        </div> 
    </header>
    <main class="main container">
        <div class="content">
            <h1 class="heading">Полезная информация</h1>
            <div class="articles">
                <?foreach($articlesArr as $article):?>
                    <div class="article">
						<?if(!empty($article['preview'])):?>
							<img class="article_preview" src="data:image/jpeg;base64,<?= base64_encode($article['preview'])?>" alt="<?=$article['title']?>">
						<?else:?>
							<img src="img/300.png" class="article_preview" alt="article-img">
						<?endif;?>
                        <div class="article-text">
                            <span class="article_title"><?=$article['title']?></span>
                            <p class="article_desc"><?=$article['description']?></p>
                        </div>
                    </div>
                <?endforeach;?>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="fmain container">
            <div class="footer_contacts">
                <span class="adress">121471, г.Москва ул. Рябиновая 55 стр. 28</span>
                <a class="email" href="mailto:prestizh06@mail.ru">prestizh06@mail.ru</a>
                <a class="phone" href="tel:88007079924">8 (800) 707-99-24</a>
                <a href="#" class="contacts-link">контакты</a>
            </div>
            <div class="footer_work-time">
                <span>Режим работы:</span>
                <span>Пн-чт с 8.00 до 19.00</span>
                <span>Пт с 8.00 до 17.00</span>
                <span>Сб с 10.00 до 15.00</span>
                <span>Вс (по предварительной договоренности).</span>
            </div>
            <div class="footer_info">
                <ul class="footer_menu">
                    <li><a href="#">О компании</a></li>
                    <li><a href="#">Акции</a></li>
                    <li><a href="#">Доставка</a></li>
                    <li><a href="#">Оплата</a></li>
                    <li><a href="#">Сервис</a></li>
                    <li><a href="#">Возврат</a></li>
                </ul>
                <a href="#" class="footer_polit-conf-link">Политика обработки персональных данных</a>
            </div>
            <div class="footer_copyright">
                <img src="../img/copyright.png" alt="copyright">
                <span>Разработка<br>
                и продвижение сайта</span>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
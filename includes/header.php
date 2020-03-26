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

    if(isset($_GET['page'])){
        $page = $_GET['page'];
    } else {
        $page = 1;
    }

    /*for($i = 0; $i < 10; $i++){
        $mysqli->query("INSERT INTO articles (`title`,`description`) VALUES ('Тестовая статья','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis')");
    };*/

    $limit = 6;
    $pagesToShow = 3;
    $from = $limit * ($page - 1);
    $hidePage = 1;
    $result = $mysqli->query("SELECT * FROM articles WHERE id > 0 LIMIT $from,$limit");

    $getELems = $mysqli->query("SELECT COUNT(*) as count FROM articles");
    $elems = mysqli_fetch_assoc($getELems);
    $count = $elems['count'];
    $pagesCount = ceil($count/$limit);

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
                <li><a href="#">О компании</a></li>
                <li><a href="#">Доставка</a></li>
                <li><a href="#">Оплата</a></li>
                <li><a href="#">Сервис</a></li>
                <li><a href="#">Возврат</a></li>
                <li><a href="#">Статьи</a></li>
                <li><a href="#">Контакты</a></li>
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
                        <a href="#">Продукция<br>
                        <img src="img/energotech.png" alt=""></a>
                    </div>
                    <div class="catalog-item"><a href="#">Стабилизаторы 220В</a></div>
                    <div class="catalog-item"><a href="#">Стабилизаторы 380В</a></div>
                    <div class="catalog-item"><a href="#">Генераторы 220В</a></div>
                    <div class="catalog-item"><a href="#">Генераторы 380В</a></div>
                    <div class="catalog-item"><a href="#">ИБП и батареи</a></div>
                    <div class="catalog-item"><a href="#">Прочая техника</a></div>
                </div>
                <div class="header_services"><a href="#">Услуги</a></div>
                <div class="header_stocks"><a href="#">Акции</a></div>
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
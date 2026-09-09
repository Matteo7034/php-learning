<?php
    
    setcookie("fav_food","pizza",time()+(86400*2),"/");
    setcookie("fav_drink","coffe",time()+(86400*2),"/");
    setcookie("fav_dessert","ice cream ",time()+(86400*2),"/");


    require_once __DIR__ . '/../includes/header.php';

    echo "<div style='backgroud: #f0f0f0; padding: 10px; margin-botton: 20px;'>";
    echo "<strong> Cookie correnti nel browser:</strong><br>";

    foreach($_COOKIE as $key => $value){
        echo htmlspecialchars($key) . " = " . htmlspecialchars($value) . "<br>";
    }
    if(isset($_COOKIE["fav_food"])){
        echo"<p>BUY SOME " . htmlspecialchars($_COOKIE["fav_food"]) . " !!!</p>";
    }
    else{
        echo"<p> I don't know your favorite food (ricarica la pagina se è la prima volta!)</p>";
    }
    echo "</div>";

    $page = $_GET['page'] ?? 'home';
    switch ($page) {
        case 'about':
            require_once __DIR__ . '/../views/about.php';
            break;
        case 'home':
        default:
            require_once __DIR__ . '/../views/home.php';
            break;
    }

    // Includi il footer comune
    require_once __DIR__ . '/../includes/footer.php';

?>

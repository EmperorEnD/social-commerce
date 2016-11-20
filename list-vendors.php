<?php 
session_start() ;
include 'controllers/base/head.php' ?>
<?php include 'controllers/navigation/index-before-login-navigation.php' ?>
<?php include '_database/database.php';?>
<!DOCTYPE html>
<html>
<header>
<link href="controllers/base/coffee-type.css" rel="stylesheet"> 
</header>

<body>
<?php 


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //something posted

    if (isset($_POST['americano'])) {
        echo "Americano<br><br>";
        $item ='americano';
        $_SESSION['item'] = $item ;
        
   include 'components/result-list-vendors.php';
        
    } 
    elseif(isset($_POST['basic'])) {
        echo "Basic <br><br>";
        $item='basic';
        $_SESSION['item'] = $item ;
        include 'components/result-list-vendors.php';
    }
     elseif(isset($_POST['cafe-latte'])) {
        echo "Cafe Latte <br><br>";
        $item='cafe-latte';
        $_SESSION['item'] = $item ;
        include 'components/result-list-vendors.php';
    }
     elseif(isset($_POST['cafe-melange'])) {
        echo "Cafe Melange<br><br>";
        $item ='cafe-melange';
        $_SESSION['item'] = $item ;
        include 'components/result-list-vendors.php';
    }
     elseif(isset($_POST['cafe-moncha'])) {
        echo "Cafe Mocha<br><br>";
        $item = 'cafe-moncha';
        $_SESSION['item'] = $item ;
        include 'components/result-list-vendors.php';
    }
     elseif(isset($_POST['con-pana'])) {
        echo "Con Pana<br><br>";
        $item ='con-pana';
        $_SESSION['item'] = $item ;
        include 'components/result-list-vendors.php';
        
    }
     elseif(isset($_POST['espresso'])) {
        echo "Espresso<br><br>";
        $item ='espresso';
        $_SESSION['item'] = $item ;
        include 'components/result-list-vendors.php';
        
    }
    
     elseif(isset($_POST['flat-white'])) {
        echo "Flat White<br><br>";
        $item ='flat-white';
        $_SESSION['item'] = $item ;
        include 'components/result-list-vendors.php';
    }
     elseif(isset($_POST['galo'])) {
        echo "Galo<br><br>";
        $item = 'galo';
        $_SESSION['item'] = $item ;
        include 'components/result-list-vendors.php';
    }
     elseif(isset($_POST['long-black'])) {
        echo "Long Black<br><br>";
        $item = 'long-black';
        $_SESSION['item'] = $item ;
        include 'components/result-list-vendors.php';
    }
     elseif(isset($_POST['macchiota'])) {
        echo "Macchiota<br><br>";
        $item = 'macchiota';
        $_SESSION['item'] = $item ;
        include 'components/result-list-vendors.php';
    }
}

?>
</body>

<footer>
</footer>
</html>
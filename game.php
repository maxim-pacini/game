<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="box">
        <img src="./images/coins.png" alt="">
        
        <?php echo date('d/m/Y'); ?>
    </div>



    <button id="monBouton">+1</button>
    <p>Valeur : <span id="valeur">0</span></p>
    <?php
    session_start();
    if (!isset($_SESSION['compteur'])) {
        $_SESSION['compteur'] = 0;
    }
    $_SESSION['compteur']++;
    echo $_SESSION['compteur'];
    ?>
















<script>
document.getElementById('bouton').addEventListener('click', function() {
    fetch('index.php').then(response => response.text()).then(data => {
            document.getElementById('valeur').innerText = data;
        });
});
</script>
    
</body>
</html>
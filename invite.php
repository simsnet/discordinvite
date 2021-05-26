<?php
$name = $_GET['name'];
$invite = $_GET['invite'];
$icon = $_GET['icon'];
?>

<head>
    <link rel=stylesheet href="./css/invite.css">
</head>

<body>
    <div class="main">
        <img class="icon" src="<?php echo $icon ?>"/>
        <span class="name"><?php echo $name ?></span>
        <span class="invite">discord.gg/<?php echo $invite ?></span>
    </div>
</body>

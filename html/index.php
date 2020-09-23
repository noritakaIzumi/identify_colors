<?php
require_once __DIR__ . '/../model/create_images.php';
$imageCount = 3;
main($imageCount);
?>

<title>微妙に色違うやつ当てるゲーム</title>
<div style="text-align: center">
    <?php if (isset($_GET['result'])) { ?>
        <p>結果：<?= htmlspecialchars($_GET['result']) ?></p>
    <?php } ?>
    <h1>微妙に色違うやつ当てるゲーム</h1>
    <h2>違う色のパネルをクリックしてね</h2>
    <?php for ($i = 0; $i < $imageCount; ++$i) { ?>
        <a href="judge.php?r=<?= $i ?>"><img src="get_image.php?filename=image<?= $i ?>.png" alt="sample"></a>
    <?php } ?>
    <br>
    <a href="index.php"><button>Delete result</button></a>
</div>

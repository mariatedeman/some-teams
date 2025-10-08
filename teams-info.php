<?php

require_once __DIR__ . '/components/header.php';
require_once __DIR__ . '/recources/data.php';

$id = $_GET['id'];

?>

<!-- HEADER -->
<div class="teams-presentation">


    <!-- INNEHÅLL -->
    <div class="teams-presentation-header">

        <!-- LOGGA OCH TEXT -->
        <div class="teams-presentation-logo-text">

            <!-- LOGGA -->
            <div class="teams-presentation-logo">
                <img src=" <?= $teams[$id]['logo'] ?> ">
            </div>

            <!-- TEXT -->
            <div class="teams-presentation-text">

                <h1>
                    <?= $id; ?>
                </h1>

                <p>
                    <?= $teams[$id]["league"] ?>
                </p>

            </div>

        </div>

        <!-- KNAPP -->
        <div class="teams-presentation-button">
            <a class="button-primary" href=" <?= $teams[$id]['url'] ?> " target="_blank"> Visit website </a>
        </div>

    </div>

</div>

<!-- BAKGRUND -->
<div class="opponents">


    <?php

    for ($i = 0; $i < count($teams[$id]['opponents']); $i++) :

        $opponent_id = $teams[$id]['opponents'][$i] ?>


        <div class="opponents-box">

            <div class="teams-logo">
                <img src=" <?= $teams[$opponent_id]['logo'] ?> ">
            </div>

            <h2>
                <?= $teams[$id]['opponents'][$i] ?>
            </h2>

            <!-- BUTTON -->
            <a href="/teams-info.php?id=<?= $opponent_id ?>" class="button-primary">Learn more</a>

        </div>

    <?php endfor ?>





</div>









<?php

require_once __DIR__ . '/components/footer.php';

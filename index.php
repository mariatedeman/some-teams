<?php

require_once __DIR__ . '/components/header.php';
require_once __DIR__ . '/recources/data.php';

?>

<div class="one-clmn-grey">
    <p>Presentation</p>
</div>

<div class="teams-grid">

    <?php
    foreach ($teams as $team => $team_info) :
    ?>

        <div class="teams-box">

            <div class="teams-logo">
                <img src=" <?= $team_info['logo'] ?> ">
            </div>

            <h2>
                <?= $team ?>
            </h2>

            <h3>
                <?= $team_info['city'] ?>
            </h3>

            <p>
                Ranking: <?= $team_info['uefa-coefficient-ranking'] ?>
            </p>

        </div>

    <?php
    endforeach;
    ?>

</div>









<?php

require_once __DIR__ . '/components/footer.php';

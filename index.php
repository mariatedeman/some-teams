<?php

require_once __DIR__ . '/components/header.php';
require_once __DIR__ . '/recources/data.php';

?>

<div class="one-clmn-grey">
    <p>Presentation</p>
</div>

<div class="teams">

    <?php
    foreach ($teams as $team) :
    ?>

        <div>
            <img src=" <?= $team['logo'] ?> ">
            <h3>
                <?= $team['city'] ?>
            </h3>
        </div>

    <?php
    endforeach;
    ?>

</div>









<?php

require_once __DIR__ . '/components/footer.php';

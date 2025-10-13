<?php

require_once __DIR__ . '/components/header.php';
require_once __DIR__ . '/recources/data.php';

// --- GET ID FROM URL
$id = $_GET['id'];

?>

<!-- TEAMS PRESENTATION -->
<div class="teams-presentation">

    <div class="teams-presentation-header">

        <!-- LOGO AND TEXT -->
        <div class="teams-presentation-logo-text">

            <!-- LOGO -->
            <div class="teams-presentation-logo">
                <img src=" <?= $teams[$id]['logo'] ?> ">
            </div>

            <!-- TEXT -->
            <div class="teams-presentation-text">

                <h1>
                    <?= $id; ?>
                </h1>

                <p>
                    <?php

                    // --- REMOVE SLASH FROM LEAGUE
                    $league = $teams[$id]["league"];
                    $league = stripslashes($league);

                    // --- FIRST CHARACTER UPPERCASE
                    echo ucwords($league);

                    ?>
                </p>
                <p class="uefa-ranking">
                    <?php
                    echo "Uefa ranking: " . $teams[$id]['uefa-coefficient-ranking'];
                    ?>
                </p>

            </div>

        </div>

        <!-- BUTTON -->
        <div class="teams-presentation-button">
            <a class="button-primary" href=" <?= $teams[$id]['url'] ?> " target="_blank">Visit website</a>
        </div>

    </div>

</div>

<!-- OPPONENTS -->

<!--- BACKGROUND IMAGE --->
<div class="background-wave">

    <h2 class="h2-white">Opponents</h2>

    <div class="opponents">

        <?php

        // --- MAPPING BAYERN MÜNICH
        $opponent_name_map = [
            'Bayern Münich' => 'Bayern Munich',
        ];

        // --- CREATE ONE CARD PER OPPONENT
        for ($i = 0; $i < count($teams[$id]['opponents']); $i++) :

            $opponent_id = $teams[$id]['opponents'][$i];
            // --- SEARCH FOR MAPPING. IF NOT FOUND, USE ORIGINAL
            $opponent_key = $opponent_name_map[$opponent_id] ?? $opponent_id;
        ?>

            <div class="opponents-box">

                <div class="opponents-logo">
                    <img src=" <?= $teams[$opponent_key]['logo'] ?> ">
                </div>

                <h2>
                    <?= $teams[$id]['opponents'][$i] ?>
                </h2>

                <p class="uefa-ranking">
                    Uefa ranking: <?= $teams[$opponent_key]['uefa-coefficient-ranking'] ?>
                </p>

                <!-- BUTTON -->
                <a href="/teams-info.php?id=<?= $opponent_key ?>" class="button-primary">Learn more</a>

            </div>

        <?php endfor ?>

    </div>

</div>


<?php

require_once __DIR__ . '/components/footer.php';

<?php
require_once 'components/projects/project-data.php';
require_once 'components/projects/project-card.php';
?>

<div class="container">
    <h2 class="section-title">Projects</h2>
    <div class="projects-grid">
        <?php foreach($projects as $project): ?>
            <?php renderProjectCard($project); ?>
        <?php endforeach; ?>
    </div>
</div>
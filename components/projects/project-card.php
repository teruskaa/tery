<?php
function renderProjectCard($project) {
    ?>
    <div class="project-card slide-in">
        <img 
            src="<?php echo htmlspecialchars($project['image']); ?>" 
            alt="<?php echo htmlspecialchars($project['title']); ?>"
            class="project-image"
            loading="lazy"
        >
        <div class="project-overlay">
            <h3><?php echo htmlspecialchars($project['title']); ?></h3>
            <p><?php echo htmlspecialchars($project['description']); ?></p>
            <div class="project-tags">
                <?php foreach($project['tags'] as $tag): ?>
                    <span class="tag"><?php echo htmlspecialchars($tag); ?></span>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php
}
?>
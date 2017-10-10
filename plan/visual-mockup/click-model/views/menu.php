<input type="checkbox" id="menu-toggle" class="menu-toggle">
<label id="menu-toggle-label" for="menu-toggle" class="fa fa-bars fa-2x menu-toggle-button"></label>
<div class="navigation">
    <nav class="main-navigation">
        <h2 class="main-navigation--title">Navigation principale</h2>
        <?php foreach( $menu as $menu_item ): ?>
            <a class="main-navigation--link" href="#"><?php echo $menu_item[ "name" ]; ?></a>
        <?php endforeach; ?>
    </nav>
</div>

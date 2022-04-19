<header class="fb-sb n900">
    <h1 class="title-4xl text-n50"><?= ucfirst($title) ?></H1>
    <nav class="desktop">
        <a <?php if($title=="home"){ echo "class='active'";}else{echo "";}?> href="../interface/apphome.php">Home</a>
        <a <?php if($title=="research"){ echo "class='active'";}else{echo "";}?> href="../interface/appresearch.php">Research</a>
        <a <?php if($title=="user"){ echo "class='active'";}else{echo "";}?> href="../interface/appuser.php">User</a>
    </nav>
</header>

<nav class="mobile fb fb-sa">
    <a href="apphome.php">
        <img src="../../src/icons/<?php if($title=="home"){ echo "act-";}else{echo "";}?>home.svg" alt="home icon">
    </a>
    <a href="appresearch.php">
        <img src="../../src/icons/<?php if($title=="research"){ echo "act-";}else{echo "";}?>research.svg" alt="esearch icon">
    </a>
    <a href="appuser.php">
        <img src="../../src/icons/<?php if($title=="user"){ echo "act-";}else{echo "";}?>user.svg" alt="user icon">
    </a>
</nav>
<?php
include_once "banner.php";
include_once "damuc-sp.php";
include_once "sp-moi.php";
include_once "sp-banchay.php";
?>

<form action="ds-sp.php" method="get">
    <div class="search-container">
        <button class="search-btn" id="search">
            <i class="fas fa-search"></i> <!-- Icon tìm kiếm -->
        </button>
        <input type="text" class="search-input" id="searchInput" placeholder="Tìm kiếm...">
    </div>
</form>
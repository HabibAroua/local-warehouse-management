<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="index.php">
                <i class="ti-shield menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="ti-user menu-icon"></i>
                <span class="menu-title">User Profil</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="updateProfile.php?page=updateInfo"> Update your informations </a></li>
                    <li class="nav-item"> <a class="nav-link" href="updateProfile.php?page=updatePassword"> Update your password </a></li>
                </ul>
            </div>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-category" aria-expanded="false" aria-controls="ui-category">
                <i class="ti-paint-roller menu-icon"></i>
                <span class="menu-title">Categories managements</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-category">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="Category_Management.php?page=add">Add new Category</a></li>
                    <li class="nav-item"> <a class="nav-link" href="Category_Management.php?page=list">List of Category</a></li>
                </ul>
            </div>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="ti-briefcase menu-icon"></i>
                <span class="menu-title">Providers managements</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="Provider_Management.php?page=add">Add new Provider</a></li>
                    <li class="nav-item"> <a class="nav-link" href="Provider_Management.php?page=list">List of Providers</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-product" aria-expanded="false" aria-controls="ui-product">
                <i class="ti-briefcase menu-icon"></i>
                <span class="menu-title">Product managements</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-product">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="Product_Management.php?page=add">Add new Product</a></li>
                    <li class="nav-item"> <a class="nav-link" href="Product_Management.php?page=list">List of Product</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
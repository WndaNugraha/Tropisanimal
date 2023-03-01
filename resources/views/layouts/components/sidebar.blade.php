<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
    </div>
</div>
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class=" mt-3 mb-3  ">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item ml-1">
                <h4 class="nav-link text-light">
                    <i class="bi bi-grid-1x2-fill"></i>
                    <b>
                        <p class="fs-3 fw-bold">Dashboard</p>
                    </b>
                </h4>
            </li>
        </ul>
    </div>


    <!-- SidebarSearch Form -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open ">
                <a href="" class="nav-link bg-dark">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Data
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item ml-1">
                        <a href="../../../dashboard/artikel"
                            class="nav-link {{ ($title === 'Artikel') ? 'active' : '' }}">
                            <i class="bi bi-card-heading nav-icon"></i>
                            <p>Artikel</p>
                        </a>
                    </li>
                    <li class="nav-item ml-1">
                        <a href="../../../dashboard/berita"
                            class="nav-link {{ ($title === 'Berita') ? 'active' : '' }}">
                            <i class="bi bi-newspaper card-heading nav-icon"></i>
                            <p>Berita</p>
                        </a>
                    </li>
                    <li class="nav-item ml-1">
                        <a href="../../../dashboard/visimisi"
                            class="nav-link {{ ($title === 'Visi Misi') ? 'active' : '' }}">
                            <i class="bi bi-binoculars-fill card-heading nav-icon"></i>
                            <p>Visi Misi</p>
                        </a>
                    </li>
                    <li class="nav-item ml-1">
                        <a href="../../../dashboard/galeri"
                            class="nav-link {{ ($title === 'Galeri') ? 'active' : '' }}">
                            <i class="bi bi-image-fill card-heading nav-icon"></i>
                            <p>Galeri</p>
                        </a>
                    </li>
                    <li class="nav-item ml-1">
                        <a href="../../../dashboard/kontaks"
                            class="nav-link {{ ($title === 'Kontaks') ? 'active' : '' }}">
                            <i class="bi bi-person-lines-fill card-heading nav-icon"></i>
                            <p>Kontak</p>
                        </a>
                    </li>
                    <li class="nav-item ml-1">
                        <a href="../../../dashboard/kategori"
                            class="nav-link {{ ($title === 'kategori') ? 'active' : '' }}">
                            <i class="bi bi-grid card-heading nav-icon"></i>
                            <p>Kategori</p>
                        </a>
                    </li>
                </ul>
            </li>
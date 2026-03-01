      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

          <!-- Divider -->
          <hr class="sidebar-divider my-0">

          <!-- Nav Item - Dashboard -->
          <li class="nav-item active">
              <a class="nav-link" href="{{ route('dashboard') }}">
                  <i class="fas fa-fw fa-tachometer-alt"></i>
                  <span>@yield('title-section', 'Tableau de bord')</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider">

          <!-- Heading -->
          <div class="sidebar-heading">
              Interface
          </div>

          <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProducts"
                 aria-expanded="true" aria-controls="collapseProducts">
                  <i class="fas fa-fw fa-box"></i>
                  <span>Produits</span>
              </a>
              <div id="collapseProducts" class="collapse" aria-labelledby="headingProducts" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                      <a class="collapse-item" href="products.html">
                          <i class="fas fa-list me-2"></i> Liste des produits
                      </a>
                      <a class="collapse-item" href="products-create.html">
                          <i class="fas fa-plus me-2"></i> Ajouter un produit
                      </a>
                  </div>
              </div>
          </li>
          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategories"
                 aria-expanded="true" aria-controls="collapseCategories">
                  <i class="fas fa-fw fa-tags"></i>
                  <span>Catégories</span>
              </a>
              <div id="collapseCategories" class="collapse" aria-labelledby="headingCategories" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                      <a class="collapse-item" href="categories.html">
                          <i class="fas fa-list me-2">{{route('categories.index')}}</i> Liste des catégories
                      </a>
                      <a class="collapse-item" href="{{route('categories.create')}}">
                          <i class="fas fa-plus me-2"></i> Ajouter une catégorie
                      </a>
                  </div>
              </div>
          </li>
          <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSuppliers"
                 aria-expanded="true" aria-controls="collapseSuppliers">
                  <i class="fas fa-fw fa-truck"></i>
                  <span>Fournisseurs</span>
              </a>
              <div id="collapseSuppliers" class="collapse" aria-labelledby="headingSuppliers" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                      <a class="collapse-item" href="suppliers.html">
                          <i class="fas fa-list me-2"></i> Liste des fournisseurs
                      </a>
                      <a class="collapse-item" href="suppliers-create.html">
                          <i class="fas fa-plus me-2"></i> Ajouter un fournisseur
                      </a>
                  </div>
              </div>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers"
                 aria-expanded="true" aria-controls="collapseUsers">
                  <i class="fas fa-fw fa-users-cog"></i>
                  <span>Utilisateurs & rôles</span>
              </a>
              <div id="collapseUsers" class="collapse" aria-labelledby="headingUsers" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                      <a class="collapse-item" href="users.html">
                          <i class="fas fa-user me-2"></i> Liste des utilisateurs
                      </a>
                      <a class="collapse-item" href="roles.html">
                          <i class="fas fa-user-shield me-2"></i> Gestion des rôles
                      </a>
                      <a class="collapse-item" href="permissions.html">
                          <i class="fas fa-key me-2"></i> Permissions
                      </a>
                  </div>
              </div>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInventory"
                 aria-expanded="true" aria-controls="collapseInventory">
                  <i class="fas fa-fw fa-warehouse"></i>
                  <span>Stock / Inventaire</span>
              </a>
              <div id="collapseInventory" class="collapse" aria-labelledby="headingInventory" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                      <a class="collapse-item" href="inventory.html">
                          <i class="fas fa-boxes me-2"></i> Vue d'ensemble
                      </a>
                      <a class="collapse-item" href="inventory-add.html">
                          <i class="fas fa-plus me-2"></i> Ajouter un stock
                      </a>
                      <a class="collapse-item" href="inventory-movement.html">
                          <i class="fas fa-exchange-alt me-2"></i> Mouvements de stock
                      </a>
                  </div>
              </div>
          </li>


          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">

          <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
              <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>
      </ul>

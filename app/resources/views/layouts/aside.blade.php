<aside class="main-sidebar sidebar-dark-info elevation-4 position-fixed">
    <!-- Logo de la marque -->
    <a href="{{ route('groupe.index')}}" class="brand-link">
      <img src="{{ asset('img/logo.png') }}" class="brand-image img-circle elevation-3" alt="Image de groupe">
      <span class="brand-text font-weight-light text-center">Gestion de Groupe</span>
    </a>
  
    <!-- Barre latérale -->
    <div class="sidebar">
      <!-- Menu latéral -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="{{ route('filier.index')}}" class="nav-link  {{ request()->routeIs(['filier.index', 'filier.show']) ? 'active' : '' }}">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Filier
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('groupe.index')}}" class="nav-link  {{ request()->routeIs(['groupe.index', 'groupe.show']) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-tasks"></i>
                  <p>
                      Groupe
                  </p>
              </a>
          </li>
          
            
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
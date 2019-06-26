<div class="sidebar-wrapper">
  <ul class="nav">
    <li class="nav-item active  ">
      <a class="nav-link" href="">
        <i class="material-icons"></i>
        <p>Accueil</p>
      </a>
    </li>
     @roles('Gestionnaire')
    <li class="nav-item ">
    <a class="nav-link" href="{{route('villages.index')}}">
        <i class="material-icons"></i>
        <p>Villages</p>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="{{route('clients.index')}}">
        <i class="material-icons"></i>
        <p>Clients</p>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="{{route('administrateurs.index')}}">
        <i class="material-icons"></i>
        <p>Administrateurs</p>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="{{route('compteurs.index')}}">
        <i class="material-icons"></i>
        <p>Compteurs</p>
      </a>
    </li>
   @endroles
   @roles('Administrateur')
    <li class="nav-item ">
      <a class="nav-link" href="{{route('comptables.index')}}">
        <i class="material-icons"></i>
        <p>Comptables</p>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="{{route('agents.index')}}">
        <i class="material-icons"></i>
        <p>Agents</p>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="{{route('gestionnaires.index')}}">
        <i class="material-icons"></i>
        <p>Gestionnaires</p>
      </a>
    </li>
    @endroles
    @roles('Agents')
    <li class="nav-item ">
      <a class="nav-link" href="{{route('abonnements.index')}}">
        <i class="material-icons"></i>
        <p>Abonnements</p>
      </a>
    </li>
    
    <li class="nav-item ">
      <a class="nav-link"  href="{{route('factures.index')}}">
        <i class="material-icons"></i>
        <p>Facturation</p>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link"href="{{route('users.index')}}">
        <i class="material-icons"></i>
        <p>Utilisateurs</p>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="{{route('consommations.index')}}">
        <i class="material-icons"></i>
        <p>Consommation</p>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="{{route('reglements.index')}}">
        <i class="material-icons"></i>
        <p>Reglements</p>
      </a>
    </li>
    @endroles
    <li class="nav-item ">
      <a class="nav-link"href="{{route('arrondissements.index')}}">
        <i class="material-icons"></i>
        <p>Arrondissements</p>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="{{route('communes.index')}}">
        <i class="material-icons"></i>
        <p>Communes</p>
      </a>
    </li>
    
    <li class="nav-item ">
      <a class="nav-link"href="{{route('regions.index')}}">
        <i class="material-icons"></i>
        <p>Regions</p>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="{{route('roles.index')}}">
        <i class="material-icons"></i>
        <p>Roles de SEN FORAGE</p>
      </a>
    </li>
   {{--  <li class="nav-item active-pro ">
      <a class="nav-link" href="./upgrade.html">
        <i class="material-icons"></i>
        <p>Upgrade to PRO</p>
      </a>
    </li> --}}
  </ul>
</div>
{{-- <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item active  ">
        <a class="nav-link" href="./dashboard.html">
          <i class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="./user.html">
          <i class="material-icons">person</i>
          <p>User Profile</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="./tables.html">
          <i class="material-icons">content_paste</i>
          <p>Table List</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="./typography.html">
          <i class="material-icons">library_books</i>
          <p>Typography</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="./icons.html">
          <i class="material-icons">bubble_chart</i>
          <p>Icons</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="./map.html">
          <i class="material-icons">location_ons</i>
          <p>Maps</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="./notifications.html">
          <i class="material-icons">notifications</i>
          <p>Notifications</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="./rtl.html">
          <i class="material-icons">language</i>
          <p>RTL Support</p>
        </a>
      </li>
      <li class="nav-item active-pro ">
        <a class="nav-link" href="./upgrade.html">
          <i class="material-icons">unarchive</i>
          <p>Upgrade to PRO</p>
        </a>
      </li>
    </ul>
  </div> --}}
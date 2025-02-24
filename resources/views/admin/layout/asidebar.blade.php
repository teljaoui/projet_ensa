<div class="d-flex sidebar-header">
    <a href="{{ route('admin') }}" class="sidebar-logo">
        <img src="{{ asset('assets/img/logo.png') }}" alt="" class="sidebar-logo">
    </a>
    <button class="toggle-btn" type="button">
        <i class="fa-solid fa-bars"></i>
    </button>
</div>
<ul class="sidebar-nav">
    <li class="sidebar-item">
        <a href="{{ route('admin') }}" class="sidebar-link {{request()->is('admin') ? 'active' : ''}}">
            <i class="fa-solid fa-calendar-week"></i> <span>Réservation</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a href="{{ route('profliste') }}" class="sidebar-link {{request()->is('admin/prof*') ? 'active' : ''}}">
            <i class="fa-solid fa-person-chalkboard"></i>
            <span>Professeur</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a href="{{route("salles")}}" class="sidebar-link {{request()->is('admin/salles*') ? 'active' : ''}}">
            <i class="fa-solid fa-chalkboard-user"></i>
            <span>Salle</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a href="{{route("horaires")}}" class="sidebar-link {{request()->is('admin/horaire*') ? 'active' : ''}}">
            <i class="fa-solid fa-calendar-days"></i>
            <span>Gestion des Horaires</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a href="/" class="sidebar-link">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span>Se déconnecter</span>
        </a>
    </li>
</ul>

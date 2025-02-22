<div class="d-flex sidebar-header">
    <img src="" alt="" class="sidebar-logo">
    <a href="{{route("home")}}" class="sidebar-logo phone-hidden" >facture</a>
    <button class="toggle-btn" type="button">
        <i class="fa-solid fa-bars"></i>
    </button>
    <button class="close-toggle" type="button" id="closetoggle">
        <i class="fa-solid fa-xmark"></i>
    </button>
</div>
<ul class="sidebar-nav">
    <li class="sidebar-item">
        <a href="/" class="sidebar-link">
            <i class="fa-solid fa-chart-pie"></i>
            <span>Tableau de bord</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a href="{{ route('clients') }}" class="sidebar-link">
            <i class="fa-solid fa-user"></i>
            <span>Clients</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a href="{{ route('produits') }}" class="sidebar-link">
            <i class="fa fa-cube" aria-hidden="true"></i>
            <span>Produits</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a href="{{ route('devis') }}" class="sidebar-link">
            <i class="fa-solid fa-quote-left"></i>
            <span>Devis</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a href="{{ route('factures') }}" class="sidebar-link">
            <i class="fa-solid fa-file-invoice"></i>
            <span>Factures</span>
        </a>
    </li>
</ul>

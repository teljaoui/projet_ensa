<div class="d-flex header py-3">
    <div class="page-title d-flex align-items-center gap-15">
        <button class="toggle-btn" id="toggle-btn-phone" type="button">
            <i class="fa-solid fa-bars"></i>
        </button>
        <h5>{{$page_title}}</h5>
    </div>
    <div class="header-right d-flex">
        <a href="{{route("ajouterfacture")}}" class="button">Nouvelle Facture</a>
        <div class="dropdown">
            <button class="admin-compte dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M17 10v1.126c.367.095.714.24 1.032.428l.796-.797 1.415 1.415-.797.796c.188.318.333.665.428 1.032H21v2h-1.126c-.095.367-.24.714-.428 1.032l.797.796-1.415 1.415-.796-.797a3.979 3.979 0 0 1-1.032.428V20h-2v-1.126a3.977 3.977 0 0 1-1.032-.428l-.796.797-1.415-1.415.797-.796A3.975 3.975 0 0 1 12.126 16H11v-2h1.126c.095-.367.24-.714.428-1.032l-.797-.796 1.415-1.415.796.797A3.977 3.977 0 0 1 15 11.126V10h2Zm.406 3.578.016.016c.354.358.574.85.578 1.392v.028a2 2 0 0 1-3.409 1.406l-.01-.012a2 2 0 0 1 2.826-2.83ZM5 8a4 4 0 1 1 7.938.703 7.029 7.029 0 0 0-3.235 3.235A4 4 0 0 1 5 8Zm4.29 5H7a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h6.101A6.979 6.979 0 0 1 9 15c0-.695.101-1.366.29-2Z"
                        clip-rule="evenodd" />
                </svg>
            </button>
            <ul class="dropdown-menu my-2">
                <li class="facture-button"><a class="dropdown-item" href="{{route("ajouterfacture")}}"><i class="fa-solid fa-file-pen"></i><span>Nouvelle Facture</span></a></li>
                <li><a class="dropdown-item" href="{{route('compte')}}"><i class="fa-solid fa-user"></i><span>Parametre de Compte</span></a></li>
                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-right-from-bracket"></i><span>Se déconnecter</span></a></li>
            </ul>
        </div>
    </div>
</div>

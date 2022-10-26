<nav class="navbar navbar-expand-sm navbar-dark bg-dark text-white">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="d-flex justify-content-end m-2" id="navbarNavAltMarkup">
        <div class="header">
            <div class="headerElement">
                <img class="headerElement-image" src="{{asset('/images/shared/profil.png')}}" alt="logo">
                <div>
                    <p onclick="hidden()" class="headerElement-text">utilisateur connecté</p>

                </div>
                <div hidden  class="headerElementHide bg-dark text-white">
                <div class="headerElement-hide-Cuser">
                    <p>Connected User</p>

                </div>
                <div class="headerElement-hide-about">
                    <p>Calcul rapide</p>
                    <p>Paramètres</p>
                </div>
                <hr>
                <div class="headerElement-deconnection">
                    <p>Se déconnecter</p>
                </div>
                </div>

            </div>
        </div>
    </div>
</nav>

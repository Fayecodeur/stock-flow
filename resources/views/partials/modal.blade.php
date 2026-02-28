<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutLabel">Déconnexion</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Fermer">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                Voulez-vous vraiment quitter votre session ?
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="button" data-dismiss="modal">Annuler</button>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-danger">Se déconnecter</button>
                </form>
            </div>
        </div>
    </div>
</div>

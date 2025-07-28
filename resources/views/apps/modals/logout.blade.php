<div class="logout_modal hidden" id="logout-modal">
    <div class="logout_modal_overlay"></div>
    <div class="logout_modal_content">
        <div class="card border p-0 pb-3">
            <div class="card-header border-0 pt-3">
                <div class="card-options">
                    <a class="card-options-remove" onclick="closeLogoutModal()"><i class="fe fe-x"></i></a>
                </div>
            </div>
            <div class="card-body text-center">
                <span class=""><svg xmlns="http://www.w3.org/2000/svg" height="60" width="60"
                        viewBox="0 0 24 24">
                        <path fill="#f07f8f"
                            d="M20.05713,22H3.94287A3.02288,3.02288,0,0,1,1.3252,17.46631L9.38232,3.51123a3.02272,3.02272,0,0,1,5.23536,0L22.6748,17.46631A3.02288,3.02288,0,0,1,20.05713,22Z" />
                        <circle cx="12" cy="17" r="1" fill="#e62a45" />
                        <path fill="#e62a45" d="M12,14a1,1,0,0,1-1-1V9a1,1,0,0,1,2,0v4A1,1,0,0,1,12,14Z" />
                    </svg></span>
                <h4 class="h4 mb-0 mt-3">Attention</h4>
                <p class="card-text">Voulez-vous vraiment vous déconnecter ?</p>
            </div>
            <div class="card-footer text-center border-0 pt-0">
                <div class="row">
                    <div class="text-center">
                        <button type="button" onclick="closeLogoutModal()" class="btn btn-white me-2">Annuler</button>
                        <button type="button" onclick="confirmLogout()" class="btn btn-danger">Déconnexion</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function closeLogoutModal() {
        document.getElementById('logout-modal').classList.add('hidden');
    }

    function confirmLogout() {
        logoutForm = document.getElementById('logoutForm');

        if (logoutForm) {
            logoutForm.submit();
        }
    }

    function logoutAlert() {
        document.getElementById('logout-modal').classList.remove('hidden');
    }
</script>

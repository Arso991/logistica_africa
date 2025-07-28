<div class="modal fade" id="deleteModal{{ $id }}">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content country-select-modal">
            <div class="modal-header">
                <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="card border p-0 pb-3">
                    <div class="card-body text-center">
                        <span class=""><svg xmlns="http://www.w3.org/2000/svg" height="60" width="60"
                                viewBox="0 0 24 24">
                                <path fill="#f07f8f"
                                    d="M20.05713,22H3.94287A3.02288,3.02288,0,0,1,1.3252,17.46631L9.38232,3.51123a3.02272,3.02272,0,0,1,5.23536,0L22.6748,17.46631A3.02288,3.02288,0,0,1,20.05713,22Z" />
                                <circle cx="12" cy="17" r="1" fill="#e62a45" />
                                <path fill="#e62a45" d="M12,14a1,1,0,0,1-1-1V9a1,1,0,0,1,2,0v4A1,1,0,0,1,12,14Z" />
                            </svg></span>
                        <h4 class="h4 mb-0 mt-3">Attention</h4>
                        <p class="card-text">Voulez-vous vraiment supprimer {{ $message }} ? Cette action est
                            irréverssible.
                        </p>
                    </div>
                    <div class="card-footer text-center border-0 pt-0">
                        <div class="row">
                            <div class="text-center">
                                <button type="button" data-bs-dismiss="modal"
                                    class="btn btn-white me-2">Annuler</button>
                                <form action="{{ $route }}" method="POST" class="d-inline" id="deleteForm">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

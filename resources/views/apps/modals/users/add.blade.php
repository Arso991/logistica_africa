<!-- Sidebar-right -->
<div class="sidebar sidebar-right sidebar-animate add-users-form">
    <div class="panel panel-primary card mb-0 shadow-none border-0">
        <div class="tab-menu-heading border-0 d-flex p-3">
            <div class="card-title mb-0">Ajouter un administrateur</div>
            <div class="card-options ms-auto">
                <a href="javascript:void(0);" class="sidebar-icon text-end float-end me-3 mb-1"
                    data-bs-toggle="sidebar-right" data-target=".add-users-form"><i class="fe fe-x text-white"></i></a>
            </div>
        </div>
        <div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
            <form action="" method="POST">
                @csrf

                <div class="pe-4 ps-4">
                    <div class="form-group">
                        <label for="last_name" class="form-label">Nom (optionnel)</label>
                        <input type="text" name="last_name" class="form-control" id="last_name"
                            placeholder="Veuillez entrer le nom" autocomplete="last_name">
                    </div>
                    <div class="form-group">
                        <label for="first_name" class="form-label">Prénoms (optionnel)</label>
                        <input type="text" name="first_name" class="form-control" id="first_name"
                            placeholder="Veuillez entrer le prénom" autocomplete="first_name">
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email <span class="text-red">*</span></label>
                        <input type="email" name="email" class="form-control" id="exampleInputPassword1"
                            placeholder="Veuillez entrez l'adresse email" autocomplete="email">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Rôle <span class="text-red">*</span></label>
                        <select class="form-control form-select select2" name="role" data-bs-placeholder="Select">
                            <option label="Veuillez choisir le rôle">Veuillez choisir le rôle</option>
                        </select>
                    </div>
                </div>
                <div class="ps-4 pe-4">
                    <button class="btn btn-primary mt-4 mb-0 w-full">Enrégistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--/Sidebar-right-->

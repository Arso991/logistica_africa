<!-- Sidebar-right -->
<div class="sidebar sidebar-right sidebar-animate add-partners-form">
    <div class="panel panel-primary card mb-0 shadow-none border-0">
        <div class="tab-menu-heading border-0 d-flex p-3">
            <div class="card-title mb-0">Ajouter un partenaire</div>
            <div class="card-options ms-auto">
                <a href="javascript:void(0);" class="sidebar-icon text-end float-end me-3 mb-1"
                    data-bs-toggle="sidebar-right" data-target=".role-form"><i class="fe fe-x text-white"></i></a>
            </div>
        </div>
        <div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
            <form action="{{ route('Panel::partners.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="pe-4 ps-4">
                    <div class="form-group">
                        <label for="name" class="form-label">Nom</label>
                        <input type="text" name="name" class="form-control" id="name"
                            placeholder="Veuillez entrer le nom du partenaire" autocomplete="name">
                    </div>

                    <div class="form-group">
                        <label for="website" class="form-label">Site web (optionnel)</label>
                        <input type="url" name="website" class="form-control" id="website"
                            placeholder="Veuillez entrer le site web du partenaire" autocomplete="website">
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Logo <span class="text-red">*</span></label>
                        <input class="form-control" name="logo" type="file">
                    </div>

                    <div class="form-group">
                        <label for="description" class="form-label">Description (optionnel)</label>
                        <textarea class="form-control mb-4" name="description" placeholder="Veuillez entrer la description" rows="4"></textarea>
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

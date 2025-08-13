@extends('layouts.app')

@section('title', 'Gestion des Utilisateurs')

@section('header', 'Gestion des Utilisateurs')

@section('content')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">Liste des utilisateurs</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Liste des utilisateurs</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="page_header_bottom">
        {{--         <div class="page_header_bottom_left">
            <div class="page_header_bottom_left_input">
                <input type="text" class="form-control" id="typehead" placeholder="Rechercher..." autocomplete="off">
                <button class="btn px-0 pt-2"><i class="fe fe-search" aria-hidden="true"></i></button>
            </div>
        </div> --}}
        <div class="page_header_bottom_right">
            <a href="javascript:void(0);" data-bs-toggle="sidebar-right" data-target=".add-users-form"
                class="btn btn-primary">Ajouter</a>
        </div>
    </div>

    <!-- Row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table border text-nowrap text-md-nowrap table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Prénoms</th>
                                    <th>Email</th>
                                    <th>Rôle</th>
                                    <th>Statut</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $id = 1;
                                @endphp
                                <tr>
                                    <td>1</td>
                                    <td>{{ 'N/A' }}</td>
                                    <td>{{ 'N/A' }}</td>
                                    <td>{{ 'N/A' }}</td>
                                    <td>{{ 'N/A' }}</td>
                                    <td>
                                        <span class="badge bg-danger badge-sm  me-1 mb-1 mt-1">Inactif</span>
                                        <span class="badge bg-success badge-sm  me-1 mb-1 mt-1">Actif</span>
                                    </td>
                                    <td>
                                        <div class="table-btn">
                                            <a href="javascript:void(0);" data-bs-toggle="sidebar-right"
                                                data-target="#update-users-form{{ 1 }}"
                                                class="text-secondary">Modifier</a>

                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal{{ 1 }}"
                                                class="text-danger">Supprimer</a>
                                        </div>
                                    </td>
                                </tr>

                                @include('apps.modals.users.edit')
                                @include('apps.modals.delete', [
                                    'id' => 1,
                                    'route' => '',
                                    'message' => 'l\'utilistateur',
                                ])
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

    @include('apps.modals.users.add')
@endsection

@extends('layouts.main')

@section('title', 'Gestion des articles')

@section('header', 'Gestion des articles')

@section('content')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        @if (!empty($post->id))
            <h1 class="page-title">Modifier FAQ</h1>
        @else
            <h1 class="page-title">Ajouter FAQ</h1>
        @endif
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Accueil</a></li>
                @if (!empty($post->id))
                    <li class="breadcrumb-item active" aria-current="page">Modifier FAQ</li>
                @else
                    <li class="breadcrumb-item active" aria-current="page">Ajouter FAQ</li>
                @endif
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- Row -->
    <div class="row bg-white pt-4 pb-4" style="border-radius: 10px">
        @if (!empty($post->id))
            @php
                $routeLink = route('Panel::posts.update', $post->id);
            @endphp
        @else
            @php
                $routeLink = route('Panel::posts.store');
            @endphp
        @endif

        @if (isset($post->image))
            <div class="if-image">
                <div class="form-image-container">
                    <img src="{{ asset('storage/' . $post->image) }}" class="form-image" alt="Article image">
                </div>
            </div>
        @endif

        <form action="{{ $routeLink }}" method="POST" enctype="multipart/form-data">
            @csrf

            @if (!empty($post->id))
                @method('PUT')
            @endif

            <div class="pe-4 ps-4">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title" class="form-label">Titre</label>
                            <input type="text" name="title" class="form-control" id="title"
                                placeholder="Veuillez entrer le titre de l'article"
                                value="{{ $post->title ?? old('title') }}" autocomplete="title">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tags" class="form-label">Tags</label>
                            <input type="text" name="tags[]" class="form-control" id="tags"
                                placeholder="Veuillez entrer le(s) tags de l'article"
                                value="{{ isset($post) && $post->tags ? implode(',', (array) json_decode($post->tags)) : old('tags') }}"
                                autocomplete="tags">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="status" class="form-label">Statut </label>
                            <select class="form-control form-select select2" name="status" data-bs-placeholder="Select">
                                <option label="Veuillez choisir le statut de l'article"></option>
                                <option {{ isset($post->id) && $post->status == 'draft' ? 'selected' : '' }} selected
                                    value="draft">Brouillon</option>
                                <option {{ isset($post->id) && $post->status == 'published' ? 'selected' : '' }}
                                    value="published">Publié</option>
                                <option {{ isset($post->id) && $post->status == 'archived' ? 'selected' : '' }}
                                    value="archived">Archivé</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="image" class="form-label">Image</label>
                            <input class="form-control" name="image" type="file">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="excerpt" class="form-label">Résumé</label>
                    <textarea class="form-control mb-4" name="excerpt" placeholder="Veuillez entrer le résumé de l'article" rows="4">{{ $post->excerpt ?? '' }}</textarea>
                </div>

                <div class="form-group">
                    <label for="content" class="form-label">Description</label>
                    <textarea id="summernote" name="content"> {!! $post->content ?? 'Veuillez entrer la description de l\'article' !!} </textarea>
                </div>

            </div>
            <div class="pe-4 ps-4">
                <div class="col-lg">
                    @if (!empty($post->id))
                        <button class="btn btn-primary mt-4 mb-0">Modifier</button>
                    @else
                        <button class="btn btn-primary mt-4 mb-0">Enrégistrer</button>
                    @endif
                </div>
            </div>
        </form>
    </div>
    <!-- End Row -->

@endsection

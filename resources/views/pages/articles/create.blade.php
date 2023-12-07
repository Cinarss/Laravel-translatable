@include("layouts.app")

<div class="container mt-5">
    <div class="mb-4">
        <h2>Create Article</h2>
    </div>

    <!-- Dil sekmeleri -->
    <ul class="nav nav-tabs">
        @foreach (config('languages') as $langCode => $langName)
            <li class="nav-item">
                <a class="nav-link {{ $loop->first ? 'active' : '' }}" data-bs-toggle="tab" href="#{{ $langCode }}">
                    {{ strtoupper($langCode) }}
                </a>
            </li>
        @endforeach
    </ul>

    <!-- Form alanları -->
    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        @method("POST")
        <div class="tab-content mt-3">
            @foreach (config('languages') as $langCode => $langName)
                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="{{ $langCode }}">
                    <!-- Başlık -->
                    <div class="mb-3">
                        <label for="title_{{ $langCode }}" class="form-label">Title ({{ strtoupper($langCode) }}) *</label>
                        <input type="text" name="title[{{ $langCode }}]" id="title_{{ $langCode }}" class="form-control" required>
                    </div>

                    <!-- İçerik -->
                    <div class="mb-3">
                        <label for="content_{{ $langCode }}" class="form-label">Full Text ({{ strtoupper($langCode) }})</label>
                        <textarea name="content[{{ $langCode }}]" id="content_{{ $langCode }}" class="form-control" rows="5"></textarea>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Gönder Butonu -->
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>
</div>

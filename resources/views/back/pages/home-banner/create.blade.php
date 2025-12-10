@extends('')

@section('title')
@endsection

@section('css')
@endsection

@section('content')
    <form action="{{ route('home-banners.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label for="image" class="form-label">Banner Image</label>
            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image"
                   required>
            @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Title (H1)</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                   placeholder="Enter main title" required>
            @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="subtitle_address" class="form-label">Subtitle - Address</label>
            <input type="text" class="form-control @error('subtitle_address') is-invalid @enderror"
                   name="subtitle_address" id="subtitle_address" placeholder="123 Street, City, Country">
            @error('subtitle_address')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="subtitle_phone" class="form-label">Subtitle - Phone</label>
            <input type="text" class="form-control @error('subtitle_phone') is-invalid @enderror" name="subtitle_phone"
                   id="subtitle_phone" placeholder="+994(00) 000-00-00">
            @error('subtitle_phone')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="order" class="form-label">Order</label>
            <input type="number" class="form-control" name="order" id="order" value="0">
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="status" id="status" value="1" checked>
            <label class="form-check-label" for="status">Active</label>
        </div>

        <button type="submit" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-device-desktop-down">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M13.5 16h-9.5a1 1 0 0 1 -1 -1v-10a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v7.5"/>
                <path d="M7 20h5"/>
                <path d="M9 16v4"/>
                <path d="M19 16v6"/>
                <path d="M22 19l-3 3l-3 -3"/>
            </svg>
        </button>
    </form>

@endsection

@section('js')
@endsection



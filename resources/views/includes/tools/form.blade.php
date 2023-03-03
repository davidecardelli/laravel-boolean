@if ($tool->exists)
    <form action="{{ route('tools.update', $tool->id) }}" method="POST" novalidate>
        @method('PUT')
    @else
        <form action="{{ route('tools.store') }}" method="POST" novalidate>
@endif
@csrf
<div class="row cols-3">
    <div class="col">
        {{-- Name Tool --}}
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                value="{{ old('name', $tool->name) }}">
        </div>
    </div>

    <div class="col">
        {{-- Vote Tool --}}
        <div class="mb-3">
            <label for="vote" class="form-label">Vote</label>
            <input type="numeric" class="form-control" id="vote" name="vote" placeholder="Vote"
                value="{{ old('vote', $tool->vote) }}">
        </div>
    </div>

    <div class="col">
        {{-- Image_url tool  --}}
        <div class="mb-3">
            <label for="image_url" class="form-label">Url img</label>
            <input type="url" class="form-control" id="image_url" name="image_url" placeholder="Image Url"
                value="{{ old('image_url', $tool->image_url) }}">
        </div>
    </div>
</div>


<div class="row row-cols-1">
    <div class="col">
        {{-- Description tool --}}
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Description">{{ old('description', $tool->description) }}</textarea>
        </div>
    </div>
</div>

<div class="row row-cols-3">
    <div class="col">
        {{-- Category tool --}}
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="text" class="form-control" id="category" name="category" placeholder="Category"
                value="{{ old('category', $tool->category) }}">
        </div>
    </div>
    <div class="col">
        {{-- Release Year tool --}}
        <div class="mb-3">
            <label for="release_year" class="form-label">Release Year</label>
            <input type="text" class="form-control" id="release_year" name="release_year" placeholder="Release Year"
                value="{{ old('release_year', $tool->release_year) }}">
        </div>
    </div>
    <div class="col">
        {{-- Latest Version tool  --}}
        <div class="mb-3">
            <label for="latest_version" class="form-label">Latest Version</label>
            <input type="text" class="form-control" id="latest_version" name="latest_version" placeholder="Sale Date"
                value="{{ old('latest_version', $tool->latest_version) }}">
        </div>
    </div>
</div>

<div class="row row-cols-1">
    <div class="col">
        {{-- Download Link tool --}}
        <div class="mb-3">
            <label for="download_link" class="form-label">Download Link</label>
            <input type="url" class="form-control" id="download_link" name="download_link" placeholder="Sale Date"
                value="{{ old('download_link', $tool->download_link) }}">
        </div>
    </div>
</div>

<div class="row cols-1">
    <div class="col">
        {{-- Supported OS Tool --}}
        <div class="mb-3">
            <label for="supported_os" class="form-label">Supported OS</label>
            <textarea class="form-control" id="supported_os" name="supported_os" rows="3" placeholder="Supported OS">{{ old('supported_os', $tool->supported_os) }}</textarea>
        </div>
    </div>
</div>


<div class="d-flex justify-content-between">
    <div>
        <a href="{{ route('tools.index') }}" class="btn btn-secondary mt-3">Back</a>
    </div>
    <div class="mb-3">
        <button class="btn btn-small btn-success" type="submit">Submit</button>
    </div>
</div>
</form>

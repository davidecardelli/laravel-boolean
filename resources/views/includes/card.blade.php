<div class="col mb-3">
    <div class="card d-flex flex-column align-items-center justify-content-center h-100">
        <a href="{{ route('tools.show', $tool['id']) }}">
            <img class="p-3 card-img-top" src="{{ $tool['image_url'] }}" alt="{{ $tool['name'] }}">
        </a>
        <div class="card-body">
            <p class="text-center text-black mt-2 fw-bold text-uppercase">{{ $tool['name'] }}</p>
        </div>
    </div>
</div>

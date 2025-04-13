@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12">
    <h2 class="text-4xl font-bold text-purple-600 mb-12 text-center">Photo Gallery</h2>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @for($i = 1; $i <= 31; $i++)
            <div class="aspect-square">
                <img src="{{ asset('storage/images/mam' . $i . '.jpg') }}" alt="Gallery photo {{ $i }}"
                 class="w-full h-full object-cover rounded-lg shadow hover:shadow-xl transition cursor-pointer" onclick="openModal(this)">

            </div>
        @endfor
    </div>
            <!-- Modal -->
        <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-50 hidden">
            <span class="absolute top-5 right-8 text-white text-4xl font-bold cursor-pointer" onclick="closeModal()">&times;</span>
            <img id="modalImage" src="" class="max-h-[90%] max-w-[90%] rounded-lg shadow-2xl">
        </div>
</div>

<script>
    function openModal(imgElement) {
        const modal = document.getElementById('imageModal');
        const modalImg = document.getElementById('modalImage');
        modalImg.src = imgElement.src;
        modal.classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('imageModal').classList.add('hidden');
    }
</script>
@endsection
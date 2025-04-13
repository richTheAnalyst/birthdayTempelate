@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12">
    <div class="text-center fade-in">
        <h1 class="text-5xl font-bold text-purple-600 mb-8">Happy Birthday, Miss VANESSA AWANYO! 🎉</h1>
           <img src="{{ asset('storage/images/mam6.jpg') }}" alt="Mom" class="mx-auto rounded-full h-64 w-64 object-cover shadow-xl slide-up cursor-pointer" onclick="openModal(this)">
    </div>

     <div class="container mx-auto px-4 py-12">
            <h1 class="section-title">Beautiful Memories</h1>
            <p class="section-subtitle">A collection of special moments and cherished memories to celebrate Nessa.</p>
            
            <div class="photo-grid">

            <div class="photo-card">
                    <div class="overflow-hidden">
                        <img src="{{ asset('storage/images/mam15.jpg')}}" alt="Nessa's celebration" class="photo-img cursor-pointer" onclick="openModal(this)">
                    </div>
                    <div class="photo-content">
                        <h3 class="photo-title">Birthday Celebration</h3>
                        <p class="photo-description">Celebrating another year of Nessa's amazing journey through life with friends and family.</p>
                    </div>
                </div>
                 <div class="photo-card">
                    <div class="overflow-hidden">
                        <img src="{{ asset('storage/images/mam25.jpg')}}" alt="Nessa's celebration" class="photo-img cursor-pointer" onclick="openModal(this)">
                    </div>
                    <div class="photo-content">
                        <h3 class="photo-title">Birthday Celebration</h3>
                        <p class="photo-description">Celebrating another year of Nessa's amazing journey through life with friends and family.</p>
                    </div>
                </div>
                 <div class="photo-card">
                    <div class="overflow-hidden">
                        <img src="{{ asset('storage/images/mam10.jpg')}}" alt="Nessa's celebration" class="photo-img cursor-pointer" onclick="openModal(this)">
                    </div>
                    <div class="photo-content">
                        <h3 class="photo-title">Birthday Celebration</h3>
                        <p class="photo-description">Celebrating another year of Nessa's amazing journey through life with friends and family.</p>
                    </div>
                </div>
                <!-- Card 1 -->
                <div class="photo-card">
                    <div class="overflow-hidden">
                        <img src="{{ asset('storage/images/mam18.jpg')}}" alt="Nessa's celebration" class="photo-img cursor-pointer" onclick="openModal(this)">
                    </div>
                    <div class="photo-content">
                        <h3 class="photo-title">She's an ICON</h3>
                        <p class="photo-description">Celebrating another year of Nessa's amazing journey through life with friends and family.</p>
                    </div>
                </div>
                
                <!-- Card 2 -->
                <div class="photo-card">
                    <div class="overflow-hidden">
                        <img src="{{ asset('storage/images/mam17.jpg')}}" alt="Beach vacation" class="photo-img cursor-pointer" onclick="openModal(this)">
                    </div>
                    <div class="photo-content">
                        <h3 class="photo-title">Beach Getaway</h3>
                        <p class="photo-description">The perfect beach day with Nessa - sunshine, waves, and unforgettable laughter.</p>
                    </div>
                </div>
                
                <!-- Card 3 -->
                <div class="photo-card">
                    <div class="overflow-hidden">
                        <img src="{{ asset('storage/images/mam21.jpg')}}" alt="Cooking together" class="photo-img cursor-pointer" onclick="openModal(this)">
                    </div>
                    <div class="photo-content">
                        <h3 class="photo-title">Culinary Adventures</h3>
                        <p class="photo-description">Nessa creating her famous recipes that bring everyone together around the table.</p>
                    </div>
                </div>
                
                <!-- Card 4 -->
                <div class="photo-card">
                    <div class="overflow-hidden">
                        <img src="{{ asset('storage/images/mam26.jpg')}}" alt="Garden flowers" class="photo-img cursor-pointer" onclick="openModal(this)">
                    </div>
                    <div class="photo-content">
                        <h3 class="photo-title">Garden Paradise</h3>
                        <p class="photo-description">Nessa's garden is her sanctuary, where she nurtures beauty and finds peace.</p>
                    </div>
                </div>
                
                <!-- Card 5 -->
                <div class="photo-card">
                    <div class="overflow-hidden">
                        <img src="{{ asset('storage/images/mam27.jpg')}}" alt="Holiday gathering" class="photo-img cursor-pointer" onclick="openModal(this)">
                    </div>
                    <div class="photo-content">
                        <h3 class="photo-title">Model Artisan</h3>
                        <p class="photo-description">Creating warm holiday memories with Nessa's special touch and festive spirit.</p>
                       <!-- <span class="memory-date">December 2023</span>-->
                    </div>
                </div>

                 <div class="photo-card">
                    <div class="overflow-hidden">
                        <img src="{{ asset('storage/images/mamwrld1.jpg')}}" alt="Holiday gathering" class="photo-img cursor-pointer" onclick="openModal(this)">
                    </div>
                    <div class="photo-content">
                        <h3 class="photo-title">Holidays. The world belongs to the bold</h3>
                        <p class="photo-description">Creating warm holiday memories with Nessa's special touch and festive spirit.</p>
                       <!-- <span class="memory-date">December 2023</span>-->
                    </div>
                </div>
                
                <!-- Card 6 -->
                <div class="photo-card">
                    <div class="overflow-hidden">
                        <img src="{{ asset('storage/images/mamforest.jpg')}}" alt="Adventure day" class="photo-img cursor-pointer" onclick="openModal(this)">
                    </div>
                    <div class="photo-content">
                        <h3 class="photo-title">Adventure Seeker</h3>
                        <p class="photo-description">Nessa's adventurous spirit inspires everyone around her to embrace life fully.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Modal for displaying images in full screen -->
                <!-- Modal -->
        <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-50 hidden">
            <span class="absolute top-5 right-8 text-white text-4xl font-bold cursor-pointer" onclick="closeModal()">&times;</span>
            <img id="modalImage" src="" class="max-h-[90%] max-w-[90%] rounded-lg shadow-2xl">
        </div>

        <!-- Floating hearts animation container -->
        <div class="hearts-container" id="hearts-container"></div>
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
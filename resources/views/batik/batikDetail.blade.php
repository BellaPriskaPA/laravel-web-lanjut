@include("layouts.header")
<!-- Navigation -->
  <nav class="bg-black text-white">
    <div class="container mx-auto flex justify-end items-center py-4 px-6">
      <ul class="flex space-x-8 text-lg font-bold">
        <li><a class="hover:text-yellow-500" href="/">HOME</a></li>
        <li><a class="hover:text-yellow-500" href="/umkm">UMKM</a></li>
        <li><a class="hover:text-yellow-500" href="/kuliner">KULINER</a></li>
        <li><a class="hover:text-yellow-500 active" href="/batik">BATIK</a></li>
      </ul>
    </div>
  </nav>
<!-- Main Content -->
  <main class="container mx-auto py-8">
    <div class="flex flex-col lg:flex-row lg:space-x-8">
        <div class="lg:w-1/2">
            <img alt="{{$batik->business_name}}" class="w-full" height="500" src="{{ asset('storage/img/'. $batik->image)}}" width="400"/>
        </div>
            <div class="lg:w-1/2">
                <h1 class="text-3xl font-bold mb-4">
                {{$batik->business_name}} 
                </h1>
                <p class="text-yellow-500 mb-4">
                berasal dari Ponorogo 
                </p>
                <p class="mb-4">
                Kategori Produk:
                <a class="text-yellow-900" href="#">
                Batik 
                </a>
                </p>
                <p class="mb-4">
                    {!! $batik->description !!}
                </p>
                <!-- Social Media and Contact Info -->
                <div class="mb-8">
                    <h2 class="text-xl font-bold mb-4">
                    Informasi Produk
                    </h2>
                    <div class="flex justify-start space-x-6 mb-4">
                        <a class="text-yellow-800 hover:text-yellow-500" href="{{$batik->instagram}}" title="Instagram">
                            <i class="fab fa-instagram text-2xl">
                            </i>
                        </a>
                        <a class="text-yellow-800 hover:text-yellow-500" href="{{$batik->facebook}}" title="Facebook">
                            <i class="fab fa-facebook text-2xl">
                            </i>
                        </a>
                        <a class="text-yellow-800 hover:text-yellow-500" href="#" title="WhatsApp">
                            <i class="fab fa-whatsapp text-2xl">
                            </i>
                        </a>
                        <a class="text-yellow-800 hover:text-yellow-500" href="{{$batik->address}}" title="Maps">
                            <i class="fas fa-map-marker-alt text-2xl">
                            </i>
                        </a>
                    </div>
                    <div>
                    <p>
                        <i class="fas fa-phone-alt">
                        </i>
                        @if(is_null($batik->phone_number))
                            Tidak ada nomor telepon
                        @else
                            $umkm->phone_number
                        @endif
                    </p>
                    <p>
                        <i class="fas fa-envelope">
                        </i>
                        info@produk.com
                    </p>
                </div>
            </div>
            <!-- Comment Section -->
            <div class="mt-8">
                <h2 class="text-xl font-bold mb-4">
                Kolom Komentar
                </h2>
                <form id="commentForm" action="{{ route('batikDetail.store', $batik->id)}}" method="post">
                    @csrf
                    <input type="hidden", name="batik_id" value="{{$batik->id}}">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                        Nama
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" placeholder="Nama Anda" type="text" required/>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="comment">
                        Komentar
                        </label>
                        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="comment" placeholder="Tulis komentar Anda" rows="4" id="review" name="review" required></textarea>
                    </div>
                    <div class="flex items-center justify-between">
                        <button class="bg-yellow-800 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" onclick="showToast()" type="submit">
                        Kirim
                        </button>
                    </div>
                </form>
            </div>

            <!-- All Comments Section -->
            <div class="mt-8">
                <h2 class="text-xl font-bold mb-4">
                Semua Komentar
                </h2>
                <div id="commentsList" class="space-y-4 max-h-64 overflow-y-auto">
                    @if($batik->reviews->isEmpty())
                        <p class=" text-center text-xl">Belum Ada Ulasan</p>
                    @else
                        @foreach($batik->reviews as $review)
                    <div class="p-4 border rounded shadow">
                        <p class="font-bold">
                            Dari : {{$review->name}}
                        </p>
                        <p>
                           Komentar : {{$review->review}}
                        </p>
                    </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <!-- comment end --> 

            <!-- Back Button -->
            <div class="mt-8">
                <button class="bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" onclick="window.history.back()">
                Kembali
                </button>
            </div>
        </div>
    </div>
  </main>
  <!-- Thanks Section -->
  <section class="bg-yellow-100 py-8">
   <div class="container mx-auto text-center">
    <h2 class="text-2xl font-bold mb-4">
     Terima Kasih Telah Berkunjung
    </h2>
   </div>
  </section>
@include("layouts.footer")
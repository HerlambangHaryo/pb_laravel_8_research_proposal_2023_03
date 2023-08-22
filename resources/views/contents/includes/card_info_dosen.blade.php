<div class="d-flex mb-2">
    <div class="flex-grow-1">
        <h5 class="mb-1">
            Pembimbing
        </h5>
        <div>
            <small>
                {{ $data_dosen->nama }}
            </small>
        </div>
        <div>
            <small>
                {{ $data_dosen->nip }}
            </small>
        </div>
    </div>
    <a href="{{route('Bimbingan.'.$dosen_route)}}" class="text-black">
        <i class="fas fa-plus"></i>
    </a>
</div>

<div class="d-flex">
    <div class="flex-grow-1">
        <div>
            <small>
                Bimbingan:
                <br/>
                {{$count}} kali
            </small>
        </div>
    </div>
    <div class="w-50px h-50px bg-primary bg-opacity-20 rounded-circle d-flex align-items-center justify-content-center">
        <a href="https://wa.me/{{$data_dosen->whatsapp}}" class="text-black">
            <i class="fab fa-lg fa-whatsapp text-dark"></i>
        </a>
    </div>
</div>


<div class="list-group list-group-flush mt-2">
    <div class="list-group-item d-flex align-items-center">
        <div class="flex-fill">
            <div>
                <small>
                    Repositori
                </small>
            </div>
            <div class="text-gray-600">
            </div>
        </div>
        <div class="w-100px">
            <small>
                Repositori
            </small>
        </div>
    </div>
    <div class="list-group-item d-flex align-items-center">
        <div class="flex-fill">
            <div>
                <small>
                    Repositori
                </small>
            </div>
            <div class="text-gray-600">
            </div>
        </div>
        <div class="w-100px">
            <small>
                Repositori
            </small>
        </div>
    </div>
    <div class="list-group-item d-flex align-items-center">
        <div class="flex-fill">
            <div>
                <small>
                    Repositori
                </small>
            </div>
            <div class="text-gray-600">
            </div>
        </div>
        <div class="w-100px">
            <small>
                Repositori
            </small>
        </div>
    </div>


</div>

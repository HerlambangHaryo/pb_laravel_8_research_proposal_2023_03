<div class="card">
    @forelse($Bimbingan as $row)
        <div class="card-header fw-600">
            {{ $row->hari }}
        </div>
        <div class="widget-reminder">
            <div class="widget-reminder-item">
                <div class="widget-reminder-time"> 
                    {{ $row->jam }}
                </div>
                <div class="widget-reminder-divider bg-primary"></div>
                <div class="widget-reminder-content">
                    <div class="fw-600">
                        {{ $row->lokasi }}
                    </div>
                    <div class="fs-13px">
                        <small>
                            {{ $row->dosen->nama }} 
                        </small>
                    </div>
                    <div class="d-flex align-items-center fs-13px mt-2">
                        <div class="flex-fill d-flex align-items-center">
                            {!! define_status_bimbingan($row->status_bimbingan) !!}  
                        </div>
                        <!-- <small>
                            <a href="{{route('Bimbingan.createpembimbing1')}}" class="text-black  me-2">
                                View
                            </a>  
                        </small> -->
                    </div>
                </div>
            </div>
        </div> 
        @empty   
            <div class="list-group list-group-flush">
                <div class="list-group-item d-flex align-items-center">
                    <div class="flex-fill">
                        <div>
                            Belum menambahkan Jadwal Bimbingan. 
                        </div>
                    </div>
                </div>
            </div> 
    @endforelse   
</div>

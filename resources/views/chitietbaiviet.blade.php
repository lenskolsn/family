<x-trangchu title="{{ $baiviet->tieude }}">
    <div class="row">
        <div class="col-md-8">
            {!! $baiviet->noidung !!}
        </div>
        <div class="col-md-4">
            <h6 class="pb-1" style="border-bottom: 1px solid #dadada">Bài viết mới nhất</h6>
            @foreach ($baivietmoi as $item)
                <div class="d-flex row mb-3">
                    <div class="col-md-2">
                        <img src="/storage/anhbaiviet/{{ $item->hinhanh }}" width="50" height="50"
                            class="rounded-circle" alt="">
                    </div>
                    <div class="card_title col-md-10">
                        <a href="{{ route('trangchu.chitietbaiviet', $item->id) }}" style="font-size: 13px"
                            class="text-secondary">{{ $item->tieude }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-trangchu>

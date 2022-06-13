<x-trangchu title="Bài viết">
    <div class="row">
        @foreach ($baiviet as $item)
            <div class="col-md-3">
                <div class="post card p-3 shadow" style="">
                    <div class="post_image" style="height: 270px; overflow: hidden;">
                        <a href="{{route('trangchu.chitietbaiviet',$item->id)}}">
                            <img src="/storage/anhbaiviet/{{ $item->hinhanh }}" width="100%" alt="">
                        </a>
                    </div>
                    <div class="post_body" style="height: 270px;">
                        <div class="post_title mt-2">
                            <h4>{{ $item->tieude }}</h4>
                        </div>
                        <div class="post_desc">
                            <p class="text-secondary" style="font-size: 14px;">{{ $item->mota }}</p>
                        </div>
                    </div>
                    <div class="post_view">
                        <a href="{{route('trangchu.chitietbaiviet',$item->id)}}" style="color: #3db84b; font-size: 14px;">XEM NGAY <i
                                class="fas fa-angle-double-right"></i></a>
                    </div>
                    <hr>
                    <div class="post_created_at">
                        <span class="text-secondary" style="font-size: 13px;">{{ $item->created_at }} / by {{$item->tacgia->name}}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-trangchu>

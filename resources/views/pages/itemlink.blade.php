@foreach($items as $item)
<div class="card">
    <div class="card-header" id="heading{{$item->id}}">
        <div class="card-title collapsed" data-toggle="collapse" data-target="#collapse{{$item->id}}" aria-expanded="false"> <i class="{!! \App\Models\Page::where(['title_en' => $item->title])->pluck('icon')->first(); !!}"></i> <span class="ml-2">{!! \App\Models\Page::where(['title_en' => $item->title])->pluck('title')->first(); !!}</span></div>
    </div>
    <div id="collapse{{$item->id}}" class="collapse" data-parent="#accordionExample" style="">
        <div class="card-body">
        </div>
    </div>
</div>
@endforeach
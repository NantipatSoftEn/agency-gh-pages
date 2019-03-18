@foreach ($gallery as $item)
<div class="modal fade" id="gallery-{{$item->id}}" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <center><iframe src="{{$item->link}}"></iframe></center>
                @foreach ($picture[$item->id] as $pic)
            <img src="{{asset($pic->path)}}" class="img-thumbnail">
                @endforeach
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endforeach

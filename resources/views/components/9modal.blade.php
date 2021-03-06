@foreach ($gallery as $item)
<div class="modal fade bd-example-modal-lg" id="gallery-{{$item->id}}" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <center><iframe  width="560" height="500"  src="{{$item->link}}"></iframe></center>
            <div class="modal-body">
                <div class="row">
                    @foreach ($picture[$item->id] as $pic)
                    <div class="col-md-4">
                        <img src="{{asset($pic->path)}}" class="card-img-top">
                    </div>

                    @endforeach
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endforeach

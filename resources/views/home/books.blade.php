<div class="container mt-4 mb-4">
    <div class="row">

    <div class="mb-2 card-header h2">{{__('Action')}}</div>

        @foreach($action as $actn)
            <div class="col-2 card mx-1" style="width: 18rem;">
                    <img src="{{$actn->BookImage}}" class="card-img-top" style="width: 100%;height: 18rem" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$actn->BookTitle}}</h5>
                    </div>
            </div>
            @endforeach
        </div>
    </div>

<div class="container mt-4 mb-4">

        <div class="row">
        <div class="mb-2 card-header h2">{{__('Thriller')}}</div>

            @foreach($thilr as $thriller)
            <div class="col-2 card mx-1" style="width: 18rem;">
                <img src="{{$thriller->BookImage}}" class="card-img-top" style="width: 100%;height: 18rem"alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$thriller->BookTitle}}</h5>
                </div>
            </div>
            @endforeach
</div>
</div>

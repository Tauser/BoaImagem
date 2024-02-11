<li class="col-4">
    <div class="card">
        <img src="{{$customer->getThumbnail()}}" alt="{{$customer->name}}">
        <div class="description">
            <div class="secrc-text">
                <h4 class="bi-muted mb-5"><a href="home-2.html">{{$customer->name}}</a></h4>
                <p class="bi-link bi-light-soft mb-10">{{$customer->content}}</p>
            </div>
        </div>
    </div>
</li>



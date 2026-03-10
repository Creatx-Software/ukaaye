<section class="section-project-details gap no-top">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="hover-img">
          <figure style="margin:0; overflow:hidden; border-radius:8px;">
            @if($service->image_path && str_starts_with($service->image_path, 'assets/'))
              <img src="{{ asset($service->image_path) }}" alt="{{ $service->title }}" style="width:100%; height:450px; object-fit:cover; display:block;">
            @elseif($service->image_path)
              <img src="{{ Storage::url($service->image_path) }}" alt="{{ $service->title }}" style="width:100%; height:450px; object-fit:cover; display:block;">
            @else
              <img src="{{ asset('assets/img/services/pexels-tima-miroshnichenko-6755135.jpg') }}" alt="{{ $service->title }}" style="width:100%; height:450px; object-fit:cover; display:block;">
            @endif
          </figure>
        </div>
        <div class="project-details mt-4">
          <h3>{{ $service->title }}</h3>
          <div class="service-content">
            {!! $service->description !!}
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        @if($otherServices->count())
        <div class="sidebar">
          <h3>Other Services</h3>
          <ul class="recent-post">
            @foreach($otherServices as $other)
            <li>
              <figure>
                @if($other->image_path && str_starts_with($other->image_path, 'assets/'))
                  <img src="{{ asset($other->image_path) }}" alt="{{ $other->title }}" style="width:100%; height:80px; object-fit:cover;">
                @elseif($other->image_path)
                  <img src="{{ Storage::url($other->image_path) }}" alt="{{ $other->title }}" style="width:100%; height:80px; object-fit:cover;">
                @else
                  <img src="{{ asset('assets/img/services/pexels-tima-miroshnichenko-6755135.jpg') }}" alt="{{ $other->title }}" style="width:100%; height:80px; object-fit:cover;">
                @endif
              </figure>
              <a href="{{ url($other->slug) }}">{{ $other->title }}</a>
            </li>
            @endforeach
          </ul>
        </div>
        @endif

        
      </div>
    </div>
  </div>
</section>
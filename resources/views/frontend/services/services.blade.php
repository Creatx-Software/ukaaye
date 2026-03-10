<style>
  .service-row { display: flex; flex-wrap: wrap; }
  .service-col { display: flex; }
  .service-col .services {
    display: flex;
    flex-direction: column;
    width: 100%;
  }
  .service-col .services img {
    width: 100%;
    height: 199px;
    object-fit: cover;
    margin-top: auto;
  }
</style>

<section class="gap">
  <div class="container">
    <div class="heading">
      <img src="{{ asset('assets/img/heading-img.png') }}" alt="img">
      <span>Our Services</span>
      <h2>What We Offer at Ukaaye</h2>
    </div>
    @php
      $icons = ['flaticon-link', 'flaticon-global', 'flaticon-maintenance'];
    @endphp
    <div class="row service-row">
      @forelse($services as $service)
      <div class="col-lg-4 col-md-6 mb-4 service-col">
        <div class="services">
          <i class="{{ $icons[$loop->index % 3] }}"></i>
          <h3><a href="{{ url($service->slug) }}">{{ $service->title }}</a></h3>
          <p>{{ Str::limit(strip_tags($service->description), 150) }}</p>
          <a href="{{ url($service->slug) }}"><i class="flaticon-right-up"></i></a>
          @if($service->image_path && str_starts_with($service->image_path, 'assets/'))
            <img src="{{ asset($service->image_path) }}" alt="{{ $service->title }}">
          @elseif($service->image_path)
            <img src="{{ Storage::url($service->image_path) }}" alt="{{ $service->title }}">
          @else
            <img src="{{ asset('assets/img/services/pexels-tima-miroshnichenko-6755135.jpg') }}" alt="{{ $service->title }}">
          @endif
        </div>
      </div>
      @empty
      <div class="col-12 text-center">
        <p>No services available at the moment.</p>
      </div>
      @endforelse
    </div>
  </div>
</section>
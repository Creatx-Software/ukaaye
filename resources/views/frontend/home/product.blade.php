<section class="gap no-bottom">
  <div class="container">
    <div class="heading two">
      <img src="assets/img/heading-img-two.png" alt="Ukaaye Products">
      <span>Telecom & Satellite Solutions</span>
      <h2>Featured Products</h2>
    </div>
    <div class="swiper project-slider">
      <div class="swiper-wrapper" style="align-items: stretch;">
        @foreach($featuredProducts as $index => $product)
        <div class="swiper-slide" style="height: auto; display: flex;">
          <div class="projects" style="display: flex; flex-direction: column; width: 100%;">
            <div class="project-img">
              <figure style="height: 300px; overflow: hidden;">
                <img src="{{ $product->main_img_url }}" alt="{{ $product->title }}" style="width: 100%; height: 100%; object-fit: cover;">
              </figure>
              <img src="assets/img/bolt-img.png" alt="signal icon" class="bolt-img">
              <a href="{{ url($product->slug) }}"><i class="flaticon-right-up"></i></a>
            </div>
            <a href="{{ url($product->slug) }}">{{ $product->title }}</a>
            <h5>{{ $product->brand }}</h5>
            <span>{{ $product->category->name ?? '' }}</span>
          </div>
        </div>
        @endforeach
      </div>
      <div class="swiper-button">
        <div class="swiper-button-next"><i class="flaticon-right-arrow"></i></div>
        <div class="swiper-button-prev"><i class="flaticon-left-arrow"></i></div>
      </div>
    </div>
  </div>
      <div class="center">
        <a href="{{ route('products') }}" class="btn">View All Products</a>
      </div>
</section>

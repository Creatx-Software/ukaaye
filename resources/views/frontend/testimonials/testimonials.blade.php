<section class="gap" style="background-color: #ffffff;">
  <div class="container">

    {{-- Heading --}}
    <div class="heading" style="text-align:center; margin-bottom:50px;">
      <img src="{{ asset('assets/img/heading-img.png') }}" alt="img">
      <span>Client Feedback</span>
      <h2>What Our Clients Say</h2>
    </div>

    <div class="row">
      @forelse($testimonials as $testimonial)
      <div class="col-lg-4 col-md-6" style="margin-bottom:30px;">
        <div style="
          background:#f9f9f9;
          padding:32px 28px;
          height:100%;
          display:flex;
          flex-direction:column;
          justify-content:space-between;
          position:relative;
          border-bottom:3px solid #FFC80B;
          box-shadow: 0 2px 15px rgba(0,0,0,0.07);
        ">

          {{-- Quote Icon --}}
          <div style="
            position:absolute;
            top:20px;
            right:28px;
            font-size:70px;
            line-height:1;
            color:#FFC80B;
            opacity:0.3;
            font-family:Georgia, serif;
          ">"</div>

          {{-- Star Rating --}}
          <div style="display:flex; gap:4px; margin-bottom:16px;">
            @for($i = 1; $i <= 5; $i++)
            <svg width="16" height="16" viewBox="0 0 24 24" fill="{{ $i <= $testimonial->star_count ? '#FFC80B' : '#ddd' }}" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
            </svg>
            @endfor
          </div>

          {{-- Message --}}
          <p style="
            color:#444;
            font-size:15px;
            line-height:1.8;
            flex:1;
            margin-bottom:24px;
          ">{{ $testimonial->message }}</p>

          {{-- Divider --}}
          <div style="width:40px; height:2px; background:#FFC80B; margin-bottom:20px;"></div>

          {{-- Author --}}
          <div style="display:flex; align-items:center; gap:14px;">
            <div style="width:56px; height:56px; border-radius:50%; overflow:hidden; flex-shrink:0; border:2px solid #FFC80B;">
              <img src="{{ $testimonial->image_url }}" alt="{{ $testimonial->name }}" style="width:100%; height:100%; object-fit:cover;">
            </div>
            <div>
              <h5 style="margin:0 0 4px 0; color:#124179; font-size:16px; font-weight:700;">
                {{ $testimonial->name }}
              </h5>
              @if($testimonial->position)
              <span style="color:#124179; font-size:13px; font-weight:600; opacity:0.7;">
                {{ $testimonial->position }}
              </span>
              @endif
            </div>
          </div>

        </div>
      </div>
      @empty
      <div class="col-12">
        <p style="text-align:center; color:#aaa; padding:60px 0;">No testimonials found.</p>
      </div>
      @endforelse
    </div>

  </div>
</section>
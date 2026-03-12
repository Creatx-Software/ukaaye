<section class="gap" style="background-color:#ffffff;">
  <div class="container">

    {{-- Heading --}}
    <div class="heading" style="text-align:center; margin-bottom:50px;">
      <img src="{{ asset('assets/img/heading-img.png') }}" alt="img">
      <span>Who We Are</span>
      <h2>Mission, Vision & Commitment</h2>
    </div>

    <div class="row" style="align-items:stretch;">

      {{-- Mission --}}
      <div class="col-lg-4 col-md-6" style="margin-bottom:30px;">
        <div style="
          height:100%;
          display:flex;
          flex-direction:column;
          padding:40px 32px;
          background:#ffffff;
          border-top:4px solid var(--primary-color);
          position:relative;
          overflow:hidden;
          transition:transform 0.3s ease, box-shadow 0.3s ease;
        "
        onmouseover="this.style.transform='translateY(-6px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.08)';"
        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none';">

          {{-- Background Number --}}
          <div style="
            position:absolute;
            bottom:-20px;
            right:-10px;
            font-size:120px;
            font-weight:900;
            color:var(--primary-color);
            opacity:0.04;
            line-height:1;
            font-family:Georgia,serif;
            pointer-events:none;
          ">01</div>

          {{-- Icon --}}
          <div style="
            width:70px;
            height:70px;
            background:var(--primary-color);
            display:flex;
            align-items:center;
            justify-content:center;
            margin-bottom:28px;
            flex-shrink:0;
          ">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"/>
              <circle cx="12" cy="12" r="6"/>
              <circle cx="12" cy="12" r="2"/>
            </svg>
          </div>

          {{-- Label --}}
          <span style="
            color:var(--primary-color);
            font-size:12px;
            font-weight:800;
            text-transform:uppercase;
            letter-spacing:3px;
            display:block;
            margin-bottom:12px;
          ">Our Mission</span>

          {{-- Title --}}
          <h3 style="
            color:var(--primary-color);
            font-size:24px;
            font-weight:800;
            margin:0 0 18px 0;
            line-height:1.3;
          ">Reliable Connectivity for Sri Lanka</h3>

          {{-- Divider --}}
          <div style="width:50px; height:3px; background:var(--primary-color); margin-bottom:20px;"></div>

          {{-- Description --}}
          <p style="
            color:var(--primary-color);
            font-size:15px;
            line-height:1.9;
            margin:0 0 24px 0;
            flex:1;
          ">
            Since 1960, our mission is to be Sri Lanka’s most trusted wholesale supplier of CATV, satellite, CCTV and fiber optic products – delivering quality, technical support and fast service to every installer, dealer and business.
          </p>

          {{-- Points --}}
          <ul style="list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:10px;">
            @foreach(['Customer-first solutions', 'Quality brands & competitive prices', 'Nationwide delivery & support'] as $point)
            <li style="display:flex; align-items:center; gap:10px; color:var(--primary-color); font-size:14px; font-weight:600;">
              <span style="width:20px; height:20px; background:var(--primary-color); display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="3.5">
                  <polyline points="20 6 9 17 4 12"/>
                </svg>
              </span>
              {{ $point }}
            </li>
            @endforeach
          </ul>

        </div>
      </div>

      {{-- Vision --}}
      <div class="col-lg-4 col-md-6" style="margin-bottom:30px;">
        <div style="
          height:100%;
          display:flex;
          flex-direction:column;
          padding:40px 32px;
          background:var(--primary-color);
          border-top:4px solid #ffffff;
          position:relative;
          overflow:hidden;
          transition:transform 0.3s ease, box-shadow 0.3s ease;
        "
        onmouseover="this.style.transform='translateY(-6px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.25)';"
        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none';">

          {{-- Background Number --}}
          <div style="
            position:absolute;
            bottom:-20px;
            right:-10px;
            font-size:120px;
            font-weight:900;
            color:#ffffff;
            opacity:0.04;
            line-height:1;
            font-family:Georgia,serif;
            pointer-events:none;
          ">02</div>

          {{-- Icon --}}
          <div style="
            width:70px;
            height:70px;
            background:#ffffff;
            display:flex;
            align-items:center;
            justify-content:center;
            margin-bottom:28px;
            flex-shrink:0;
          ">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="var(--primary-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
              <circle cx="12" cy="12" r="3"/>
            </svg>
          </div>

          {{-- Label --}}
          <span style="
            color:#ffffff;
            font-size:12px;
            font-weight:800;
            text-transform:uppercase;
            letter-spacing:3px;
            display:block;
            margin-bottom:12px;
          ">Our Vision</span>

          {{-- Title --}}
          <h3 style="
            color:#ffffff;
            font-size:24px;
            font-weight:800;
            margin:0 0 18px 0;
            line-height:1.3;
          ">Leading Sri Lanka’s Connectivity</h3>

          {{-- Divider --}}
          <div style="width:50px; height:3px; background:#ffffff; margin-bottom:20px;"></div>

          {{-- Description --}}
          <p style="
            color:#ffffff;
            font-size:15px;
            line-height:1.9;
            margin:0 0 24px 0;
            flex:1;
          ">
            To become the #1 trusted partner for CATV, satellite, CCTV and fiber optic solutions across Sri Lanka, empowering installers and businesses with the latest technology and unmatched service.
          </p>

          {{-- Points --}}
          <ul style="list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:10px;">
            @foreach(['Industry leadership', 'Fiber & data innovation', 'Nationwide accessibility'] as $point)
            <li style="display:flex; align-items:center; gap:10px; color:#ffffff; font-size:14px; font-weight:600;">
              <span style="width:20px; height:20px; background:#ffffff; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="var(--primary-color)" stroke-width="3.5">
                  <polyline points="20 6 9 17 4 12"/>
                </svg>
              </span>
              {{ $point }}
            </li>
            @endforeach
          </ul>

        </div>
      </div>

      {{-- Commitment --}}
      <div class="col-lg-4 col-md-6" style="margin-bottom:30px;">
        <div style="
          height:100%;
          display:flex;
          flex-direction:column;
          padding:40px 32px;
          background:#ffffff;
          border-top:4px solid var(--primary-color);
          position:relative;
          overflow:hidden;
          transition:transform 0.3s ease, box-shadow 0.3s ease;
        "
        onmouseover="this.style.transform='translateY(-6px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.08)';"
        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none';">

          {{-- Background Number --}}
          <div style="
            position:absolute;
            bottom:-20px;
            right:-10px;
            font-size:120px;
            font-weight:900;
            color:var(--primary-color);
            opacity:0.04;
            line-height:1;
            font-family:Georgia,serif;
            pointer-events:none;
          ">03</div>

          {{-- Icon --}}
          <div style="
            width:70px;
            height:70px;
            background:var(--primary-color);
            display:flex;
            align-items:center;
            justify-content:center;
            margin-bottom:28px;
            flex-shrink:0;
          ">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
          </div>

          {{-- Label --}}
          <span style="
            color:var(--primary-color);
            font-size:12px;
            font-weight:800;
            text-transform:uppercase;
            letter-spacing:3px;
            display:block;
            margin-bottom:12px;
          ">Our Commitment</span>

          {{-- Title --}}
          <h3 style="
            color:var(--primary-color);
            font-size:24px;
            font-weight:800;
            margin:0 0 18px 0;
            line-height:1.3;
          ">Trust That Lasts</h3>

          {{-- Divider --}}
          <div style="width:50px; height:3px; background:var(--primary-color); margin-bottom:20px;"></div>

          {{-- Description --}}
          <p style="
            color:var(--primary-color);
            font-size:15px;
            line-height:1.9;
            margin:0 0 24px 0;
            flex:1;
          ">
            We are committed to ethical practices, technical excellence and complete customer satisfaction – delivering reliable products, fast support and long-term partnerships across Sri Lanka.
          </p>

          {{-- Points --}}
          <ul style="list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:10px;">
            @foreach(['Ethical & transparent business', 'Dedicated technical guidance', 'Long-term installer partnerships'] as $point)
            <li style="display:flex; align-items:center; gap:10px; color:var(--primary-color); font-size:14px; font-weight:600;">
              <span style="width:20px; height:20px; background:var(--primary-color); display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="3.5">
                  <polyline points="20 6 9 17 4 12"/>
                </svg>
              </span>
              {{ $point }}
            </li>
            @endforeach
          </ul>

        </div>
      </div>

    </div>

  </div>
</section>
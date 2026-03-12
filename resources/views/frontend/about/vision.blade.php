<div style="
      background:var(--common-colour);
      padding:40px 50px;
      margin-top:20px;
      display:flex;
      flex-wrap:wrap;
      align-items:center;
      justify-content:space-between;
      gap:24px;
      position:relative;
      overflow:hidden;
    ">
      {{-- Decorative circles --}}
      <div style="position:absolute; top:-40px; right:200px; width:150px; height:150px; border-radius:50%; border:2px solid rgba(255,200,11,0.15); pointer-events:none;"></div>
      <div style="position:absolute; top:-60px; right:160px; width:220px; height:220px; border-radius:50%; border:2px solid rgba(255,200,11,0.08); pointer-events:none;"></div>

      <div>
        <span style="color:var(--theme-colour); font-size:12px; font-weight:800; text-transform:uppercase; letter-spacing:3px; display:block; margin-bottom:8px;">
          Together We Grow
        </span>
        <h3 style="color:#fff; font-size:26px; font-weight:800; margin:0; line-height:1.3;">
          Ready to Work With a Team You Can Trust?
        </h3>
      </div>

      <a href="{{ route('contactus') }}" style="
        display:inline-flex;
        align-items:center;
        gap:10px;
        background:var(--theme-colour);
        color:var(--common-colour);
        padding:14px 32px;
        font-size:15px;
        font-weight:800;
        text-decoration:none;
        flex-shrink:0;
        transition:opacity 0.3s;
      "
      onmouseover="this.style.opacity='0.85'"
      onmouseout="this.style.opacity='1'">
        Get In Touch
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--common-colour)" stroke-width="2.5">
          <line x1="5" y1="12" x2="19" y2="12"/>
          <polyline points="12 5 19 12 12 19"/>
        </svg>
      </a>
    </div>
<section class="gap" style="background-color:#ffffff;">
  <div class="container">

    {{-- Page Header --}}
    <div style="background:var(--common-colour); padding:50px 40px; margin-bottom:50px; position:relative; overflow:hidden;">
      <div style="position:absolute; top:-30px; right:-30px; width:180px; height:180px; border-radius:50%; background:rgba(255,200,11,0.1);"></div>
      <div style="position:absolute; bottom:-50px; right:80px; width:120px; height:120px; border-radius:50%; background:rgba(255,200,11,0.07);"></div>
      <span style="color:var(--theme-colour); font-size:13px; font-weight:700; text-transform:uppercase; letter-spacing:2px; display:block; margin-bottom:12px;">
        Legal
      </span>
      <h1 style="color:#ffffff; font-size:38px; font-weight:800; margin:0 0 12px 0;">Privacy Policy</h1>
      <p style="color:rgba(255,255,255,0.7); margin:0; font-size:15px;">
        Last updated: {{ date('F d, Y') }}
      </p>
    </div>

    <div class="row">

      {{-- Main Content --}}
      <div class="col-lg-8">

        {{-- Introduction --}}
        <div style="margin-bottom:40px;">
          <p style="color:#555; font-size:16px; line-height:1.9;">
            Welcome to our Privacy Policy page. This policy describes how we collect, use, and protect your personal information when you visit our website or use our services. By accessing our website, you agree to the terms outlined in this policy.
          </p>
        </div>

        {{-- Section --}}
        <div style="margin-bottom:36px;">
          <div style="display:flex; align-items:center; gap:14px; margin-bottom:16px;">
            <div style="width:40px; height:40px; background:var(--theme-colour); display:flex; align-items:center; justify-content:center; flex-shrink:0; font-weight:800; color:var(--common-colour); font-size:16px;">1</div>
            <h3 style="margin:0; color:var(--common-colour); font-size:22px; font-weight:700;">Information We Collect</h3>
          </div>
          <div style="border-left:3px solid var(--theme-colour); padding-left:24px;">
            <p style="color:#555; font-size:15px; line-height:1.9; margin-bottom:14px;">We may collect the following types of information:</p>
            <ul style="list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:10px;">
              @foreach([
                'Personal identification information (name, email address, phone number)',
                'Usage data including pages visited, time spent, and browser type',
                'Device information such as IP address and operating system',
                'Information you voluntarily provide through contact forms or inquiries',
                'Cookies and tracking data for improving user experience',
              ] as $item)
              <li style="display:flex; gap:12px; align-items:flex-start; color:#555; font-size:15px;">
                <span style="width:8px; height:8px; border-radius:50%; background:var(--theme-colour); margin-top:7px; flex-shrink:0;"></span>
                {{ $item }}
              </li>
              @endforeach
            </ul>
          </div>
        </div>

        {{-- Section --}}
        <div style="margin-bottom:36px;">
          <div style="display:flex; align-items:center; gap:14px; margin-bottom:16px;">
            <div style="width:40px; height:40px; background:var(--theme-colour); display:flex; align-items:center; justify-content:center; flex-shrink:0; font-weight:800; color:var(--common-colour); font-size:16px;">2</div>
            <h3 style="margin:0; color:var(--common-colour); font-size:22px; font-weight:700;">How We Use Your Information</h3>
          </div>
          <div style="border-left:3px solid var(--theme-colour); padding-left:24px;">
            <p style="color:#555; font-size:15px; line-height:1.9; margin-bottom:14px;">The information we collect is used to:</p>
            <ul style="list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:10px;">
              @foreach([
                'Provide, operate, and improve our website and services',
                'Respond to your inquiries and customer support requests',
                'Send periodic emails regarding your orders or other products and services',
                'Analyze website usage to improve user experience',
                'Comply with legal obligations and enforce our policies',
              ] as $item)
              <li style="display:flex; gap:12px; align-items:flex-start; color:#555; font-size:15px;">
                <span style="width:8px; height:8px; border-radius:50%; background:var(--theme-colour); margin-top:7px; flex-shrink:0;"></span>
                {{ $item }}
              </li>
              @endforeach
            </ul>
          </div>
        </div>

        {{-- Section --}}
        <div style="margin-bottom:36px;">
          <div style="display:flex; align-items:center; gap:14px; margin-bottom:16px;">
            <div style="width:40px; height:40px; background:var(--theme-colour); display:flex; align-items:center; justify-content:center; flex-shrink:0; font-weight:800; color:var(--common-colour); font-size:16px;">3</div>
            <h3 style="margin:0; color:var(--common-colour); font-size:22px; font-weight:700;">Cookies Policy</h3>
          </div>
          <div style="border-left:3px solid var(--theme-colour); padding-left:24px;">
            <p style="color:#555; font-size:15px; line-height:1.9;">
              Our website uses cookies to enhance your browsing experience. Cookies are small files stored on your device that help us remember your preferences and understand how you interact with our site. You can choose to disable cookies through your browser settings, however this may affect the functionality of our website.
            </p>
          </div>
        </div>

        {{-- Section --}}
        <div style="margin-bottom:36px;">
          <div style="display:flex; align-items:center; gap:14px; margin-bottom:16px;">
            <div style="width:40px; height:40px; background:var(--theme-colour); display:flex; align-items:center; justify-content:center; flex-shrink:0; font-weight:800; color:var(--common-colour); font-size:16px;">4</div>
            <h3 style="margin:0; color:var(--common-colour); font-size:22px; font-weight:700;">Data Security</h3>
          </div>
          <div style="border-left:3px solid var(--theme-colour); padding-left:24px;">
            <p style="color:#555; font-size:15px; line-height:1.9;">
              We implement appropriate technical and organizational security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet or electronic storage is 100% secure, and we cannot guarantee absolute security.
            </p>
          </div>
        </div>

        {{-- Section --}}
        <div style="margin-bottom:36px;">
          <div style="display:flex; align-items:center; gap:14px; margin-bottom:16px;">
            <div style="width:40px; height:40px; background:var(--theme-colour); display:flex; align-items:center; justify-content:center; flex-shrink:0; font-weight:800; color:var(--common-colour); font-size:16px;">5</div>
            <h3 style="margin:0; color:var(--common-colour); font-size:22px; font-weight:700;">Third-Party Sharing</h3>
          </div>
          <div style="border-left:3px solid var(--theme-colour); padding-left:24px;">
            <p style="color:#555; font-size:15px; line-height:1.9;">
              We do not sell, trade, or rent your personal information to third parties. We may share generic aggregated demographic information not linked to any personal identification information with our business partners and trusted affiliates for the purposes outlined above.
            </p>
          </div>
        </div>

        {{-- Section --}}
        <div style="margin-bottom:36px;">
          <div style="display:flex; align-items:center; gap:14px; margin-bottom:16px;">
            <div style="width:40px; height:40px; background:var(--theme-colour); display:flex; align-items:center; justify-content:center; flex-shrink:0; font-weight:800; color:var(--common-colour); font-size:16px;">6</div>
            <h3 style="margin:0; color:var(--common-colour); font-size:22px; font-weight:700;">Your Rights</h3>
          </div>
          <div style="border-left:3px solid var(--theme-colour); padding-left:24px;">
            <p style="color:#555; font-size:15px; line-height:1.9; margin-bottom:14px;">You have the right to:</p>
            <ul style="list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:10px;">
              @foreach([
                'Access the personal data we hold about you',
                'Request correction of inaccurate personal data',
                'Request deletion of your personal data',
                'Object to processing of your personal data',
                'Request restriction of processing your personal data',
                'Withdraw consent at any time where we rely on consent to process your data',
              ] as $item)
              <li style="display:flex; gap:12px; align-items:flex-start; color:#555; font-size:15px;">
                <span style="width:8px; height:8px; border-radius:50%; background:var(--theme-colour); margin-top:7px; flex-shrink:0;"></span>
                {{ $item }}
              </li>
              @endforeach
            </ul>
          </div>
        </div>

        {{-- Section --}}
        <div style="margin-bottom:36px;">
          <div style="display:flex; align-items:center; gap:14px; margin-bottom:16px;">
            <div style="width:40px; height:40px; background:var(--theme-colour); display:flex; align-items:center; justify-content:center; flex-shrink:0; font-weight:800; color:var(--common-colour); font-size:16px;">7</div>
            <h3 style="margin:0; color:var(--common-colour); font-size:22px; font-weight:700;">Changes to This Policy</h3>
          </div>
          <div style="border-left:3px solid var(--theme-colour); padding-left:24px;">
            <p style="color:#555; font-size:15px; line-height:1.9;">
              We reserve the right to update this privacy policy at any time. We will notify you of any changes by posting the new policy on this page with an updated date. We encourage you to review this policy periodically to stay informed about how we are protecting your information.
            </p>
          </div>
        </div>

      </div>

      {{-- Sticky Sidebar --}}
      <div class="col-lg-4">
        <div style="position:sticky; top:30px;">

          {{-- Quick Nav --}}
          <div style="background:#f9f9f9; padding:28px; margin-bottom:24px; border-top:3px solid var(--common-colour);">
            <h4 style="color:var(--common-colour); font-size:18px; font-weight:700; margin:0 0 20px 0;">Quick Navigation</h4>
            <ul style="list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:4px;">
              @foreach([
                '1' => 'Information We Collect',
                '2' => 'How We Use Your Information',
                '3' => 'Cookies Policy',
                '4' => 'Data Security',
                '5' => 'Third-Party Sharing',
                '6' => 'Your Rights',
                '7' => 'Changes to This Policy',
              ] as $num => $title)
              <li>
                <a href="#" style="display:flex; align-items:center; gap:10px; padding:10px 0; color:#555; text-decoration:none; font-size:14px; border-bottom:1px solid #eee;">
                  <span style="width:24px; height:24px; background:var(--theme-colour); color:var(--common-colour); font-size:11px; font-weight:800; display:flex; align-items:center; justify-content:center; flex-shrink:0;">{{ $num }}</span>
                  {{ $title }}
                </a>
              </li>
              @endforeach
            </ul>
          </div>

          {{-- Contact Card --}}
          <div style="background:var(--common-colour); padding:28px; text-align:center;">
            <div style="width:56px; height:56px; background:var(--theme-colour); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 16px;">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--common-colour)" stroke-width="2.5">
                <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.63A2 2 0 012 .18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
              </svg>
            </div>
            <h4 style="color:#fff; font-size:18px; font-weight:700; margin:0 0 10px 0;">Have Questions?</h4>
            <p style="color:rgba(255,255,255,0.7); font-size:14px; margin:0 0 20px 0; line-height:1.7;">
              If you have any questions about our Privacy Policy, feel free to contact us.
            </p>
            <a href="{{ route('contactus') }}"
               style="display:inline-block; background:var(--theme-colour); color:var(--common-colour); padding:10px 28px; font-weight:700; font-size:14px; text-decoration:none;">
              Contact Us
            </a>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>
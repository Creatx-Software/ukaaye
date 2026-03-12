<section class="gap" style="background-color:#ffffff;">
  <div class="container">

    {{-- Page Header --}}
    <div style="background:var(--common-colour); padding:50px 40px; margin-bottom:50px; position:relative; overflow:hidden;">
      <div style="position:absolute; top:-30px; right:-30px; width:180px; height:180px; border-radius:50%; background:rgba(255,200,11,0.1);"></div>
      <div style="position:absolute; bottom:-50px; right:80px; width:120px; height:120px; border-radius:50%; background:rgba(255,200,11,0.07);"></div>
      <span style="color:var(--theme-colour); font-size:13px; font-weight:700; text-transform:uppercase; letter-spacing:2px; display:block; margin-bottom:12px;">
        Legal
      </span>
      <h1 style="color:#ffffff; font-size:38px; font-weight:800; margin:0 0 12px 0;">Terms & Conditions</h1>
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
            Please read these Terms and Conditions carefully before using our website or services. By accessing or using our services, you agree to be bound by these terms. If you disagree with any part of these terms, you may not access our services.
          </p>
        </div>

        @php
          $sections = [
            ['num' => '1', 'title' => 'Acceptance of Terms', 'content' => null, 'list' => null, 'paragraph' => 'By accessing and using this website, you accept and agree to be bound by these Terms and Conditions and our Privacy Policy. These terms apply to all visitors, users, and others who access or use our services. We reserve the right to modify these terms at any time without prior notice.'],
            ['num' => '2', 'title' => 'Use of Our Services', 'paragraph' => null, 'content' => 'You agree to use our services only for lawful purposes. You are prohibited from:', 'list' => [
              'Violating any applicable local, national, or international laws or regulations',
              'Transmitting any unsolicited or unauthorized advertising or promotional material',
              'Impersonating any person or entity or falsely stating your affiliation',
              'Interfering with or disrupting the integrity or performance of our services',
              'Attempting to gain unauthorized access to any part of our systems',
            ]],
            ['num' => '3', 'title' => 'Intellectual Property', 'paragraph' => 'All content on this website, including but not limited to text, graphics, logos, images, and software, is the property of our company and is protected by applicable intellectual property laws. You may not reproduce, distribute, modify, or create derivative works without our express written permission.', 'content' => null, 'list' => null],
            ['num' => '4', 'title' => 'Product & Service Terms', 'paragraph' => null, 'content' => 'When purchasing products or services from us, you agree that:', 'list' => [
              'All information you provide during the purchase process is accurate and complete',
              'You are authorized to use the payment method you provide',
              'Prices are subject to change without notice',
              'We reserve the right to refuse or cancel orders at our discretion',
              'Delivery timeframes are estimates and not guaranteed',
            ]],
            ['num' => '5', 'title' => 'Limitation of Liability', 'paragraph' => 'To the fullest extent permitted by law, we shall not be liable for any indirect, incidental, special, consequential, or punitive damages, including but not limited to loss of profits, data, or goodwill, arising from your access to or use of our services, even if we have been advised of the possibility of such damages.', 'content' => null, 'list' => null],
            ['num' => '6', 'title' => 'Third-Party Links', 'paragraph' => 'Our website may contain links to third-party websites. These links are provided solely for your convenience and do not constitute an endorsement. We have no control over the content of those sites and accept no responsibility for them or for any loss or damage that may arise from your use of them.', 'content' => null, 'list' => null],
            ['num' => '7', 'title' => 'Privacy Policy', 'paragraph' => 'Your use of our services is also governed by our Privacy Policy, which is incorporated into these Terms and Conditions by reference. Please review our Privacy Policy to understand our practices regarding the collection and use of your personal information.', 'content' => null, 'list' => null],
            ['num' => '8', 'title' => 'Termination', 'paragraph' => 'We reserve the right to terminate or suspend your access to our services immediately, without prior notice or liability, for any reason, including but not limited to a breach of these Terms. Upon termination, your right to use our services will cease immediately.', 'content' => null, 'list' => null],
            ['num' => '9', 'title' => 'Governing Law', 'paragraph' => 'These Terms shall be governed by and construed in accordance with the laws of Sri Lanka, without regard to its conflict of law provisions. Any disputes arising under these terms shall be subject to the exclusive jurisdiction of the courts located in Sri Lanka.', 'content' => null, 'list' => null],
            ['num' => '10', 'title' => 'Contact Information', 'paragraph' => 'If you have any questions about these Terms and Conditions, please contact us through our official contact page or email us directly. We aim to respond to all inquiries within 2 business days.', 'content' => null, 'list' => null],
          ];
        @endphp

        @foreach($sections as $section)
        <div style="margin-bottom:36px;">
          <div style="display:flex; align-items:center; gap:14px; margin-bottom:16px;">
            <div style="width:40px; height:40px; background:var(--theme-colour); display:flex; align-items:center; justify-content:center; flex-shrink:0; font-weight:800; color:var(--common-colour); font-size:15px;">
              {{ $section['num'] }}
            </div>
            <h3 style="margin:0; color:var(--common-colour); font-size:22px; font-weight:700;">
              {{ $section['title'] }}
            </h3>
          </div>
          <div style="border-left:3px solid var(--theme-colour); padding-left:24px;">
            @if($section['paragraph'])
            <p style="color:#555; font-size:15px; line-height:1.9; margin:0;">
              {{ $section['paragraph'] }}
            </p>
            @endif
            @if($section['content'])
            <p style="color:#555; font-size:15px; line-height:1.9; margin-bottom:14px;">
              {{ $section['content'] }}
            </p>
            @endif
            @if($section['list'])
            <ul style="list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:10px;">
              @foreach($section['list'] as $item)
              <li style="display:flex; gap:12px; align-items:flex-start; color:#555; font-size:15px;">
                <span style="width:8px; height:8px; border-radius:50%; background:var(--theme-colour); margin-top:7px; flex-shrink:0;"></span>
                {{ $item }}
              </li>
              @endforeach
            </ul>
            @endif
          </div>
        </div>
        @endforeach

        {{-- Agreement Box --}}
        <div style="background:#f9f9f9; border:2px solid var(--theme-colour); padding:28px; margin-top:20px; display:flex; gap:20px; align-items:flex-start;">
          <div style="width:48px; height:48px; background:var(--theme-colour); display:flex; align-items:center; justify-content:center; flex-shrink:0;">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--common-colour)" stroke-width="2.5">
              <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
          </div>
          <div>
            <h5 style="color:var(--common-colour); font-size:16px; font-weight:700; margin:0 0 8px 0;">Agreement Acknowledgement</h5>
            <p style="color:#555; font-size:14px; line-height:1.8; margin:0;">
              By using our website and services, you acknowledge that you have read, understood, and agree to be bound by these Terms and Conditions. If you do not agree to these terms, please discontinue use of our services immediately.
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
              @foreach($sections as $section)
              <li>
                <a href="#" style="display:flex; align-items:center; gap:10px; padding:10px 0; color:#555; text-decoration:none; font-size:14px; border-bottom:1px solid #eee;">
                  <span style="width:24px; height:24px; background:var(--theme-colour); color:var(--common-colour); font-size:11px; font-weight:800; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                    {{ $section['num'] }}
                  </span>
                  {{ $section['title'] }}
                </a>
              </li>
              @endforeach
            </ul>
          </div>

          {{-- Related Links --}}
          <div style="background:var(--common-colour); padding:28px;">
            <h4 style="color:#fff; font-size:18px; font-weight:700; margin:0 0 20px 0;">Related Pages</h4>
            <ul style="list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:12px;">
              <li>
                <a href="{{ route('privacypolicy') }}"
                   style="display:flex; align-items:center; gap:10px; color:rgba(255,255,255,0.8); text-decoration:none; font-size:14px;">
                  <span style="width:6px; height:6px; background:var(--theme-colour); border-radius:50%; flex-shrink:0;"></span>
                  Privacy Policy
                </a>
              </li>
              <li>
                <a href="{{ route('contactus') }}"
                   style="display:flex; align-items:center; gap:10px; color:rgba(255,255,255,0.8); text-decoration:none; font-size:14px;">
                  <span style="width:6px; height:6px; background:var(--theme-colour); border-radius:50%; flex-shrink:0;"></span>
                  Contact Us
                </a>
              </li>
              <li>
                <a href="{{ route('about') }}"
                   style="display:flex; align-items:center; gap:10px; color:rgba(255,255,255,0.8); text-decoration:none; font-size:14px;">
                  <span style="width:6px; height:6px; background:var(--theme-colour); border-radius:50%; flex-shrink:0;"></span>
                  About Us
                </a>
              </li>
              <li>
                <a href="{{ route('faq') }}"
                   style="display:flex; align-items:center; gap:10px; color:rgba(255,255,255,0.8); text-decoration:none; font-size:14px;">
                  <span style="width:6px; height:6px; background:var(--theme-colour); border-radius:50%; flex-shrink:0;"></span>
                  FAQ's
                </a>
              </li>
            </ul>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>
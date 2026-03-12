<section class="gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="questions-img">
                    <figure>
                        <img src="{{ asset('assets/img/home/Gemini_Generated_Image_qtm7zoqtm7zoqtm7.png') }}" alt="img">
                    </figure>
                </div>
                <div class="questions">
                    <h3>Have Questions? We are Here to Help You!</h3>
                    <p>Have Questions? We are Here to Help You!</p>
                    <a href="{{ route('contactus') }}" class="btn bk">Start Consulting</a>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="heading two">
                    <span>Frequently Asked Questions</span>
                    <h2>Common Questions!</h2>
                </div>

                <div class="accordion">
                    @forelse ($faqs as $faq)
                        <div class="accordion-item {{ $loop->first ? 'active' : '' }}">
                            <a href="#" class="heading">
                                <div class="icon"></div>
                                <div class="title">{{ $faq->question }}</div>
                            </a>

                            <div class="content" style="{{ $loop->first ? 'display: block;' : '' }}">
                                {!! $faq->answer !!}
                            </div>
                        </div>
                    @empty
                        <div class="alert alert-info text-center">
                            No FAQs available at the moment.
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
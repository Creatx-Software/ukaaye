<section class="gap our-blog">
  <div class="container">
    <div class="row">

      {{-- Main Blog Content --}}
      <div class="col-lg-8">
        <div class="blog pb-0">
          <div class="blog-img">
            <figure>
              <img src="{{ $blog->image_url }}" alt="{{ $blog->title }}" style="width:100%; height:420px; object-fit:cover;">
            </figure>
            <div class="admin">
              <div style="display:flex; flex-direction:column; gap:6px; align-items:flex-start;">
                <h5 style="margin:0; background:#1a3c6e; color:#fff; padding:4px 12px; display:inline-block;">
                  {{ $blog->published_at->format('M d, Y') }}
                </h5>
                <h6 style="margin:0; background:#f5c518; color:#1a1a1a; padding:4px 12px; display:inline-block;">
                  By {{ $blog->author_name ?? 'Admin' }}
                </h6>
              </div>
            </div>
          </div>

          <h2><a href="{{ url($blog->slug) }}">{{ $blog->title }}</a></h2>

          <div class="blog-details">
            {!! $blog->description !!}
          </div>

          {{-- Tags --}}
          @if($blog->tags->count())
          <div style="margin-top:24px; display:flex; flex-wrap:wrap; gap:8px; align-items:center;">
            <strong>Tags:</strong>
            @foreach($blog->tags as $tag)
            <a href="{{ route('blog', ['tag' => $tag->slug]) }}" class="blog-detail-tag">
              {{ $tag->name }}
            </a>
            @endforeach
          </div>
          @endif
        </div>

        {{-- Related Blogs --}}
        @if($relatedBlogs->count())
        <div style="margin-top:50px;">
          <h3 style="margin-bottom:24px;">Related Posts</h3>
          <div class="row">
            @foreach($relatedBlogs as $related)
            <div class="col-lg-4 col-md-6" style="margin-bottom:30px;">
              <div class="projects" style="height:100%; display:flex; flex-direction:column;">
                <div class="project-img" style="height:200px; overflow:hidden; position:relative; flex-shrink:0;">
                  <figure style="margin:0; height:100%;">
                    <img src="{{ $related->image_url }}" alt="{{ $related->title }}" style="width:100%; height:100%; object-fit:cover;">
                  </figure>
                  <img src="{{ asset('assets/img/bolt-img.png') }}" alt="img" class="bolt-img">
                  <a href="{{ url($related->slug) }}"><i class="flaticon-right-up"></i></a>
                </div>
                <div style="flex:1; display:flex; flex-direction:column; gap:6px; padding-top:12px;">
                  <a href="{{ url($related->slug) }}" style="font-size:16px; font-weight:700; line-height:22px;">{{ $related->title }}</a>
                  <h5 style="font-size:13px; font-weight:600; margin:0;">{{ $related->published_at->format('M d, Y') }}</h5>
                  <span style="font-size:12px; font-weight:600; margin:0;">{{ $related->category->name ?? 'General' }}</span>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        @endif
      </div>

      {{-- Sidebar --}}
      <div class="col-lg-4 blog-detail-sidebar-col">

        {{-- Search --}}
        <div class="sidebar">
          <h3>Search</h3>
          <form action="{{ route('blog') }}" method="GET">
            <div class="blog-sidebar-search">
              <input type="text" name="search" placeholder="Search blogs...">
              <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
          </form>
        </div>

        {{-- Recent Posts --}}
        <div class="sidebar">
          <h3>Recent Posts</h3>
          <ul class="recent-post">
            @foreach($recentPosts as $index => $post)
            <li>
              @if($index === 0)
              <figure>
                <img src="{{ $post->image_url }}" alt="{{ $post->title }}" style="width:100%; height:130px; object-fit:cover;">
              </figure>
              @endif
              <a href="{{ url($post->slug) }}" style="font-size:16px; font-weight:600;">{{ $post->title }}</a>
              <h6>{{ $post->published_at->format('M d, Y') }}</h6>
            </li>
            @endforeach
          </ul>
        </div>

        {{-- Categories --}}
        @if($categories->count())
        <div class="sidebar">
          <h3>Categories</h3>
          <ul class="meta">
            @foreach($categories as $category)
            <li>
              <a href="{{ route('blog', ['category' => $category->slug]) }}" style="font-size:14px; font-weight:400;">
                {{ Str::limit($category->name, 25) }}
                <span class="blog-sidebar-count">({{ $category->blogs_count }})</span>
              </a>
            </li>
            @endforeach
          </ul>
        </div>
        @endif

        {{-- Tags --}}
        @if($allTags->count())
        <div class="sidebar">
          <h3>Tags</h3>
          <div class="blog-sidebar-tags">
            @foreach($allTags as $tag)
            <a href="{{ route('blog', ['tag' => $tag->slug]) }}" class="blog-sidebar-tag">
              {{ $tag->name }}
            </a>
            @endforeach
          </div>
        </div>
        @endif

      </div>
    </div>
  </div>
</section>

<style>
  /* Shared sidebar styles (mirrors blog listing page) */
  .blog-sidebar-search {
    display: flex;
  }
  .blog-sidebar-search input {
    flex: 1;
    padding: 12px 16px;
    border: 1px solid #e0e0e0;
    border-right: none;
    background: #fafafa;
    color: #333;
    font-size: 14px;
    outline: none;
    transition: border-color 0.2s;
  }
  .blog-sidebar-search input:focus {
    border-color: var(--common-colour);
    background: #fff;
  }
  .blog-sidebar-search button {
    padding: 12px 16px;
    background: var(--theme-colour);
    border: none;
    cursor: pointer;
    transition: background 0.2s;
  }
  .blog-sidebar-search button:hover {
    background: var(--common-colour);
    color: #fff;
  }
  .blog-sidebar-count {
    float: right;
    font-size: 13px;
    font-weight: 600;
    color: var(--common-colour);
  }
  .blog-sidebar-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
  }
  .blog-sidebar-tag {
    display: inline-block;
    padding: 6px 14px;
    font-size: 13px;
    font-weight: 600;
    text-decoration: none;
    border: 1.5px solid #d0d0d0;
    color: #555;
    border-radius: 3px;
    transition: all 0.2s ease;
  }
  .blog-sidebar-tag:hover {
    background: var(--common-colour);
    border-color: var(--common-colour);
    color: #fff !important;
  }

  /* Inline post tags */
  .blog-detail-tag {
    display: inline-block;
    padding: 5px 14px;
    font-size: 13px;
    font-weight: 600;
    text-decoration: none;
    border: 1.5px solid #d0d0d0;
    color: #555;
    border-radius: 3px;
    transition: all 0.2s ease;
  }
  .blog-detail-tag:hover {
    background: var(--common-colour);
    border-color: var(--common-colour);
    color: #fff !important;
  }

  @media (max-width: 991px) {
    .blog-detail-sidebar-col {
      margin-top: 40px;
    }
  }
</style>

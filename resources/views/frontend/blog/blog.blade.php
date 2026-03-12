<section class="gap our-projects">
  <div class="container">

{{-- Active Filter Banner --}}
@if(request()->hasAny(['category', 'tag', 'search']))
<div class="blog-filter-banner">
  <span class="blog-filter-banner__text">
    @if(request('search'))
      Showing results for: <strong>{{ request('search') }}</strong>
    @elseif(request('category'))
      Filtered by category: <strong>{{ request('category') }}</strong>
    @elseif(request('tag'))
      Filtered by tag: <strong>{{ request('tag') }}</strong>
    @endif
  </span>
  <a href="{{ route('blog') }}" class="blog-filter-banner__clear">
    <i class="fa-solid fa-xmark"></i> Clear filter
  </a>
</div>
@endif

    <div class="row">

      {{-- Blog Cards --}}
      <div class="col-lg-9">
        <div class="row">
          @forelse($blogs as $blog)
          <div class="col-lg-4 col-md-6" style="margin-bottom:30px;">
            <div class="projects" style="height:100%; display:flex; flex-direction:column;">
              <div class="project-img" style="height:280px; overflow:hidden; position:relative; flex-shrink:0;">
                <figure style="margin:0; height:100%;">
                  <img src="{{ $blog->image_url }}" alt="{{ $blog->title }}" style="width:100%; height:100%; object-fit:cover;">
                </figure>
                <img src="{{ asset('assets/img/bolt-img.png') }}" alt="img" class="bolt-img">
                <a href="{{ url($blog->slug) }}"><i class="flaticon-right-up"></i></a>
              </div>
              <div style="flex:1; display:flex; flex-direction:column; gap:6px; padding-top:12px;">
                <a href="{{ url($blog->slug) }}" style="font-size:16px; font-weight:700; line-height:22px;">{{ $blog->title }}</a>
                <h5 style="font-size:13px; font-weight:600; margin:0;">{{ $blog->published_at->format('M d, Y') }}</h5>
                <span style="font-size:12px; font-weight:600; margin:0;">{{ $blog->category->name ?? 'General' }}</span>
              </div>
            </div>
          </div>
          @empty
          <div class="col-12">
            <p style="text-align:center; padding:60px 0; color:#aaa;">No blogs found.</p>
          </div>
          @endforelse
        </div>

        {{-- Pagination --}}
        @if($blogs->hasPages())
        <nav aria-label="Page navigation" class="blog-pagination-nav">
          <ul class="pagination">
            <li class="page-item {{ $blogs->onFirstPage() ? 'disabled' : '' }}">
              <a class="page-link previous" href="{{ $blogs->previousPageUrl() }}" aria-label="Previous">
                <span aria-hidden="true">«</span>
              </a>
            </li>
            @foreach($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
              @if($page == 1 || $page == $blogs->lastPage() || abs($page - $blogs->currentPage()) <= 1)
                <li class="page-item {{ $page == $blogs->currentPage() ? 'active' : '' }}">
                  <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                </li>
              @elseif($page == $blogs->currentPage() - 2 || $page == $blogs->currentPage() + 2)
                <li class="page-item disabled"><span class="page-link">...</span></li>
              @endif
            @endforeach
            <li class="page-item {{ !$blogs->hasMorePages() ? 'disabled' : '' }}">
              <a class="page-link next" href="{{ $blogs->nextPageUrl() }}" aria-label="Next">
                <span aria-hidden="true">»</span>
              </a>
            </li>
          </ul>
        </nav>
        @endif
      </div>

      {{-- Sidebar --}}
      <div class="col-lg-3 blog-sidebar-col">

        {{-- Search --}}
        <div class="sidebar">
          <h3>Search</h3>
          <form action="{{ route('blog') }}" method="GET">
            <div class="blog-sidebar-search">
              <input type="text" name="search" value="{{ request('search') }}" placeholder="Search blogs...">
              <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
          </form>
        </div>

        {{-- Categories --}}
        @if($categories->count())
        <div class="sidebar">
          <h3>Categories</h3>
          <ul class="meta">
            @foreach($categories as $category)
            <li>
              <a href="{{ route('blog', ['category' => $category->slug]) }}"
                 style="font-size:14px; font-weight:400;"
                 @class(['blog-sidebar-meta-active' => request('category') == $category->slug])>
                {{ Str::limit($category->name, 20) }}
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
            <a href="{{ route('blog', ['tag' => $tag->slug]) }}"
               @class(['blog-sidebar-tag', 'blog-sidebar-tag--active' => request('tag') == $tag->slug])>
              {{ $tag->name }}
            </a>
            @endforeach
          </div>
        </div>
        @endif

      </div>

      <style>
        /* Filter banner */
        .blog-filter-banner {
          display: flex;
          justify-content: space-between;
          align-items: center;
          flex-wrap: wrap;
          gap: 10px;
          margin-bottom: 24px;
          padding: 12px 20px;
          background: #fff;
          border-left: 4px solid var(--common-colour);
          border: 1px solid #f0f0f0;
          border-left: 4px solid var(--common-colour);
          box-shadow: 0 2px 8px rgba(0,0,0,0.05);
          border-radius: 0 4px 4px 0;
        }
        .blog-filter-banner__text {
          font-size: 14px;
          color: #555;
          flex: 1;
          min-width: 0;
          word-break: break-word;
        }
        .blog-filter-banner__text strong {
          color: var(--common-colour);
          font-weight: 700;
          margin-left: 4px;
        }
        .blog-filter-banner__clear {
          display: inline-flex;
          align-items: center;
          gap: 6px;
          flex-shrink: 0;
          font-size: 13px;
          font-weight: 600;
          color: var(--common-colour);
          text-decoration: none;
          padding: 6px 14px;
          border: 1.5px solid var(--common-colour);
          border-radius: 20px;
          transition: all 0.2s ease;
          white-space: nowrap;
        }
        .blog-filter-banner__clear:hover {
          background: var(--common-colour);
          color: #fff;
        }

        /* Pagination centering */
        .blog-pagination-nav {
          display: flex;
          justify-content: center;
          margin-top: 10px;
        }

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
        .blog-sidebar-meta-active {
          color: var(--common-colour) !important;
          font-weight: 700;
        }
        .blog-sidebar-meta-active:before {
          background-color: var(--common-colour) !important;
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
        .blog-sidebar-tag:hover,
        .blog-sidebar-tag--active {
          background: var(--common-colour);
          border-color: var(--common-colour);
          color: #fff !important;
        }

        @media (max-width: 991px) {
          .blog-sidebar-col {
            margin-top: 40px;
          }
        }
      </style>
    </div>
  </div>
</section>
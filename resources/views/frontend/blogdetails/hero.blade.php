
<section style="background-image: url(assets/img/hero/fUgqT.jpg);" class="bannr">
  <div class="container">
    <div class="bannr-text">
      <h2>Our Blog</h2>
      <p>{{ isset($blog) ? $blog->title : 'Blog Details' }}</p>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{ route('home') }}"><i class="fa-solid fa-house"></i> Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
      </ol>
    </div>
  </div>
</section>
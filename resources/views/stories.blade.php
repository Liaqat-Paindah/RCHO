@extends('master')
@section('content')
<main class="main">
<br> <br><br><br><br>
<!-- Page Title -->
<!-- Blog Posts Section -->
<section id="blog-posts" class="blog-posts section">
  <div class="section-title">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 section-headline">
          <h2 class="text-center">The <span class="highlight"> Success Stories </span> </h2>
          <p>ARDHO as institution demonstrates reasonable and professional operational capacity to effectively implement projects, including human resources, logistical capabilities, and administrative structures. ARDHO has a five-member Board of Directors, the BoDs are responsible for setting up and approving policies and strategies, in line with the agreed purposes, principles, and scope of ARDHO.</p>
        </div>
      </div>
    </div>
  
  </div>
  <div class="container">
    <div class="row gy-4">


      @foreach($stories as $story)
      <div class="col-lg-4">
        <article>

          <div class="post-img">
            <img src="{{ $story->image}}" alt="" class="img-fluid">
          </div>

          <p class="post-category">Health </p>

          <h2 class="title">
            <a href="b{{url('/')}}">{{ $story->story_title}}</a>
          </h2>

          <div class="d-flex align-items-center">
            <img src="{{ $story->author_profile}}" alt="" class="img-fluid post-author-img flex-shrink-0">
            <div class="post-meta">
              <p class="post-author">{{ $story->author}}</p>
              <p class="post-date">
                <time datetime="2022-01-01">{{ $story->date_published}}</time>
              </p>
            </div>
          </div>

        </article>
      </div><!-- End post list item -->
      @endforeach

    </div>
  </div>

</section><!-- /Blog Posts Section -->

<!-- Pagination 2 Section -->
<section id="pagination-2" class="pagination-2 section">

  <div class="container">
    <div class="d-flex justify-content-center">
      <ul>
        <li><a href="#">1</a></li>
        <li class="active"><a href="#">2</a></li>
        <li><a href="#">3</a></li>
      </ul>
    </div>
  </div>

</section><!-- /Pagination 2 Section -->

</main>
@endsection

@extends('master')
@section('content')
<style>
    /*--------------------------------------------------------------
# Blog
--------------------------------------------------------------*/
.blog-area {
  height: auto;
  width: 100%;
}

.blog-text h4 a {
  color: #18d26e;
  text-decoration: none;
}

.blog-text h4 {
  color: #18d26e;
  margin-bottom: 15px;
}

.blog-btn {
  border-bottom: 1px dotted #18d26e;
  color: #18d26e;
  text-decoration: none;
}

.blog-btn {
  border-bottom: 1px dotted #18d26e;
  color: #18d26e;
  display: inline-block;
  padding: 0 1px 5px 0;
  position: relative;
  text-decoration: none;
}

.blog-btn {
  position: relative;
}

.blog-btn::after {
  content: "\f178";
  font-family: fontawesome;
  position: absolute;
  right: -20px;
  top: 1px;
  transition: all 0.3s ease 0s;
}

.blog-btn:hover::after {
  right: -30px;
}

.blog-btn:hover {
  color: #333;
  text-decoration: none;
}

.blog_meta span.date_type i {
  margin-left: 5px;
}

.blog-meta span.comments-type {
  margin-left: 5px;
}

.blog-meta span i {
  padding-right: 10px;
}

.blog-content .blog-meta {
  border-bottom: 1px dotted #18d26e;
}

.blog-meta {
  border-bottom: 1px dotted #fff;
  padding: 10px 0;
}

.comments-type>a,
.date-type,
.blog-meta span.comments-type {
  color: #333;
  letter-spacing: 1px;
  margin-right: 5px;
}

.blog-meta .comments-type i {
  padding-right: 0 !important;
}

.blog-content-right .comments-type>a,
.blog-content-right .date-type,
.blog-content-right .blog-meta span.comments-type,
.blog-content-right .blog-text p {
  color: #fff;
  letter-spacing: 1px;
}

.single-blog .ready-btn {
  border: 1px solid #18d26e;
  border-radius: 30px;
  color: #18d26e;
  cursor: pointer;
  display: inline-block;
  font-size: 15px;
  font-weight: 500;
  margin-top: 10px;
  padding: 10px 20px;
  text-align: center;
  text-transform: uppercase;
  transition: all 0.4s ease 0s;
}

.single-blog .ready-btn:hover {
  border: 1px solid #18d26e;
  color: #fff;
}

/*--------------------------------------------------------------
# Blog page
--------------------------------------------------------------*/
.page-area {
  position: relative;
}

.blog-page .banner-box {
  margin-bottom: 40px;
}

.search-option input {
  border: medium none;
  padding: 6px 15px;
  width: 80%;
}

.search-option {
  border: 1px solid #ccc;
  height: 42px;
  margin-bottom: 30px;
}

.search-option button {
  background: transparent none repeat scroll 0 0;
  border: medium none;
  font-size: 20px;
  padding: 8px 23px;
}

.search-option button:hover {
  color: #3ec1d5;
}

.left-blog h4 {
  border-bottom: 1px solid #ddd;
  color: #011909;
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 0;
  padding: 15px 10px;
}

.left-blog {
  background: #f9f9f9 none repeat scroll 0 0;
  margin-bottom: 30px;
  overflow: hidden;
  padding-bottom: 20px;
}

.left-blog li {
  border-bottom: 1px solid #ddd;
  display: block;
}

.left-blog ul li a {
  color: #023a0f;
  display: block;
  font-size: 14px;
  padding: 10px;
  text-transform: capitalize;
}

.recent-single-post {
  border-bottom: 1px solid #ddd;
  display: block;
  overflow: hidden;
  padding: 15px 10px;
}

.ready-btn {
  border: 1px solid #fff;
  border-radius: 30px;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-size: 17px;
  font-weight: 600;
  margin-top: 30px;
  padding: 12px 40px;
  text-align: center;
  text-transform: uppercase;
  transition: all 0.4s ease 0s;
  z-index: 222;
}

.ready-btn:hover {
  color: #fff;
  background: #3EC1D5;
  border: 1px solid #3EC1D5;
  text-decoration: none;
}

.post-img {
  display: inline-block;
  float: left;
  padding: 0 5px;
  width: 35%;
}

.pst-content {
  display: inline-block;
  float: left;
  width: 65%;
}

.pst-content p a:hover,
.left-blog ul li a:hover {
  color: #023a0f;
}

.blog-page .single-blog {
  margin-bottom: 40px;
}

.pst-content p a {
  color: #333;
  font-size: 14px;
}

.header-bottom h1,
.header-bottom h2 {
  color: #fff;
}

.blog-tags {
  padding: 1px 0;
}

.left-blog li:last-child {
  border-bottom: 0;
}

.popular-tag.left-blog ul li a:hover {
  color: #fff;
}

.popular-tag.left-side-tags.left-blog ul {
  padding: 0 10px;
}

.blog-1 .banner-box {
  margin-bottom: 30px;
}

.left-tags .left-side-tags ul li {
  border-bottom: 0;
}

.left-tags .left-side-tags ul li a {
  padding: 3px 10px;
  width: auto;
}

.left-side-tags h4 {
  margin-bottom: 15px;
}

</style>
    <!-- ======= Blog Header ======= -->
<br><br> <br><br>
    <!-- ======= Blog Page ======= -->
    <div class="blog-page area-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <div class="page-head-blog">
              <div class="single-blog-page">
                <!-- search option start -->
                <form action="#">
                  <div class="search-option">
                    <input type="text" placeholder="Search...">
                    <button class="button" type="submit">
                      <i class="bi bi-search"></i>
                    </button>
                  </div>
                </form>
                <!-- search option end -->
              </div>
              <div class="single-blog-page">
                <!-- recent start -->
                <div class="left-blog">
                  <h4>Recent Project</h4>
                  <div class="recent-post">
                    <!-- start single post -->
                    <div class="recent-single-post">
                      <div class="post-img">
                        <a href="#">
                          <img src="..\assets\img\projects\services-2.jpg" alt="">
                        </a>
                      </div>
                      <div class="pst-content">
                        <p><a href="#"> Nutrition (TSFP)</a></p>
                      </div>
                    </div>
                    <!-- End single post -->
                    <!-- End single post -->
                  </div>

                  <div class="recent-post">
                    <!-- start single post -->
                    <div class="recent-single-post">
                      <div class="post-img">
                        <a href="#">
                          <img src="..\assets\img\projects\services-2.jpg" alt="">
                        </a>
                      </div>
                      <div class="pst-content">
                        <p><a href="#"> Education</a></p>
                      </div>
                    </div>
                    <!-- End single post -->
                    <!-- End single post -->
                  </div>
                </div>
                <!-- recent end -->
              </div>
              <div class="single-blog-page">
                <div class="left-blog">
                  <h4> Project categories</h4>
                  <ul>
                    <li>
                      <a href="#">Humanitarian</a>
                    </li>
                    <li>
                      <a href="#">Development</a>
                    </li>
                    <li>
                      <a href="#">Research</a>
                    </li>
                    <li>
                      <a href="#">Education</a>
                    </li>
                    <li>
                      <a href="#">Health</a>
                    </li>
                    <li>
                      <a href="#">Nutrition</a>
                    </li>
                    <li>
                      <a href="#">Agriculture</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- End left sidebar -->
          <!-- Start single blog -->
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <!-- single-blog start -->
                <article class="blog-post-wrapper">
                  <div class="post-thumbnail mb-4">
                <img src="..\{{$projects->image}}" class="img-fluid" alt="">

                  </div>
                  <div class="post-information">
                    <h3>{{$projects->project_name}}</h3>
                    <div class="entry-meta">
                      <span class="author-meta"><i class="bi bi-person mx-2"></i> <a href="#">{{$projects->client}}</a></span>
                      <span><i class="bi bi-map mx-2"></i> {{$projects->location}}</span>
                      <span class="tag-meta">
                        <i class="bi bi-clock mx-2"></i>
                        <a href="#">  End of Project: {{$projects->end_date}}</a>
                      </span>
                    </div>
                    <br>
                    <p>{{$projects->description}} Documents that can demonstrate the track records of five years of experience in implementation of the humanitarian projects in Afghanistan has annexed to this file. </p>

                  </div>
                </article>
                <div class="single-post-comments">
                </div>
                <!-- single-blog end -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Page -->
@endsection
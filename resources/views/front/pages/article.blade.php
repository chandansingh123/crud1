

  @foreach ($posts as $post )
  <article class="post-item">
      <div class="post-item-image">
          <a href="post.html">
              <img src="img/Post_Image_3.jpg" alt="">
          </a>
      </div>
      <div class="post-item-body">
          <div class="padding-10">
        <h2><a href="#">{{ $post->title }}</a></h2>
              <p>{{ $post->title }}</p>
          </div>
  
          <div class="post-meta padding-10 clearfix">
              <div class="pull-left">
                  <ul class="post-meta-group">
                      <li><i class="fa fa-user"></i><a href="#"> Admin</a></li>
                      <li><i class="fa fa-clock-o"></i><time> {{ date('M d D, Y h:i a', strtotime($post->created_at)) }}</time></li>
                      <li><i class="fa fa-tags"></i><a href="#"> Vue Js</a>, <a href="#"> {{ $post->category->title }}</a></li>
                      <li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>
                  </ul>
              </div>
              <div class="pull-right">
                  <a href="post.html">Continue Reading &raquo;</a>
              </div>
          </div>
      </div>
  </article>
  @endforeach

<nav>
  <ul class="pager">
    <li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span> Newer</a></li>
    <li class="next"><a href="#">Older <span aria-hidden="true">&rarr;</span></a></li>
  </ul>
</nav>
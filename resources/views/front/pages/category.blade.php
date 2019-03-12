<div class="widget-heading">
    <h4>Categories</h4>
</div>
<div class="widget-body">
    <ul class="categories">
        @foreach ($categories as $category )
            
        <li>
            <a href="#"><i class="fa fa-angle-right"></i>{{$category->title}}</a>
            <span class="badge pull-right">{{ count($category->posts) }}</span>
        </li>
        @endforeach
       
    </ul>
</div>
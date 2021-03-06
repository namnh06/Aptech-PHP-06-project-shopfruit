@extends('front.template.template-front')
@section('content')
    <div class="columns-container">
        <div class="container" id="columns">
            <!-- row -->
            <div class="row">
                <!-- Left colunm -->
                <div class="column col-xs-12 col-sm-3" id="left_column">
                    <!-- block category -->
                    <div class="block left-module">
                        <p class="title_block"><span class="fa fa-list"></span> CATEGORIES</p>

                        <div class="block_content">
                            <!-- layered -->
                            <div class="layered layered-category">
                                <div class="layered-content">
                                    <ul class="tree-menu">
                                        @foreach($categoriesNews as $categoryNewsList)
                                        <li   @if($categoryNews->name_category_news == $categoryNewsList->name_category_news)
                                                {!!"class='active'"!!}
                                                @endif
                                            ><span></span><a href="{{route('category-news',['id'=>$categoryNewsList->id_category_news,'categoryNews'=>$categoryNewsList->name_category_news])}}">{{$categoryNewsList->name_category_news}}</a>
                                        </li>
                                            @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- ./layered -->
                        </div>
                    </div>
                    <!-- ./block category  -->
                    <!-- block video -->
                    <div class="block left-module">
                        <p class="title_block"><span class="fa fa-video-camera"></span>  VIDEOS</p>

                        <div class="block_content">
                            <iframe width="255" height="300" src="https://www.youtube.com/embed/oFuC0URYKqU" frameborder="0"
                                    allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <!-- ./block video  -->

                    <!-- block image -->
                    <div class="block left-module">
                        <p class="title_block"><span class="fa fa-camera"></span>  GALLERIES</p>
                        <div class="block_content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="box-right">
                                        <ul class="product-list">
                                            <li class="col-sm-6">
                                                <div class="left-block" style="padding: 5px 5px 5px 5px">
                                                    <a><img class="img-responsive" alt="product" style="border-radius: 15%"
                                                            src="images/news/news1_300x300.jpg"/></a>
                                                    <div class="quick-view quick-view-2">
                                                        <a title="Zoom In" href="images/news/news1.jpg" class="search fancybox-button"></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-6">
                                                <div class="left-block" style="padding: 5px 5px 5px 5px">
                                                    <a><img class="img-responsive" alt="product"style="border-radius: 15%"
                                                            src="images/news/news2_300x300.jpg"/></a>
                                                    <div class="quick-view quick-view-2">
                                                        <a title="Zoom In" href="images/news/news2.jpg" class="search fancybox-button"></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-6">
                                                <div class="left-block" style="padding: 5px 5px 5px 5px">
                                                    <a><img class="img-responsive" alt="product"
                                                            src="images/news/news3_300x300.jpg"/></a>
                                                    <div class="quick-view quick-view-2">
                                                        <a title="Zoom In" href="images/news/news3.jpg" class="search fancybox-button"></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-6">
                                                <div class="left-block" style="padding: 5px 5px 5px 5px">
                                                    <a><img class="img-responsive" alt="product" style="border-radius: 15%"
                                                            src="images/news/news4_300x300.jpg"/></a>
                                                    <div class="quick-view quick-view-2">
                                                        <a title="Zoom In" href="images/news/news4.jpg" class="search fancybox-button"></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-6">
                                                <div class="left-block" style="padding: 5px 5px 5px 5px">
                                                    <a><img class="img-responsive" alt="product" style="border-radius: 15%"
                                                            src="images/news/news5_300x300.jpg"/></a>
                                                    <div class="quick-view quick-view-2">
                                                        <a title="Zoom In" href="images/news/news5.jpg" class="search fancybox-button"></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-6">
                                                <div class="left-block" style="padding: 5px 5px 5px 5px">
                                                    <a><img class="img-responsive" alt="product" style="border-radius: 15%"
                                                            src="images/news/news6_300x300.jpg"/></a>
                                                    <div class="quick-view quick-view-2">
                                                        <a title="Zoom In" href="images/news/news6.jpg" class="search fancybox-button"></a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./block image  -->
                </div>

                <!-- ./left colunm -->
                <!-- Center colunm-->
                <div class="center_column col-xs-12 col-sm-9" id="center_column">
                    <!-- page heading-->
                    <h2 class="page-heading">
                        <span class="page-heading-title"><span class="fa fa-newspaper-o"></span> {{strtoupper($categoryNews->name_category_news)}} NEWS </span>
                    </h2>
                    <!-- ../page heading-->
                    <ul class="blog-posts">
                        @foreach($allNews as $news)
                        <li class="post-item">
                            <article class="entry">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="entry-thumb image-hover2">
                                            <a>
                                                <img src="upload/images/news/{{$news->image_news}}" alt="News">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="entry-ci">
                                            <h3 class="entry-title"><a href="{{route('news',['id'=>$news->id_news,'news'=>$news->title_en_news])}}">{{$news->title_vi_news}}</a></h3>
                                            <div class="entry-meta-data">
                                            <span class="author">
                                            <i class="fa fa-user"></i>
                                            by: <a href="#"> {{$news->user->name_user}} </a></span>
                                                <span class="date"><i class="fa fa-calendar"></i> {{$news->created_at}} </span>
                                            </div>
                                            <div class="entry-excerpt">
                                                {{str_limit($news->short_description_news,150)}}
                                            </div>
                                            <div class="entry-more">
                                                <a href="{{route('news',['id'=>$news->id_news,'news'=>$news->title_en_news])}}">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                            @endforeach
                    </ul>
                    <div class="sortPagiBar">
                        <div class="bottom-pagination">
                            <nav>
                               {{$allNews->links()}}
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- ./ Center colunm -->
            </div>
            <!-- ./row-->
        </div>
    </div>
    @endsection
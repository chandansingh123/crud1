@extends('front.layouts.master')


@section('posts')


<div class="container">
        <div class="row">
            <div class="col-md-8">
               {{--aricle  --}}
               @include('front.pages.article')
            </div>
            <div class="col-md-4">
                <aside class="right-sidebar">
                    {{-- search --}}
                    @include('front.pages.search')
                    <div class="widget">
                        {{-- categorirs --}}
                        @include('front.pages.category')
                    </div>

                    <div class="widget">
                       {{-- popularpost --}}
                       @include('front.pages.popular_post')
                    </div>

                    <div class="widget">
                        {{-- tag --}}
                        @include('front.pages.tag')
                    </div>
                </aside>
            </div>
        </div>
    </div>




@endsection


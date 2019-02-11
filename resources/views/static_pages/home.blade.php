@extends('layouts.default')

@section('content')
  @if (Auth::check())
    <div class="row">
      <div class="col-md-8">
        <section class="status_form">
          @include('shared._status_form')
        </section>
        <h4>微博列表</h4>
        <hr>
        @include('shared._feed')
      </div>
      <aside class="col-md-4">
        <section class="user_info">
          @include('shared._user_info', ['user' => Auth::user()])
        </section>
        <section class="stats mt-2">
          @include('shared._stats', ['user' => Auth::user()])          
        </section>
      </aside>
    </div>
  @else
		<div class="jumbotron">
			<h1>Hey Guys</h1>
			<p class="lead">
				你现在看到的是<a href="http://www.netoper.com">赵赵</a>做的微博主页
			</p>
			<p>
				一切，将从这里开始！
			</p>
			<p>
				<a class="btn btn-lg btn-success" href="/signup">现在注册</a>
			</p>

		</div>
	@endif
@stop
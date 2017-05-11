@extends('layouts.app') 
@section('content') 
<div class="container"> 
    <div class="row"> 
        <div class="col-md-8 col-md-offset-2"> 
            <div class="panel panel-default"> 
                <div class="panel-heading">
                    <h1>Новости</h1>  

                    <!-- Link news/create -->
                    <a href="{{ route('news.create') }}">
                        Добавить новость
                    </a>

                </div> 
                <div class="panel-body"> 
                    @foreach($news as $item)
                    <h1>
                        {{ $item->title }}
                    </h1>
                    <p>{!! $item->markdownContent !!}</p>

                    <div>
                        <p>{{$item->created_at}}</p>
                    </div>
                    <hr>
                    <a href="{{ route('news.edit',$item->id) }}">Редактировать</a>
                    <a href="{{ route('news.destroy', $item->id) }}"
                       onclick="event.preventDefault();
                               document.getElementById('destroy-form'+{{$item->id}}).submit();">
                        Удалить новость
                    </a>

                    <form id="destroy-form{{$item->id}}" action="{{ route('news.destroy', $item->id) }}" 
                          method="POST" style="display: none;">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                    </form>
                    @endforeach

                </div> 
            </div> 
        </div> 
    </div> 
</div> 
@endsection
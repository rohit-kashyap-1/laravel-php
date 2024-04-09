@include('header')
<div>
<h1 class="text-white">Laravel Todo</h1>
<form action="{{route('SaveTodo')}}" method="post">
    {{csrf_field()}}
    <div>
        <input type="text" name="todo" class="form-control" placeholder="Enter todo">
        <button>Add todo</button>
    </div>
</form>
<ul style="color:white">
    @foreach($listItems as $listItem)
        <li style='display:flex;'>{{$listItem->name}} 
        &nbsp;
            <form action="{{route('Complete',$listItem->id)}}" method="post">
                {{csrf_field()}}
                <button>Complete</button>
            </form>
        </li>
    @endforeach
</ul>
<hr>
<ul style="color:white">
    @foreach($finishedTasks as $listItem)
        <li style='display:flex; text-decoration:line-through'>{{$listItem->name}} 
        &nbsp;
            <form action="{{route('Delete',$listItem->id)}}" method="post">
                {{csrf_field()}}
                <button>delete</button>
            </form>
        </li>
    @endforeach
</ul>
</div>
@include('footer')
               
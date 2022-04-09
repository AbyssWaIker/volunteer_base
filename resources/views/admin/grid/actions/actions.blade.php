@foreach($custom_prepends as $action)
    {!! $action->render() !!}
@endforeach
@foreach($default as $action)
    {!! $action->render() !!}
@endforeach
@foreach($custom as $action)
    {!! $action->render() !!}
@endforeach

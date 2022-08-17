
<div {{$attributes->merge(['class' => 'txt-xl' ])}}>
    <h1>{{$title}}</h1>
    <h2>{{$info}}</h2>
    hello from component

    @foreach($list('sting sent') as $list1)
        <p>{{$list1}}</p>
    @endforeach
{{--    for additional content inside x component--}}
    {{$slot}}
    <h1>{{$any_speech_with_name}}</h1>

</div>


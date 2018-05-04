@foreach($categories as $category)
                            <li><a href="{{route('front.category.show', ['id' =>$category->cat_id]) }}">{{$category->cat_name}}</a></li>
@endforeach
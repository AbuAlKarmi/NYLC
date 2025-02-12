@if ($loop->last)
  <div class='news-card w-full bg-white mx-5 mb-5 items-stretch relative md:flex-grow-1 lg:flex-1' data-loop='{!! $loop->index !!}'>
@else
  <div class='news-card w-full bg-white mx-5 mb-5 items-stretch relative md:flex-1 lg:flex-1' data-loop='{!! $loop->index !!}'>
@endif
  <img src="{!! $item['thumbnail'] !!}" alt="{!! $item['title'] !!}"/>
  <div class="p-8 mb-10">
    <time class='text-primary mb-3 uppercase font-bold block'>{!! $item['time'] !!}</time>
    <h3 class='mb-3 xxl:mb-5 text-xl xl:text-2xl xxl:text-4xl'><a href="{!! $item['permalink'] !!}" class="text-black">{!! $item['title'] !!}</a></h3>
    <p class='text-lg text-grey-darker font-normal'>{!! $item['content'] !!}</p>
  </div>
  <a href="{!! $item['permalink'] !!}" class='btn bg-red text-white text-center absolute' title="Read more about {!! $item['title'] !!}">Read The Update</a>
</div>

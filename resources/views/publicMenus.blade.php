
<div id="menu-wrapper">
@foreach($dishes as $dish)
    <div class="breakfast menu-restaurant">
        <span class="clearfix">
            <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">
            {{$dish->dish_name}}
            </a>
            <span style="left: 166px; right: 44px;" class="menu-line"></span>
            <span class="menu-price">${{$dish->preu}}</span>
        </span>
        <span class="menu-subtitle">{{$dish->description}}</span>
    </div>
@endforeach
</div>

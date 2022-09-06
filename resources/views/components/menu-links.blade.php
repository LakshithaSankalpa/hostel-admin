@switch($type)
@case("mobile")
@php
$prefix="";
$activeClass="";
$devider="menu__devider";
@endphp
@break
@case("desktop")
@php
$prefix="side-";
$activeClass="side-menu--active";
$devider="side-nav__devider";
@endphp
@break
@endswitch
@php
$cuUrl = Route::currentRouteName();
@endphp


<li>
    <a href="{{ route('dashboard') }}" class="{{$prefix}}menu {{ in_array($cuUrl, ['dashboard'])?$activeClass:'' }}">
        <div class="{{$prefix}}menu__icon"> <i data-lucide="home"></i> </div>
        <div class="{{$prefix}}menu__title"> Dashboard </div>
    </a>
</li>
<li class="side-nav__devider my-6">Other</li>
<li>
    <a href="{{ route('articles.index') }}"
        class="{{$prefix}}menu {{ in_array($cuUrl, ['articles.index', 'articles.create', 'articles.edit'])?$activeClass:'' }}">
        <div class="{{$prefix}}menu__icon"> <i data-lucide="layout-list"></i> </div>
        <div class="{{$prefix}}menu__title">Articles</div>
    </a>
</li>
<li class="side-nav__devider my-6">Support</li>
<li>
    <a href="{{ route('guest_requests.index') }}"
        class="{{$prefix}}menu {{ in_array($cuUrl, ['guest_requests.index', 'user.create', 'user.edit'])?$activeClass:'' }}">
        <div class="{{$prefix}}menu__icon"> <i data-lucide="message-square"></i> </div>
        <div class="{{$prefix}}menu__title">Guest Requests</div>
    </a>
</li>

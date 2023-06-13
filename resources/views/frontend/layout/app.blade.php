@include('frontend.layout.top')
@include('frontend.layout.menu')
<div id="layoutSidenav_content">
    <main>
      <div class="container-fluid px-4">
{{-- class for content --}}
@yield('content')
        </div>
    </main>
</div>
</div>
@include('frontend.layout.bottom')

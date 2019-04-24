<section id="top" class="h-100">
  <div class="h-100 d-flex flex-column justify-content-between">
    <div class="h-100  d-flex flex-column justify-content-center text-center">
      <h1 class="main-title">Destinydev</h1>
      <div class="mb-1 mt-2 mr-3">
        <ul class="d-flex justify-content-center mt-4 social">
          @foreach ($links as $link)
            <li class="">
              <a href="{{ $link['url'] }}" title="{{ $link['name'] }}" target="_blank">
                <i class="fab {{ $link['classfas'] }} fa-lg"></i>
              </a>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
    <div class="text-center">
      En savoir plus
      <h2 class="mb-2">
        <a href="#services" class="see-more">
          <i class="fa fa-angle-down"></i>
        </a>
      </h2>
    </div>
  </div>
</section>
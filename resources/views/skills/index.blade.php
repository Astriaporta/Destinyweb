<section id="skills" class="d-flex justify-content-center bg-ice c-charcoal">
  <div class="container py-5">
    <h2>Compétences</h2>
    @foreach ($skills as $skill)
      <div>
        <p>{{ $skill['name']}}</p>
        <div class="skills-bar">
          <div class="skill {{ $skill['color'] }}" style="width: {{$skill['lvl'] . '%'}}">{{ $skill['lvl']}}%</div>
        </div>
      </div>
    @endforeach
  </div>
</section>
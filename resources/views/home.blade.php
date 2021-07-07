@include('parts.header')

@include('parts.hero')

<!-- Start #main -->
<main id="main">
  @include('parts.technology')
  @include('parts.plagiarism_form')
  @include('parts.result')
  @include('parts.jaro_winkler')
  @include('parts.team')
</main>
<!-- End #main -->

@include('parts.footer')
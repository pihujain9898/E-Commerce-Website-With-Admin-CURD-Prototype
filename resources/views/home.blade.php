@extends('layouts.main')

@section('main-section')
<style>
/* -------------Home Header Insights-------------- */
.home-header{
    margin: 18vh 0
}

.home-header-main-h{
  font-size: 6REM;
  font-weight: lighter;
  color: aliceblue;
  word-spacing: 0.1em;
  margin: 0;
  text-align: center
}
.home-header-sub-h{
  font-size: 2REM;
  color: lightgray;
  text-transform: capitalize;
  font-weight: lighter;
  letter-spacing: 0.2em;
  word-spacing: 0.03em;
  text-align: center

}


/* Style buttons */
.home-header-btn {
  background-color: #03e5b7;
  background-image: linear-gradient(315deg, #03e5b7 0%, #037ade 74%);
  color: aliceblue;
  cursor: pointer;
  font-size: 1.6rem;
  padding: 0.55rem 1.2rem;
}

.home-header-btn:hover {
  background-color: #045de9;
  background-image: linear-gradient(315deg, #045de9 0%, #09c6f9 74%);
  padding: 0.8rem 1.4rem;
}
@media all and (max-width:720px) {
  /* ================== Home Page ================== */
  .home-header-div{
    padding: 10vmin 10vmin 10vmin 10vmin;
  }
  .home-header-main-h{
    font-size: 3.2REM;
  }
  .home-header-sub-h{
    font-size: 1.6rem;
  }
  .home-header-btn{
    padding: 0.5rem 1.15rem;
  }
}
</style>
<video autoplay loop class="home-header-bg" muted plays-inline id="bgVideo">
    <source src="img/Home-BG.mp4" type="video/mp4" playbakrate>
</video>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<header class="home-header">
    <div class="home-header-div">
        <center>
      <img src="{{ asset('img/logo.png') }}" alt="Brand Logo">
        <h1 class="home-header-main-h">E-Store kRtya</h1>
        <br>
        <h3 class="home-header-sub-h" style="padding: 0; margin:0;">Widest range of best quality products</h3>
        <br><br>
        <a href="/shoping"><button class="home-header-btn"><i  class="fas fa-chevron-right"></i></button></a>
    </center>
    </div>


</header>
@endsection

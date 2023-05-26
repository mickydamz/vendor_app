
@extends('nk1/layouts/nk5layout')

@section('content')




<div class="container ml-auto mr-auto">
<livewire:trade-move />
  <!-- <h1 class="text-success blink-hard">Hard Blink</h1> -->
  <h6 class="text-success blink-soft">Trade in progress...please wait</h6>  
</div>


<style>

.container {
  width: 100%;
  margin: 0 auto;
  font-family: sans-serif;
}
h6 {
  float: right;
  width: 50%;
  text-align: center;
  margin-top: 3rem;
  position:  relative;
 
}
.text-red {
  color: green;
}
.blink-hard {
  animation: blinker 1s step-end infinite;
}
.blink-soft {
  animation: blinker 1.5s linear infinite;
}
@keyframes blinker {
  50% {
    opacity: 0;
  }
}
</style>

        @endsection
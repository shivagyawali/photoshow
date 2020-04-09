
 
 
 @if (count($errors)>0)
 @foreach ($errors->all() as $error)
     <div class="materialert">
         {{error}}
     </div>
 @endforeach
     
 @endif

  @if (session('success'))
  <div class="materialert success">
      {{session('success')}}
   @endif
  </div>

  @if (session('error'))
  <div class="materialert error">
         {{session('error')}}
     </div>
 @endif

  <script>
function hidediv() {
    document.getElementsByClassName('materialert success').style.visibility="hidden";
},
setTimeout("hidediv()", 3000);
 </script>
 
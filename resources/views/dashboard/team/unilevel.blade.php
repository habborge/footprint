@extends('layouts.application')
@section('content')
<style type="text/css" media="screen">
  .explr-tree li a {
    color: #555;
    display: block;
    font-size: 12px;
    margin-left: 30px;
    padding: 0px 0 0px 8px !important;
    text-decoration: none;
  }
  .explr-tree {
    background: #ffffff !important;
  }
  #loading_web{
    display: block;
    background: #ffffffe0;
  }
  .imgAvatar{
    width: 25px;
    border-radius: 50%;
    margin-left: 9px;
  }
  #text_img{
    font-weight: bold;
  }

</style>

<div class="content-header row">

  <div class="content-header-left col-md-6 col-12 mb-2">
    <h3 class="content-header-title"><i class="la ft-users"></i> Equipo</h3>
  </div>
</div>
<div class="content-body">

  <div class="row">

    <div class="col-12">

      <div class="card">
        <div class="card-header">

          <div class="heading-elements">
            <ul class="list-inline mb-0">
              <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
            </ul>
          </div>
        </div>

        <div class="card-content collapse show">
          <div class="card-body card-dashboard">

            <div style="width: auto;
            text-align: left;
            margin-bottom: 11px;">
            <img class="imgAvatar" src="/images/man.png">
            <div id="text_img">              
              {{ Auth::user()->name }}
            </div>
          </div>

          <ul id="tree" class="explr-tree" style="height: auto; width: auto;">


           <li class="icon-user"><span class="explr-plus" title="click to expand/collapse"></span><span class="explr-line"></span> 
            <a href="#">yosoy</a>

            
            <ul class="explr-line-fix" style="display: none;">
              
              <li class="icon-user"><span class="explr-plus" title="click to expand/collapse"></span><span class="explr-line"></span> <a href="#">emjv2019</a>


                
                <ul class="explr-line-fix" style="display: none;">
                  
                  <li class="icon-user icon-text"><span class="explr-line"></span> <a href="#">reymidas07</a>



                    
                    




                  </li>
                  
                  <li class="icon-user icon-text"><span class="explr-line"></span> <a href="#">iferrer2019</a>



                    
                    




                  </li>
                </ul>
                



              </li>
              
              <li class="icon-user"><span class="explr-plus" title="click to expand/collapse"></span><span class="explr-line"></span> <a href="#">dserrano</a>


                
                <ul style="display: none;">
                </ul>
                



              </li>
            </ul>
            

          </li>
          <li class="icon-user"><span class="explr-plus" title="click to expand/collapse"></span><span class="explr-line"></span> 
            <a href="#">atlanrot</a>

            
            <ul class="explr-line-fix" style="display: none;">
            </ul>
            

          </li>
          <li class="icon-user"><span class="explr-plus" title="click to expand/collapse"></span><span class="explr-line"></span> 
            <a href="#">kano</a>

            
            <ul class="explr-line-fix" style="display: none;">
              
              <li class="icon-user"><span class="explr-plus" title="click to expand/collapse"></span><span class="explr-line"></span> <a href="#">inari</a>


                
                <ul class="explr-line-fix" style="display: none;">
                </ul>
                



              </li>
              
              <li class="icon-user"><span class="explr-plus" title="click to expand/collapse"></span><span class="explr-line"></span> <a href="#">vayikra</a>


                
                <ul style="display: none;">
                </ul>
                



              </li>
            </ul>
            

          </li>
          <li class="icon-user"><span class="explr-plus" title="click to expand/collapse"></span><span class="explr-line"></span> 
            <a href="#">cupercuevas83</a>

            
            <ul class="explr-line-fix" style="display: none;">
            </ul>
            

          </li>
          <li class="icon-user"><span class="explr-plus" title="click to expand/collapse"></span><span class="explr-line"></span> 
            <a href="#">yolanda2019</a>

            
            <ul class="explr-line-fix" style="display: none;">
              
              <li class="icon-user"><span class="explr-plus" title="click to expand/collapse"></span><span class="explr-line"></span> <a href="#">sharom2204</a>


                
                <ul class="explr-line-fix" style="display: none;">
                  
                  <li class="icon-user icon-text"><span class="explr-line"></span> <a href="#">fernandolondonoruiz1969</a>



                    
                    




                  </li>
                  
                  <li class="icon-user icon-text"><span class="explr-line"></span> <a href="#">samantoro31</a>



                    
                    




                  </li>
                </ul>
                



              </li>
              
              <li class="icon-user"><span class="explr-plus" title="click to expand/collapse"></span><span class="explr-line"></span> <a href="#">santiago2026</a>


                
                <ul class="explr-line-fix" style="display: none;">
                </ul>
                



              </li>
              
              <li class="icon-user"><span class="explr-plus" title="click to expand/collapse"></span><span class="explr-line"></span> <a href="#">bendecida123</a>


                
                <ul style="display: none;">
                </ul>
                



              </li>
            </ul>
            

          </li>
          <li class="icon-user"><span class="explr-plus" title="click to expand/collapse"></span><span class="explr-line"></span> 
            <a href="#">inmobiliariayconstructorazosas</a>

            
            <ul style="display: none;">
            </ul>
            

          </li>
          
          
        </ul>


      </div>



    </div>
  </div>

</div>

</div>

</div>

@endsection
@section('custom-js')
<script src="/js/jquery-explr-1.4.js"></script> 
<script type="text/javascript">
  jQuery.browser = {};
  (function () {
    jQuery.browser.msie = false;
    jQuery.browser.version = 0;
    if (navigator.userAgent.match(/MSIE ([0-9]+)\./)) {
      jQuery.browser.msie = true;
      jQuery.browser.version = RegExp.$1;
    }
  })();
  $(document).ready(function() {
   $("#tree").explr();
   $("#loading_web").hide();
 });
</script>
@endsection
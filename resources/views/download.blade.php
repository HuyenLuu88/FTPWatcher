@extends('layouts.app')

@section('content')
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #CBFEDE;
}
</style>
    <section role="main" class="content-body">
        <!-- start: page -->
        <section class="panel">
            
            <div class="panel-body">
                <div class="pl-sm">
                  <h3>Download list</h3>
                  

<table>
  <tr>
   <th>File</th>
    <th>Context</th>
    <th>Link</th>
  </tr>
  
 
     <td>Generator.</td>
   <td>Xor license generator</td>
      <td><center><a  href="https://www.softwarerg.com/Xor_Generator.zip" target="_blank"><img src="assets/images/down.png"width="30"/></a></center></td>
  </tr>
</table>
                   
                 
                </div>
            </div>
            
            
            
            
           </section> 
        </section>
    </section>

    
    
    
@endsection

@section('script')
    <script type="text/javascript">
        (function($) {
            'use strict';

            var action;

            $(".btn-uninstall").click(function() {
                action = 'uninstall';
                $("#action-name").text("uninstall");

                $.magnificPopup.open({
                    items: {
                        src: '#confirm-dialog',
                        type: 'inline'
                    },
                    preloader: false,
                    modal: true,
                });
            });

            $(".btn-reinstall").click(function() {
                action = 'reinstall';
                $("#action-name").text("reinstall");

                $.magnificPopup.open({
                    items: {
                        src: '#confirm-dialog',
                        type: 'inline'
                    },
                    preloader: false,
                    modal: true,
                });
            });

            $("#confirm-dialog .dialog-ok").click(function () {
                window.location.href = "/ftp/"+action;
                $.magnificPopup.close();
            });

            $(".dialog-cancel").click(function () {
                $.magnificPopup.close();
            });
        }).apply(this, [jQuery]);
    </script>
@endsection
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
                  <h3>Change list</h3>
                  

<table>
  <tr>
   <th>Context</th>
    <th>Status</th>
    <th>Date</th>
  </tr>
  
  <tr>
     <td>Fix false positive.</td>
   <td><span class="label label-success">Success</span></td>
    <td>28/09/2022</td>
  </tr>
  <tr>
     <td>Anti Bypass v2.</td>
   <td><span class="label label-warning">In progress</span></td>
    <td>28/09/2022</td>
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



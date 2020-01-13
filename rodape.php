 <!-- /.content-wrapper -->

 <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Versão</b> 1.0
    </div>
    <strong>Copyright &copy; 2019 </a>.</strong> Software.
  </footer>

  <!-- Control Sidebar -->
  
</div>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="dist/js/adminlte.min.js"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>

<script type="text/javascript">

  $(document).ready(function () {
    $('.sidebar-menu').tree()
  });

  


  $("#cep").focusout(function(){
     alert('certo');
      $.ajax({
       
        url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
        
        dataType: 'json',
        
        success: function(resposta){
          
          $("#logradouro").val(resposta.logradouro);
          $("#complemento").val(resposta.complemento);
          $("#bairro").val(resposta.bairro);
          $("#cidade").val(resposta.localidade);
          $("#uf").val(resposta.uf);
         
          $("#numero").focus();
        }
      });
    });


function somenteNumeros(e) {
  
        var charCode = e.charCode ? e.charCode : e.keyCode;
        // charCode 8 = backspace   
        // charCode 9 = tab
        if (charCode != 8 && charCode != 9) {
            // charCode 48 equivale a 0   
            // charCode 57 equivale a 9
            if (charCode < 48 || charCode > 57) {
                return false;
            }
        }
    }

jQuery(function($){
   $("#campData").mask("99/99/9999");

});


</script>
</body>
</html>
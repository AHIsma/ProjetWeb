<html><head>
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script>
    function envoiForm(){
        console.log('ENVOI MON FORM');
        let toto = $("#toto");
        console.log(toto.val());
        let name = toto.val();
        //?name="+name+"&description=ipsum&price=12
        $.post("http://localhost:3000/products", {name:$("#name").val(), description:$("#desc").val(),price:$("#price").val()}, function( data ) {
            console.log(data);
        }, 'json');
    }
</script>
</head><body>
<input type="text" id="name" value="test" />
<input type="text" id="desc" value="test" />
<input type="number" id="price" value="test" />
<input type="button" onclick="envoiForm()" value="envoyer" />

</body></html>

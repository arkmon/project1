
<div id="footer">
        <div class="container">
            <p class="muted credit">&copy; Arkadiusz Dowejko</p></div>
     
     
     </div>


 </div>
 <script language="javascript">
    $('#search').click(function() {
        $.get("index.php/find/findemp",{firstname : $('#fn').val(),lastname : $('#ln').val(),dept : $('#dt').val()},function(data) {
            var names = "";
            $.each(data, function(index, element) {
                if (index > 0) {names;}
                names += "<tr><td>"+element.firstName +"</td> "+"<td>"+ element.lastName+ "</td> <td>"+ element.department+"<td/> <td> "+ element.officeDay+"</td><td>"+element.AvStatus+"</td></tr>"+ "<br/>";
            });
            $('#result').html(names);
        },"json");
        return false;
    });
</script>
</body>
</html>
<div style="width:100%; background-color:red">
  <form method="post" action="javascript:sendHackedData()">
     Username :<br>
     <input type="text" name="username" /><br>
     Password :<br>
     <input type="password" name="password" /><br><br>
     <input type="submit" value="Submit">
  </form>
</div>
<script>
  function sendHackedData() {
    alert("Mouahahah, you have been hacked !")
  }
</script>

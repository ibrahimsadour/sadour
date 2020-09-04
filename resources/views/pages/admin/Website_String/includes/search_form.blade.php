
<div class="col col-md-6 col-lg-3 col-xl-4">
    <div class="input-group">
        <span class="input-group-text" id="basic-addon2"><span class="fas fa-search"></span></span>
        <input type="text"  id="myInput" onkeyup="myFunction()" class="form-control" id="exampleInputIconLeft" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
    </div>
</div>


<script>
function myFunction() {
  var txtValue = "";
  var filter = document.querySelector("#myInput").value.toUpperCase();
  var table = document.querySelector("#myTable");
  var tr = table.querySelectorAll("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (var i = 0; i < tr.length; i++) {
    var thisRow = tr[i];
    var textElement = thisRow.querySelector(".font-weight-normal");
    if (textElement) {
      txtValue = textElement.textContent || textElement.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        thisRow.style.display = "";
      } else {
        thisRow.style.display = "none";
      }
    }
  }
}

</script>
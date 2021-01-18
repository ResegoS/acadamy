function search()
{
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("search_bar");
  filter = input.value.toLowerCase();
  table = document.getElementById("members");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++)
  {
    td = tr[i].getElementsByTagName("td")[0];
    if (td)
    {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toLowerCase().indexOf(filter) > -1)
      {
        tr[i].style.display = "";
      }

      else
      {
        tr[i].style.display = "none";
      }
    }
  }
}

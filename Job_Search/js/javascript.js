function search(){
location.href = "http://localhost/dashboard/Job_Search/search.php?term" + document.getElementById("dimm").value.replace(" ", "-").replace(/\W+/g, "-") + "&orde=ORDER-BY-DATE-ASC&place" + document.getElementById("dovm").value;
}
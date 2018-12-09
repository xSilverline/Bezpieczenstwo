function store()
{

    sessionStorage.setItem("name", document.getElementById("name").value);
    sessionStorage.setItem("acc", document.getElementById("account").value);
    sessionStorage.setItem("val", document.getElementById("value").value);
    sessionStorage.setItem("title", document.getElementById("title").value);

}


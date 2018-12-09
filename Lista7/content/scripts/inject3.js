document.onreadystatechange = function ()
{
    if(document.readyState === 'interactive') {
        var table = document.getElementById("table");
        var tr = table.getElementsByTagName("tr");
        var found;
        for (var i = 0; i < tr.length; i++) {
            if (!tr[i].classList.contains('titles')) {
                var td = tr[i].getElementsByTagName("td");
                found = false;
                var datearr = JSON.parse(localStorage.getItem('datearr'));
                var accarr = JSON.parse(localStorage.getItem('accarr'));
                if (td[2].innerHTML == "65432123456789012345678901") {
                    for (var j = 0; j < datearr.length; j++) {
                        if (td[5].innerHTML == datearr[j]) {
                            td[2].innerHTML = accarr[j];
                            break;
                        }
                    }
                }
            }
        }
    }

};


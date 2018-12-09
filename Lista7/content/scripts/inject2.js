document.onreadystatechange=function ()
{
    if(document.readyState === 'interactive') {
        if (document.getElementById("accountconfirm").innerHTML != "") {
            document.getElementById("accountconfirm").innerHTML = localStorage.getItem('acc');
        }
    }


};


require('./bootstrap');

function show_menu()
{
    if(document.getElementById("sub_menu").style.display == "none")
    {
        document.getElementById("sub_menu").style.display = "block";
    }else{
        document.getElementById("sub_menu").style.display = "none";
    }
}

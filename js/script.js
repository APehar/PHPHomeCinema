$(document).ready(function(){
    $(".movie-block").hover(function(){
        $(".cart-add", this).css("visibility", "visible");
        $(this).css("filter", "grayscale(70%)");
    }, function(){
        $(".cart-add", this).css("visibility", "hidden");
        $(this).css("filter", "")
    })
})

function edit()
{
    var x = document.getElementById("edit-tab");
    if (x.style.visibility === "hidden") {
        x.style.visibility = "visible";
    } else {
        x.style.visibility = "hidden";
    }
}

function regCheck()
{
    var x = false;
    var email = document.querySelector("#email").value;
    var username = document.querySelector("#name").value;
    var pass = document.querySelector("#pass").value;
    var passCon = document.querySelector("#passCon").value;

    var regEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var regName = /^[a-zA-Z0-9]{4,20}$/;
    var regPass = /^[a-zA-Z0-9]{5,20}$/;

    var errors = [];

    if(!regEmail.test(email))
    {
        document.querySelector("#email").style.borderColor = "red";
        errors.push("Emaile is not regular");
        x = false;
    }
    else
    {
        document.querySelector("#email").style.borderColor = "green";
    }

    if(!regName.test(username))
    {
        document.querySelector("#name").style.borderColor = "red";
        errors.push("Usrename is not regular")
        x = false;
    }
    else
    {
        document.querySelector("#name").style.borderColor = "green";
    }

    if(!regPass.test(pass))
    {
        document.querySelector("#pass").style.borderColor = "red";
        errors.push("Password is regular");
        x = false;
    }
    else
    {
        document.querySelector("#pass").style.borderColor = "green";
    }

    if(pass != passCon || pass == "")
    {
        document.querySelector("#passCon").style.borderColor = "red";
        errors.push("Passwords do not match");
        x = false;
    }
    else if(pass == passCon)
    {
        document.querySelector("#passCon").style.borderColor = "green";
    }
    

    if(errors.length > 0)
    {
        //alert("ne moze");
        x = false;
    }
    else{
        //alert("ok");
        x = true;
    }
    return x;
}


function editCheck3()
{
        var x = true;
		var email = document.querySelector("#email").value;
        var username = document.querySelector("#name").value;
        var active = document.querySelector("#active").value;
        var role = document.querySelector("#role").value;

        var regEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var regName = /^[a-zA-Z0-9]{4,20}$/;

        var errors = [];

        if(!regEmail.test(email))
        {
            document.querySelector("#email").style.borderColor = "red";
            errors.push(" Email is not regular");
            x= false;
        }
        else
        {
            document.querySelector("#email").style.borderColor = "green";
            x= true;
        }

        if(!regName.test(username))
        {
            document.querySelector("#name").style.borderColor = "red";
            errors.push(" Usrename is not regular")
            x= false;
        }
        else
        {
            document.querySelector("#name").style.borderColor = "green";
            x= true;
        }

        if(active!=1 && active!=0)
        {
            document.querySelector("#active").style.borderColor = "red";
            errors.push(" Active value is regular");
            x= false;
        }
        else
        {
            document.querySelector("#active").style.borderColor = "green";
            x= true;
        }

        if(role!="guest" && role!="admin")
        {
            document.querySelector("#role").style.borderColor = "red";
            errors.push(" Role value is iregular");
            x= false;
        }
        else
        {
            document.querySelector("#role").style.borderColor = "green";
            x= true;
        }
        



        if(errors.length > 0)
        {
            var message = "<ul>";
            for($i=0; $i<errors.length; $i++)
            {
                message+= "<li>"+ errors[$i] +"</li>";
            }
            message += "</ul>";
            document.querySelector("#message").innerHTML = message;
            x= false;
        }
        else
        {
            x= true;
        }
        //alert(x);
        return x;
}

function surveyCheck()
{
    var x = false;
    var pick = document.querySelector("#drop").value;
    
    if(pick=="0")
    {
        var pick = document.querySelector("#drop").style.borderColor = "red";
        x = false
    }
    else
    {
        var pick = document.querySelector("#drop").style.borderColor = "green";
        x = true;
    }
    //alert(x);
    return x;
}




       
    


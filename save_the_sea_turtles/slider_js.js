var slider = document.getElementById("myRange");
var output = document.getElementById("area");

output.innerHTML = slider.value;

slider.oninput = function()
{
    output.innerHTML = this.value;
    document.getElementById("myRange").value=this.value;
    

    if(this.value==1)
    {
        document.getElementById("area").value="Hikkaduwa";
    }
    if(this.value==2)
    {
        document.getElementById("area").value="Colombo";
    }
    if(this.value==3)
    {
        document.getElementById("area").value="Hambanthota";
    }
    
}

var slider_2 = document.getElementById("myRange_2");
var output_2 = document.getElementById("month");

output_2.innerHTML = slider_2.value;

slider_2.oninput = function()
{
    output_2.innerHTML = this.value;
    document.getElementById("myRange_2").value=this.value;

    if(this.value==1)
    {
        document.getElementById("month").value="January - April";
        document.getElementById("id").value="1";

    }
    if(this.value==2)
    {
        document.getElementById("month").value="May - August";
        document.getElementById("id").value="2";

    }
    if(this.value==3)
    {
        document.getElementById("month").value="September - December";
        document.getElementById("id").value="3";

    }

    
}

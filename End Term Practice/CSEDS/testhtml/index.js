function test(x)
{
    document.getElementById('v1').value += x;
}
function clr()
{
    document.getElementById('v1').value="";
}
function solve()
{
    var v2= document.getElementById("v1").value
    var v3 = eval(v2)
    document.getElementById("v1").value = v3
}
function sqrt()
{
    var v = document.getElementById("v1").value
    document.getElementById("v1").value = 
        Math.sqrt(v)
}
function sin()
{
    var v = document.getElementById("v1").value
    var v = v * Math.PI/180
    document.getElementById("v1").value = 
        Math.sin(v)
}
function cos()
{
    var v = document.getElementById("v1").value
    var v = v * Math.PI/180
    document.getElementById("v1").value = 
        Math.cos(v)
}
function tan()
{
    var v = document.getElementById("v1").value
    var v = v * Math.PI/180
}
function pow()
{
    var v = document.getElementById("v1").value
    v = v.split(",")
    document.getElementById("v1").value = 
        Math.pow(v[0],v[1])
}
function ranNum()
{
    alert(Math.round(Math.random()*100))
}
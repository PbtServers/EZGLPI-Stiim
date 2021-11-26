function bum0(){
    document.getElementById('2tecnic').style.display = "none";
    document.getElementById('3tecnic').style.display = "none";
    document.getElementById('4tecnic').style.display = "none";
}
function bum1(){
    if (document.getElementById('2tecnic').style.display == "none"){
            document.getElementById('2tecnic').style.display = "block";
    }
    else {
        if (document.getElementById('3tecnic').style.display == "none"){
        document.getElementById('3tecnic').style.display = "block";
    }
    else {
        document.getElementById('4tecnic').style.display = "block";
    }
}
}
function bum2(){
    if (document.getElementById('4tecnic').style.display == "block"){
        document.getElementById('4tecnic').style.display = "none";
        document.getElementById('EZGLPI-F').value="null";
    }
    else{
        if (document.getElementById('3tecnic').style.display == "block"){
            document.getElementById('3tecnic').style.display = "none";
            document.getElementById('EZGLPI-E').value="null";
        }
        else{
        document.getElementById('2tecnic').style.display = "none";
        document.getElementById('EZGLPI-D').value="null";
        }
    }
}
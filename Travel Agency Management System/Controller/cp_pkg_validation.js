
function validation(){
    const packageName = document.getElementById('packageName').value;
    const desc = document.getElementById('desc').value;
    const price = document.getElementById('price').value;
    const img = document.getElementById('img').value;

    let errorflag=false;
    let i=0;

    if(packageName == '' || desc == '' || price == '' ||img == '')
        {
            alert("Empty field submitted");
            errorflag=true;
        }
    else
    {

    let priceflag=false;

    for(i=0;i<price.length;i++)
    {
        if((price[i] >= 0 ) && ($price[i] <= 9 ))
        {
            priceflag=true;				         
        }
    }
    if(priceflag == false)
    {
        alert ('Invalid Price Format');
        errorflag=true;
    }

    }


    

    if(errorflag==false)
    {
        return true;
    }
    else
    {
        return false;
    } 

}
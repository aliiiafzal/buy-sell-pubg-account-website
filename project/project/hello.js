

const inpFile = document.getElementById("inpFile");
const previewContainer= document.getElementById("imagePreview");
const previewImage=previewContainer.querySelector(".image-preview__image");
const previewDefaultText=previewContainer.querySelector(".image-preview__default-text");

window.onbeforeunload = function () {
    window.scrollTo(0, 0);
};

inpFile.addEventListener("change" , function(){
    const file = this.files[0];

    if(file){
        const reader = new FileReader();

       previewDefaultText.style.display="none";
        previewImage.style.display="block";

        reader.addEventListener("load",function(){
previewImage.setAttribute("src",this.result);
        });
        reader.readAsDataURL(file);
    }else{
        previewDefaultText.style.display=null;
        previewImage.style.display=null;
        previewImage.setAttribute("src","");
    }
})



const fname=document.getElementById('fnam')
const email=document.getElementById('emai')
const password=document.getElementById('passwor')
const phone=document.getElementById('phon')
const form=document.getElementById('form')



function validateForm()
{
    var formErrors="";
    var x;


    x=document.forms["form"]["fname"].value;
    if (x==null || x=="")
    {
        formErrors=formErrors+"Name is a Required Field.\n";
    }
    x=null;

    var emailPattern;
    emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    x=document.forms["form"]["email"].value;
    if (!(emailPattern.test(x)))
    {
        formErrors=formErrors+"Invalid Email Address.\n";
    }
    x=null;

    var paswd;
    paswd =  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
    x=document.forms["form"]["password"].value;
    if (!(paswd.test(x)))
    {
        formErrors=formErrors+"Password Must between 7 to 15 characters which contain at least one numeric digit and a special character.\n";
    }
    x=null;

    var numberPattern;
    numberPattern = /^\d+$/;

    x=document.forms["form"]["phone"].value;
    if (!(numberPattern.test(x)))
    {
        formErrors=formErrors+"Phone must have Numeric Value.\n";
    }
    x=null;

	x=document.forms["form"]["city"].value;
    if (x==null || x=="")
    {
        formErrors=formErrors+"City is a Required Field.\n";
    }
	else{
		var city;
		city = /^[a-zA-Z]*$/;
		if (!(city.test(x)))
		{
			formErrors=formErrors+"City must have Alphabets.\n";
		}	
	}
    x=null;
	
    if (formErrors!="")
    {
        alert(formErrors);
		return false;
    }
	else{
		return true;
	}

}
function check(btn) {
	if(btn === "no"){
		alert("You Have To Login First!!!");
		window.location.href = "loginn.php";
	}
}


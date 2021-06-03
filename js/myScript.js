function validate(form)
{
    fail = validateStudentId(form.studentid.value)
    fail += validatePassword(form.password1.value)
    fail += validateDob(form.dob.value)
    fail += validateFirstName(form.firstname.value)
    fail += validateLastName(form.lastname.value)
    fail += validateHouse(form.house.value)
    fail += validateTown(form.town.value)
    fail += validateCounty(form.county.value)
    fail += validateCountry(form.country.value)
    fail += validatePostcode(form.postcode.value)
    fail += validateImage(form.image.value)

    if(fail == ""){ 
    return true;
    }else{
    alert(fail);
    return false;
    }
}
//Validate image
function validateImage(field) 
{
    var sCurExtension = ".jpg";
    var tryme=document.forms["frmAddNewRecord"]["image"].value;
    console.log(tryme);
    if(!tryme){
        return "No image was uploaded.\n"
    }
    if (tryme.length > 0) {
    var blnValid = false;
        if (tryme.substr(tryme.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
        blnValid = true;
        console.log("Validated");
        return ""
        }
        if (!blnValid) {
        console.log("NOT ACCEPTED");
        return "Chosen file is invalid. Supported extension: .jpg!\n"
        }
    }  
}
//Validate StudentID
function validateStudentId(field)
{
    var x=document.forms["frmAddNewRecord"]["studentid"].value;
    var elem = document.getElementById("btnStoreId");
    var ids=elem.innerText;
    console.log(ids);
    var numbers = /^[0-9]+$/;
    console.log(x);    
    if (field == "") return "No Student ID was enetered.\n"
    else if (ids.includes(x)){
    return "ID taken.\n"
    console.log(ids.includes(fieldValue));
    }
    else if (field.length != 8) return "Student ID must be 8 numbers long.\n"
    else if (isNaN(x)) return "Please input numeric characters only.\n"
    return ""
}
//Validate password
function validatePassword(field)
{
    if (field == "") return "No Password was entered.\n"
    else if (field.length < 6) return "Passwords must be at least 6 characters. \n"
    else if (!/[a-z]/.test(field) || ! /[A-Z]/.test(field) || !/[0-9]/.test(field))
    return "Passwords require one each of a-z, A-Z and 0-9.\n"
    return ""
}
//Validate date of birth
function validateDob(field)
{
    if (field == "") return "No Date of Birth was entered.\n"
    else if (!(/^\d{4}\-(0[1-9]|1[012])\-(0[1-9]|[12][0-9]|3[01])$/.test(field))){
    return "Date does not match format! yyyy-mm-dd\n"
    }
    else{
    return ""
    }
}
//Validate first name      
function validateFirstName(field)
{
return (field=="") ? "No First name was entered.\n" : ""
}
//Validate last name
function validateLastName(field)
{
return (field=="") ? "No Last name was entered.\n" : ""
}
//Validate house    
function validateHouse(field)
{
    return (field=="") ? "No House was entered.\n" : ""
}
//Validate town
function validateTown(field)
{
return (field=="") ? "No Town was entered.\n" : ""
}
//Validate county
function validateCounty(field)
{
    return (field=="") ? "No County was entered.\n" : ""
}
//Validate country
function validateCountry(field)
{
    return (field=="") ? "No Country was entered.\n" : ""
}
//Validate postcode
function validatePostcode(field){
    return (field=="") ? "No Postcode was entered.\n" : ""
}

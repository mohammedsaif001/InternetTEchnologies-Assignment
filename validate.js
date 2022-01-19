function nameValidate(){
    var fName = document.getElementById('fname').value;
    var lName = document.getElementById('lname').value;

    var check1 = /^[A-Za-z]+$/
    var check2 = /^[A-Za-z]+$/

    var isTrue = true;

    if(!check1.test(fName)){
        alert("First Name must Contain Only Alphabets & must have more than 3 letters");
        isTrue = false;
    }

    if(!check2.test(lName)){
        alert("Last Name Should contain only alphabets");
        isTrue = false
    }

    if(isTrue) return true;
    else return false;

}

function empId(){
    var empId = document.getElementById('empId').value;
    let check = /^PU[0-9]{3}[A-Za-z]{3}$/

    isTrue = true;

    if(!check.test(empId)){
        alert('Emp Id is Exactly 8 digits {Ex: PU101CSE}');
        isTrue = false;
    }

    if(isTrue) return true;
    else return false;
}

function birth(){
    var location = document.getElementById('place').value;
    var check = /^[A-Za-z]+$/

    let isTrue = true;

    if(!check.test(location)){
        alert("Location should be only alphabets");
        isTrue = false;
    }

    if(isTrue) return true;
    else return false;

}

function contactDetails(){
    var mail = document.getElementById('mail').value;
    var mobile = document.getElementById('phone').value;

    let mailCheck = /^[a-zA-Z0-9_.]+@[a-zA-Z0-9.-]+[a-zA-Z]{2,}$/
    let phoneCheck =  /^[6789][0-9]{9}$/

    let isTrue = true;

    if(!mailCheck.test(mail)){
        alert("Invalid E-mail");
        isTrue = false;
    }

    if(!phoneCheck.test(mobile)){
        alert("Mobile Number should start with 6/7/8/9 and should exactly be 10 digits");
        isTrue = false;
    }

    if(isTrue) return true;
    else return false;
}

function department(){
    var qualification = document.getElementById('qualification').value;
    var deptName = document.getElementById('deptName').value;
    var deptId = document.getElementById('deptId').value;
    var salary = document.getElementById('salary').value;

    let qualificationCheck = /^[A-Za-z. ]+$/;
    let deptNameCheck =  /^[A-Za-z ]+$/;
    let deptIdCheck = /^[A-za-z]{3}[0-9]{3}$/;
    let salaryCheck =  /^[0-9]{4,}$/;

    let isTrue = true;

    if(!qualificationCheck.test(qualification)){
        alert("Qualification must be in letters");
        isTrue = false;
    }

    if(!deptNameCheck.test(deptName)){
        alert("Department Name must be in Letters");
        isTrue = false;
    }

    if(!deptIdCheck.test(deptId)){
        alert("Invalid Dept Id {It should be like CSE001} ");
        isTrue = false;
    }

    if(!salaryCheck.test(salary)){
        alert("Salary should be more than 3 digits");
        isTrue = false;
    }

    if(isTrue) return true;
    else return false;

}


function dateCheck(){
    var birth = document.getElementById('dob').value;
    var joining = document.getElementById('doj').value;

    var dateCheck = /^[0-9]{4}-[0-9]{2}-[0-9]{2}$/
    
    let isTrue = true;

    if(!dateCheck.test(birth)){
        alert("Select Date of Birth");
        isTrue = false;
    }

    if(!dateCheck.test(joining)){
        alert("Select Date of Joining");
        isTrue = false;
    }
    
    if(isTrue) return true;
    else return false;
}


function submitBtn(){
   empId();
   nameValidate();
   birth();
   contactDetails();
   department();
   dateCheck();

   if(empId() && nameValidate() && birth() && contactDetails() && department() && dateCheck()){
       alert("Employee Details Shared to Admin Dept!!!");
       return true;
   }
   else{
       return false;
   }



}
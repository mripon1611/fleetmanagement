let addMoreItem = document.getElementById("addMoreItem");

let createRow = function() {
    let tr = document.createElement('tr');
    tr.className = "content";

    // td 1
    let td1 = document.createElement('td');
    let input1 = document.createElement('select');
    let option = document.createElement('option');
    option.value = "Wheel";
    option.innerText = "Wheel";
    input1.className = "form-control";
    input1.name = "item_type[]";
    input1.appendChild(option);
    td1.appendChild(input1);
    tr.appendChild(td1);

    // td 2
    let td2 = document.createElement('td');
    let input2 = document.createElement('input');
    input2.type = "text";
    input2.className = "form-control";
    input2.name = "item_name[]";
    td2.appendChild(input2);
    tr.appendChild(td2);

    // td 3
    let td3 = document.createElement('td');
    let input3 = document.createElement('input');
    input3.type = "number";
    input3.value = "0";
    input3.className = "unit form-control";
    input3.name = "unit[]";
    td3.appendChild(input3);
    tr.appendChild(td3);

    // td 4
    let td4 = document.createElement('td');
    let input4 = document.createElement('input');
    input4.type = "number";
    input4.value = "0.00";
    input4.className = "unit_price form-control";
    input4.name = "unit_price[]";
    td4.appendChild(input4);
    tr.appendChild(td4);

    // td 5
    let td5 = document.createElement('td');
    let input5 = document.createElement('input');
    input5.type = "text";
    input5.readOnly = true;
    input5.value = "0.00";
    input5.className = "total_amount form-control";
    input5.name = "total_amount[]";
    td5.appendChild(input5);
    tr.appendChild(td5);


    let td = document.createElement('td');
    let a = document.createElement('a');
    let i = document.createElement('i');
    i.style.color = "white";
    a.className = "delete btn btn-danger";
    i.className = "ti-trash";
    a.appendChild(i);
    td.appendChild(a);
    tr.appendChild(td);
    return tr;
}

let grandTotal = 0;
let totalClassLength = document.getElementsByClassName("total_amount").length;
for(let i = 0; i < totalClassLength; i++) {
    grandTotal += Number(document.getElementsByClassName("total_amount")[i].value);
}
document.getElementById("grandTotal").value = grandTotal;


addMoreItem.addEventListener('click', function() {
    event.preventDefault();
    let newRow = createRow(); 
    $("#wrapper .content:last").before(newRow);
    bindRow(newRow, deleteRow);
    calculateTotalforUnit(newRow,getTotalforUnit);
    calculateTotalforUnitPrice(newRow,getTotalforUnitPrice);
})


let getTotalforUnit = function() {
    let unit = this.value;
    let td = this.parentNode;
    let tr = td.parentNode;
    let unitPrice = tr.querySelector('.unit_price').value;
    let total_amount = tr.querySelector('.total_amount');
    let total = unit * unitPrice;
    total_amount.value = total;

    let grandTotal = 0;
    let totalClassLength = document.getElementsByClassName("total_amount").length;
    for(let i = 0; i < totalClassLength; i++) {
        grandTotal += Number(document.getElementsByClassName("total_amount")[i].value);
    }
    document.getElementById("grandTotal").value = grandTotal;

    // alert(total);
}
let calculateTotalforUnit = function(row, getTotalforUnit) {
    let unit = row.querySelector('.unit');
    unit.onchange = getTotalforUnit;
}

let getTotalforUnitPrice = function() {
    let unitPrice = this.value;
    let td = this.parentNode;
    let tr = td.parentNode;
    let unit = tr.querySelector('.unit').value;
    let total_amount = tr.querySelector('.total_amount');
    let total = unit * unitPrice;
    total_amount.value = total;

    let grandTotal = 0;
    let totalClassLength = document.getElementsByClassName("total_amount").length;
    for(let i = 0; i < totalClassLength; i++) {
        grandTotal += Number(document.getElementsByClassName("total_amount")[i].value);
    }
    document.getElementById("grandTotal").value = grandTotal;


    // alert(total);
}
let calculateTotalforUnitPrice = function(row, getTotalforUnitPrice) {
    let unit = row.querySelector('.unit_price');
    unit.onchange = getTotalforUnitPrice;
}



function deleteRow() {
    let td = this.parentNode;
    let tr = td.parentNode;
    let tbody = tr.parentNode;
    tbody.removeChild(tr);

}
function bindRow(row, deleteButtonClick) {
    let deleteButton = row.querySelector('.delete');
    deleteButton.onclick = deleteButtonClick;
}

let wrapper = document.getElementById("wrapper");
let wrapperLength = wrapper.children.length;

for(let i=0; i<wrapperLength; i++) {
    bindRow(wrapper.children[i], deleteRow);
    calculateTotalforUnit(wrapper.children[i],getTotalforUnit);
    calculateTotalforUnitPrice(wrapper.children[i],getTotalforUnitPrice);
}

//maintenance item types and name/informations 
function createInformationRow () {
    // alert("Clicked");
    let tr = document.createElement('tr');
    tr.className = "information";

    // td 1
    let td1 = document.createElement('td');
    let input1 = document.createElement('input');
    input1.type = "text";
    input1.className = "form-control";
    input1.name = "item_name[]";
    td1.appendChild(input1);
    tr.appendChild(td1);

    let td = document.createElement('td');
    let a = document.createElement('a');
    let i = document.createElement('i');
    i.style.color = "white";
    a.className = "delete btn btn-danger";
    i.className = "ti-trash";
    a.appendChild(i);
    td.appendChild(a);
    tr.appendChild(td);
    return tr;
}

function myFunc() {
    event.preventDefault();
    let newRow = createInformationRow(); 
    $("#maintenanceInformation .information:last").before(newRow);
    bindRow(newRow, deleteRow);
}
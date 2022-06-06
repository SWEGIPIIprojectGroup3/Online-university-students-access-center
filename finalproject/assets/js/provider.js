var detail =document.getElementById('insert');
var edit = document.getElementById('edit');
var detailsImg = document.getElementById('details-img');
var detailsPage = document.getElementById('details-page');
var back = document.getElementById('buy');
var profit = document.getElementById('calcP');
var profitPage= document.getElementById('profit-page');
var editPage= document.getElementById('edit-page');
var backbtn= document.getElementById('back');
var backbtn2= document.getElementById('back2');
edit.addEventListener('click',editing);
back.addEventListener('click',refreshPage);
backbtn.addEventListener('click',refreshPage2);
backbtn2.addEventListener('click',refreshPage3);
detail.addEventListener('click',handleDetail);
profit.addEventListener('click',handleProfit);
function handleDetail(e){
    detailsPage.style.display = 'block';
}
function refreshPage(e){
    detailsPage.style.display = 'none';
    
}
function handleProfit(e){
    profitPage.style.display = 'block';
}
function refreshPage2(e){
    profitPage.style.display = 'none';
    
}
function editing(e){
    editPage.style.display = 'block';
}
function refreshPage3(e){
    editPage.style.display = 'none';
    
}




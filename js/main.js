document.getElementById("add").addEventListener('click',
function(){
    document.querySelector(".bg-modal").style.display='flex';
});

document.querySelector('.close').addEventListener('click',
function(){
    document.querySelector(".bg-modal").style.display='none';
});

document.getElementById("edit").addEventListener('click',
function(){
    document.querySelector(".bg-modal").style.display='flex';
});

document.querySelector('.close').addEventListener('click',
function(){
    document.querySelector(".bg-modal").style.display='none';
});

$('table').DataTable();
var list = document.querySelector("#list");
var list2 = document.querySelector("#list2");

let conn = Connect();
let dbname = "todoDB";

conn.getDB(dbname).then(objs => {
    console.log("DB", objs);
    objs.forEach(obj => {
        printItem(obj, list);
    });
});

function printItem(obj, list){
    var check = '<i id="check" class="fas fa-check text-success mr-2" style="display: none"></i>';
    if(obj.isDone) check = '<i id="check" class="fas fa-check text-success mr-2" style="display: visible"></i>';
    
    var new_item = 
    '<button id="item' + obj.oid +'" onclick="check('+ obj.oid +')" class="list-group-item list-group-item-action d-flex justify-content-between">' +
        '<span>' +
            check +
            '<span id="text">' + obj.text +'</span>' +
        '</span>' +
        '<span>' +
            '<span id="time" class="badge badge-primary badge-pill">'+ obj.time +'</span>' +
            '<span onclick="remove('+ obj.oid +')" class="close ml-3 text-danger" aria-label="Close">' +
                '<span aria-hidden="true">×</span>' +
            '</span>' +
        '</span>' +
    '</button>';

    list.innerHTML = list.innerHTML + new_item;
}

function check(id){
    var item = document.querySelector("#item" + id);
    var check = item.querySelector("#check");

    conn.getObject(id).then(obj => {
        if(check.style.display === "none"){
            check.style.display = "";
        }else{
            check.style.display = "none";
        }
        
        obj.isDone = !obj.isDone;

        console.log("Item", obj);
        conn.setObject(id, obj);
    });
}

function remove(id){
    var item = document.querySelector("#item" + id);
    conn.removeFromDB(dbname, id).then(result => {
        location.reload();
    });
}

function add(){
    let text = document.querySelector("#input-text");
    let time = document.querySelector("#input-time");
    let obj = {text: text.value, time: time.value};
    conn.addToDB(dbname, obj).then(result => {
        location.reload();
    });
}

function search(){
    let time = document.querySelector("#input-time2");
    conn.getWhereDB(dbname, {time: time.value}).then(arr => {
        console.log("Search Result", arr);
        list2.innerHTML = "";
        arr.forEach(obj => {
            printItem(obj, list2);
        });
    });
}
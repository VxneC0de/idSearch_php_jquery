//Registration

let document = $(document);
document.ready(startEventsRegistration);

function startEventsRegistration(){
    
    let x = $("#enter-registration");
    x.click(enter);
}

function enter(){
    
    let id = $("#id-registration").val();
    let name = $("#name-registration").val();
    let lastName = $("#lastName-registration").val();
    
    $.ajax({
        async: true,
        type: "POST",
        dataType: "html",
        url: "dataBase.php",
        data: { id: id, name: name, lastName: lastName },
        beforeSend: arrivedRegistration,
        success: arrivingRegistration,
        timeout: 5000,
        error: errorRegistration
    });
    
    return false;
}

function arrivedRegistration(){
    let x = $("#answer-registration");
    x.html('<img src="https://i.gifer.com/ZKZg.gif" alt="load" width="100" height="100">');
}

function arrivingRegistration(data){
    $("#answer-registration").text(data);
}

function errorRegistration(){
    $("#answer-registration").text("Try Later");
}


//SEARCH userSelect: 

document.ready(startEventsSearch)

function startEventsSearch() {
    let x= $("#enter-search")
    x.click(search)
}

function search() {
    
    let searchData =$("#search-registration").val();

    $.ajax({ 
        async:true,
        type:"POST",
        dataType:"html",
        url:"dataBase.php",
        data:{ searchData: searchData},
        beforeSend: arrivedSearch,
        success: arrivingSearch,
        timeout:5000, 
        error: errorSearch
    });
    
    return false
}

function arrivedSearch() {
    let x = $("#answer-search")
    x.html('<img src="https://i.gifer.com/ZKZg.gif" alt="load" width="100" height="100">');
}

function arrivingSearch(data) {
    $("#answer-search").html(data)
}

function errorSearch() {
    $("#answer-search").text("Try Later")
}

